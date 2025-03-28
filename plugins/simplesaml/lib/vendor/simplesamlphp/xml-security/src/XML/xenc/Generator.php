<?php

declare(strict_types=1);

namespace SimpleSAML\XMLSecurity\XML\xenc;

use SimpleSAML\XML\Base64ElementTrait;

/**
 * Class representing a xenc:Generator element.
 *
 * @package simplesaml/xml-security
 */
final class Generator extends AbstractXencElement
{
    use Base64ElementTrait;


    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->setContent($content);
    }
}
