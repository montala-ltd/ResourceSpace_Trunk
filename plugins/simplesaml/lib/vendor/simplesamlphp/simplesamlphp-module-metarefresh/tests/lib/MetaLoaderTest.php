<?php

namespace SimpleSAML\Test\Module\metarefresh;

use PHPUnit\Framework\TestCase;
use RobRichards\XMLSecLibs\XMLSecurityDSig;
use \SimpleSAML\Configuration;

class MetaLoaderTest extends TestCase
{
    private $metaloader;
    private $config;
    private $tmpdir;
    private $source = [
        'outputFormat' => 'flatfile',
        'conditionalGET' => false,
    ];
    private $expected = [
        'entityid' => 'https://idp.example.com/idp/shibboleth',
        'description' => ['en' => 'OrganizationName',],
        'OrganizationName' => ['en' => 'OrganizationName',],
        'name' => ['en' => 'DisplayName',],
        'OrganizationDisplayName' => ['en' => 'OrganizationDisplayName',],
        'url' => ['en' => 'https://example.com',],
        'OrganizationURL' => ['en' => 'https://example.com',],
        'contacts' => [['contactType' => 'technical', 'emailAddress' => ['mailto:technical.contact@example.com',],],],
        'metadata-set' => 'saml20-idp-remote',
        'SingleSignOnService' => [
            [
                'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
                'Location' => 'https://idp.example.com/idp/profile/SAML2/POST/SSO',
            ],
        ],
        'keys' => [
            [
                'encryption' => true,
                'signing' => true,
                'type' => 'X509Certificate',
            ],
        ],
        'scope' => ['example.com',],
        'UIInfo' => [
            'DisplayName' => ['en' => 'DisplayName',],
            'Description' => ['en' => 'Description',],
        ],
    ];

    protected function setUp()
    {
        $this->config = Configuration::loadFromArray(['module.enable' => ['metarefresh' => true]], '[ARRAY]', 'simplesaml');
        Configuration::setPreLoadedConfig($this->config, 'config.php');
        $this->metaloader = new \SimpleSAML\Module\metarefresh\MetaLoader();
        /* cannot use dirname() in declaration */
        $this->source['src'] = dirname(__DIR__) . '/testmetadata.xml';
    }

    protected function tearDown()
    {
        if ($this->tmpdir && is_dir($this->tmpdir)) {
            foreach (array_diff(scandir($this->tmpdir), array('.','..')) as $file) {
                unlink($this->tmpdir.'/'.$file);
            }
            rmdir($this->tmpdir);
        }
    }

    public function testMetaLoader()
    {
        $this->metaloader->loadSource($this->source);
        $this->metaloader->dumpMetadataStdOut();
        /* match a line from the cert before we attempt to parse */
        $this->expectOutputRegex('/UTEbMBkGA1UECgwSRXhhbXBsZSBVbml2ZXJzaXR5MRgwFgYDVQQDDA9pZHAuZXhh/');

        $output = $this->getActualOutput();
        try {
            eval($output);
        } catch (\Exception $e) {
            $this->fail('Metarefresh does not produce syntactially valid code');
        }
        $this->assertArrayHasKey('https://idp.example.com/idp/shibboleth', $metadata);
        $this->assertArraySubset(
            $this->expected,
            $metadata['https://idp.example.com/idp/shibboleth']
        );
    }

    public function testSignatureVerificationFingerprintDefaultsToSHA1()
    {
        $this->metaloader->loadSource(
            array_merge(
                $this->source,
                [
                    'validateFingerprint' => '85:11:00:FF:34:55:BC:20:C0:20:5D:46:9B:2F:23:8F:41:09:68:F2',
                ]
            )
        );
        $this->metaloader->dumpMetadataStdOut();
        $this->expectOutputRegex('/UTEbMBkGA1UECgwSRXhhbXBsZSBVbml2ZXJzaXR5MRgwFgYDVQQDDA9pZHAuZXhh/');
    }

    public function testSignatureVerificationFingerprintSHA256()
    {
        $this->metaloader->loadSource(
            array_merge(
                $this->source,
                [
                    'validateFingerprint' => '36:64:49:4E:F4:4C:59:9F:5B:8F:FE:75:7E:B2:0C:1A:3A:27:AD:AF:11:B0:6D:EC:DF:38:B6:66:C8:C4:C6:84',
                    'validateFingerprintAlgorithm' => XMLSecurityDSig::SHA256,
                ]
            )
        );
        $this->metaloader->dumpMetadataStdOut();
        $this->expectOutputRegex('/UTEbMBkGA1UECgwSRXhhbXBsZSBVbml2ZXJzaXR5MRgwFgYDVQQDDA9pZHAuZXhh/');
    }

    public function testSignatureVerificationFingerprintFailure()
    {
        $this->metaloader->loadSource(array_merge($this->source, [ 'validateFingerprint' => 'DE:AD:BE:EF:DE:AD:BE:EF:DE:AD:BE:EF:DE:AD:BE:EF:DE:AD:BE:EF' ]));
        $this->metaloader->dumpMetadataStdOut();
        $this->expectOutputString('');
    }

    public function testSignatureVerificationCertificatePass()
    {
        $this->metaloader->loadSource(array_merge($this->source, [ 'certificates' => [ dirname(__DIR__) . '/mdx.pem' ] ]));
        $this->metaloader->dumpMetadataStdOut();
        $this->expectOutputRegex('/UTEbMBkGA1UECgwSRXhhbXBsZSBVbml2ZXJzaXR5MRgwFgYDVQQDDA9pZHAuZXhh/');
    }

    public function testWriteMetadataFiles()
    {
        $this->tmpdir = tempnam(sys_get_temp_dir(), 'SSP:tests:metarefresh:');
        @unlink($this->tmpdir); /* work around post 4.0.3 behaviour */
        $this->metaloader->loadSource($this->source);
        $this->metaloader->writeMetadataFiles($this->tmpdir);
        $this->assertFileExists($this->tmpdir . '/saml20-idp-remote.php');

        $GLOBALS["use_error_exception"]=true;
        try
            {
            include_once($this->tmpdir . '/saml20-idp-remote.php');
            }
        catch (throwable $e)
            {
            debug("MetaLoaderTest.php: " . $e->getMessage());
            }
        unset($GLOBALS["use_error_exception"]);

        $this->assertArrayHasKey('https://idp.example.com/idp/shibboleth', $metadata);
        $this->assertArraySubset(
            $this->expected,
            $metadata['https://idp.example.com/idp/shibboleth']
        );
    }
}