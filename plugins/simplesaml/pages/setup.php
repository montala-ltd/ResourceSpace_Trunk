<?php
#
# simplesaml setup page
#

include '../../../include/boot.php';
include '../../../include/authenticate.php';
if (!checkperm('a')) {
    exit($lang['error-permissiondenied']);
}
include_once __DIR__ . '/../include/simplesaml_functions.php';

$plugin_name = 'simplesaml';
if (!in_array($plugin_name, $plugins)) {
    plugin_activate_for_setup($plugin_name);
    check_removed_ui_config("simplesaml_lib_path");
}

if ((getval('submit', '') != '' || getval('save', '') != '') && enforcePostRequest(false)) {
    $simplesaml['simplesaml_site_block'] = getval('simplesaml_site_block', '');
    $simplesaml['simplesaml_login'] = getval('simplesaml_login', '');
    $simplesaml['simplesaml_allow_public_shares'] = getval('simplesaml_allow_public_shares', '');
    $simplesaml['simplesaml_allowedpaths'] = explode(",", getval('simplesaml_allowedpaths', ''));
    $simplesaml['simplesaml_allow_standard_login'] = getval('simplesaml_allow_standard_login', '');
    $simplesaml['simplesaml_prefer_standard_login'] = getval('simplesaml_prefer_standard_login', '');
    $simplesaml['simplesaml_sp'] = getval('simplesaml_sp', '');

    $simplesaml['simplesaml_username_attribute'] = getval('simplesaml_username_attribute', '');
    $simplesaml['simplesaml_fullname_attribute'] = getval('simplesaml_fullname_attribute', '');
    $simplesaml['simplesaml_email_attribute'] = getval('simplesaml_email_attribute', '');
    $simplesaml['simplesaml_group_attribute'] = getval('simplesaml_group_attribute', '');
    $simplesaml['simplesaml_fallback_group'] = getval('simplesaml_fallback_group', '');
    $simplesaml['simplesaml_update_group'] = getval('simplesaml_update_group', '');
    $simplesaml['simplesaml_create_new_match_email'] = getval('simplesaml_create_new_match_email', '');
    $simplesaml['simplesaml_allow_duplicate_email'] = getval('simplesaml_allow_duplicate_email', '');
    $simplesaml['simplesaml_multiple_email_notify'] = getval('simplesaml_multiple_email_notify', '');
    $simplesaml['simplesaml_fullname_separator'] = getval('simplesaml_fullname_separator', '');
    $simplesaml['simplesaml_username_separator'] = getval('simplesaml_username_separator', '');
    $simplesaml['simplesaml_custom_attributes'] = getval('simplesaml_custom_attributes', '');
    $simplesaml['simplesaml_authorisation_claim_name'] = getval('simplesaml_authorisation_claim_name', '');
    $simplesaml['simplesaml_authorisation_claim_value'] = getval('simplesaml_authorisation_claim_value', '');
    $simplesaml['simplesaml_rsconfig'] = getval('simplesaml_rsconfig', '');
    $simplesaml['simplesaml_check_idp_cert_expiry'] = getval('simplesaml_check_idp_cert_expiry', '');
    $simplesaml['simplesaml_use_www'] = (bool) getval('simplesaml_use_www', '1', false, 'is_int_loose');

    $samlgroups = $_REQUEST['samlgroup'];
    $rsgroups = $_REQUEST['rsgroup'];
    $priority = $_REQUEST['priority'];

    if (count($samlgroups) > 0) {
        $simplesaml_groupmap = array();
        $mappingcount = 0;
    }

    for ($i = 0; $i < count($samlgroups); $i++) {
        if ($samlgroups[$i] <> '' && $rsgroups[$i] <> '' && is_numeric($rsgroups[$i])) {
            $simplesaml_groupmap[$mappingcount] = array();
            $simplesaml_groupmap[$mappingcount]["samlgroup"] = $samlgroups[$i];
            $simplesaml_groupmap[$mappingcount]["rsgroup"] = $rsgroups[$i];
            if (isset($priority[$i])) {
                $simplesaml_groupmap[$mappingcount]["priority"] = $priority[$i];
            }
            $mappingcount++;
        }
    }

    $simplesaml["simplesaml_groupmap"] = $simplesaml_groupmap;
    set_plugin_config("simplesaml", $simplesaml);
    include_plugin_config($plugin_name, base64_encode(serialize($simplesaml)));

    if (getval('submit', '') != '') {
        redirect('pages/team/team_plugins.php');
    }
}


global $baseurl;

// Retrieve list of groups for use in mapping dropdown
$rsgroups = ps_query('select ref, name from usergroup order by name asc', array());

// If any new values aren't set yet, fudge them so we don't get an undefined error
// this is important for updates to the plugin that introduce new variables
foreach (
    array(
    'simplesaml_create_new_match_email',
    'simplesaml_allow_duplicate_email',
    'simplesaml_multiple_email_notify',
    'simplesaml_rsconfig',
    'simplesaml_check_idp_cert_expiry',
    ) as $thefield
) {
    if (!isset($simplesaml[$thefield])) {
        $simplesaml[$thefield] = '';
    }
}

$links_trail = array(
    array(
        'title' => $lang["systemsetup"],
        'href'  => "{$baseurl_short}pages/admin/admin_home.php"
    ),
    array(
        'title' => $lang["pluginmanager"],
        'href'  => "{$baseurl_short}pages/team/team_plugins.php"
    ),
    array(
        'title' => $lang['simplesaml_configuration'],
        'help'  => 'plugins/simplesaml'
    ),
);
include '../../../include/header.php';
?>
<div class="BasicsBox"> 
    <h1><?php echo escape($lang['simplesaml_configuration']); ?></h1>
<?php
renderBreadcrumbs($links_trail);

if ($simplesaml_use_www) {
    render_top_page_error_style($lang['simplesaml_use_www_error']);
}

if (($simplesaml_rsconfig && !isset($simplesamlconfig)) || (!$simplesaml_rsconfig && !(file_exists(simplesaml_get_lib_path() . '/config/config.php')))) {
    echo "<div class='PageInfoMessage'>" . $lang['simplesaml_sp_configuration'] . "</div>";
} else {
    require_once simplesaml_get_lib_path() . '/lib/_autoload.php';
    if (!simplesaml_config_check()) {
        echo "<div class='PageInfoMessage'>" . $lang['simplesaml_authorisation_version_error'] . "</div>";
    }

    if ($simplesaml_rsconfig && isset($simplesamlconfig["authsources"])) {
        $ssp_base_url = sprintf(
            '%s/plugins/simplesaml/lib/%s/module.php/saml/sp',
            $baseurl,
            $simplesaml_use_www ? 'www' : 'public'
        );
        foreach ($simplesamlconfig['authsources'] as $authsource => $authdata) {
            if ($authsource == "admin") {
                continue;
            }

            // Show the existing SP metadata
            $spdata = [
                $lang["simplesaml_acs_url"] => "{$ssp_base_url}/saml2-acs.php/{$authsource}",
                $lang["simplesaml_entity_id"] => "{$ssp_base_url}/metadata.php/{$authsource}",
                $lang["simplesaml_single_logout_url"] => "{$ssp_base_url}/saml2-logout.php/{$authsource}",
                $lang["simplesaml_start_url"] => $baseurl,
                $lang["simplesaml_test_site_url"] => "{$baseurl}/plugins/simplesaml/lib/public/admin",
            ];
            config_section_header($lang['simplesaml_sp_data'], '');
            echo "<div class='TableArray'>";
            foreach ($spdata as $spsetting => $spvalue) {
                echo "<div class='Question'>";
                echo "<label>" . escape($spsetting) . "</label>";
                echo "<div class='Fixed'>" . escape($spvalue) . "</div>";
                echo "<div class='clearerleft'></div></div>";
            }
            echo "</div>";
        }
    }
}

?>
<form id="simplesaml_setup_form" name="simplesaml_setup_form" method="post" action="">
<?php
generateFormToken("simplesaml_form");
config_section_header($lang['simplesaml_sp_config'], '');

config_boolean_field("simplesaml_rsconfig", $lang['simplesaml_rsconfig'], $simplesaml_rsconfig);
config_boolean_field("simplesaml_check_idp_cert_expiry", $lang['simplesaml_check_idp_cert_expiry'], $simplesaml_check_idp_cert_expiry);

?>
<script>
jQuery("#simplesaml_rsconfig").change(function(event)
    {
    if(jQuery(this).val()=="1")
        {
        jQuery("#question_simplesaml_lib_path").slideUp(0);
        jQuery("#generate_sp_config_link").slideUp(0);
        }
    else
        {
        jQuery("#question_simplesaml_lib_path").slideDown(0);
        jQuery("#generate_sp_config_link").slideDown(0);
        }
    });
</script>


<div class='Question' id='sp_config_links'><div class='Fixed'>
    <?php
    $samlphplink = $simplesaml_rsconfig
        ? "{$baseurl_short}plugins/simplesaml/lib/public/admin"
        : str_replace($_SERVER["DOCUMENT_ROOT"], "", $simplesaml_lib_path . "/public/admin");
    if (isset($simplesaml_lib_path) && file_exists($simplesaml_lib_path . "/config/authsources.php")) {
        echo "<a href='https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate' target='_blank'>" . LINK_CARET . $lang["simplesaml_existing_config"] . "</a></br>";
    } else {
        echo "<a href='generate_sp_config.php' onclick='return CentralSpaceLoad(this,true)'>" . LINK_CARET . $lang["simplesaml_sp_generate_config"] . "</a></br>";
    }
    echo "<a href='" . $samlphplink . "' target='_blank'>" . LINK_CARET . $lang["simplesaml_sp_samlphp_link"] . "</a></li>";
    ?>
    </div>
    <div class='clearerleft'></div>
</div>
<?php

config_boolean_field('simplesaml_use_www', $lang['simplesaml_use_www_label'], $simplesaml_use_www);
render_fixed_text_question(
    $lang['simplesaml_lib_path_label'],
    $simplesaml_lib_path !== "" ? $simplesaml_lib_path : $lang["notavailableshort"],
    str_replace("%variable", "\$simplesaml_lib_path", $lang['ui_removed_config_message']),
    "question_simplesaml_lib_path"
);

config_text_input("simplesaml_sp", $lang['simplesaml_service_provider'], $simplesaml_sp, false, 420, false, null, false);

?>
<div class="Question">
    <br>
    <h2><?php echo escape($lang['simplesaml_authorisation_rules_header']); ?></h2>
        <p><?php echo escape($lang['simplesaml_authorisation_rules_description']); ?></p>
    <div class="clearerleft"></div>
  </div>
<?php
config_text_input('simplesaml_authorisation_claim_name', $lang['simplesaml_authorisation_claim_name_label'], $simplesaml_authorisation_claim_name);
config_text_input('simplesaml_authorisation_claim_value', $lang['simplesaml_authorisation_claim_value_label'], $simplesaml_authorisation_claim_value);

config_section_header($lang['simplesaml_main_options'], '');
config_boolean_field("simplesaml_site_block", $lang['simplesaml_site_block'], $simplesaml_site_block);
config_boolean_field("simplesaml_login", $lang['simplesaml_login'], $simplesaml_login);
config_boolean_field("simplesaml_allow_public_shares", $lang['simplesaml_allow_public_shares'], $simplesaml_allow_public_shares);
config_text_input("simplesaml_allowedpaths", $lang['simplesaml_allowedpaths'], implode(',', $simplesaml_allowedpaths));
config_boolean_field("simplesaml_allow_standard_login", $lang['simplesaml_allow_standard_login'], $simplesaml_allow_standard_login);
config_boolean_field("simplesaml_prefer_standard_login", $lang['simplesaml_prefer_standard_login'], $simplesaml_prefer_standard_login);
config_boolean_field("simplesaml_update_group", $lang['simplesaml_update_group'], $simplesaml_update_group);

config_section_header($lang['simplesaml_duplicate_email_behaviour'], $lang['simplesaml_duplicate_email_behaviour_description']);
config_boolean_field("simplesaml_create_new_match_email", $lang['simplesaml_create_new_match_email'], $simplesaml_create_new_match_email);
config_boolean_field("simplesaml_allow_duplicate_email", $lang['simplesaml_allow_duplicate_email'], $simplesaml_allow_duplicate_email);
config_text_input("simplesaml_multiple_email_notify", $lang['simplesaml_multiple_email_notify'], $simplesaml_multiple_email_notify);

config_section_header($lang['simplesaml_idp_configuration'], $lang['simplesaml_idp_configuration_description']);
config_text_input("simplesaml_username_attribute", $lang['simplesaml_username_attribute'], $simplesaml_username_attribute);
config_text_input("simplesaml_username_separator", $lang['simplesaml_username_separator'], $simplesaml_username_separator);
config_text_input("simplesaml_fullname_attribute", $lang['simplesaml_fullname_attribute'], $simplesaml_fullname_attribute);
config_text_input("simplesaml_fullname_separator", $lang['simplesaml_fullname_separator'], $simplesaml_fullname_separator);
config_text_input("simplesaml_email_attribute", $lang['simplesaml_email_attribute'], $simplesaml_email_attribute);
config_text_input("simplesaml_group_attribute", $lang['simplesaml_group_attribute'], $simplesaml_group_attribute);

$rsgroupoption = array();
foreach ($rsgroups as $rsgroup) {
    $rsgroupoption[$rsgroup["ref"]] = $rsgroup["name"];
}

config_single_select("simplesaml_fallback_group", $lang['simplesaml_fallback_group'], $simplesaml_fallback_group, $rsgroupoption, true);
config_text_input('simplesaml_custom_attributes', $lang['simplesaml_custom_attributes'], $simplesaml_custom_attributes);
?>
<div class="Question">
<h3><?php echo escape($lang['simplesaml_groupmapping']); ?></h3>
<table id='groupmaptable'>
<tr><th>
<strong><?php echo escape($lang['simplesaml_samlgroup']); ?></strong>
</th><th>
<strong><?php echo escape($lang['simplesaml_rsgroup']); ?></strong>
</th><th>
<strong><?php echo escape($lang['simplesaml_priority']); ?></strong>
</th>
</tr>

<?php
for ($i = 0; $i < count($simplesaml_groupmap) + 1; $i++) {
    if ($i >= count($simplesaml_groupmap)) {
        $thegroup = array();
        $thegroup['samlgroup'] = '';
        $thegroup['rsgroup'] = '';
        $thegroup['priority'] = '';
        $rowid = 'groupmapmodel';
    } else {
        $thegroup = $simplesaml_groupmap[$i];
        $rowid = "row$i";
    }
    ?>
<tr id='<?php echo $rowid; ?>'>
   <td><input type='text' name='samlgroup[]' value='<?php echo escape($thegroup['samlgroup']); ?>' /></td>
   <td><select name='rsgroup[]'><option value=''></option>
    <?php
    foreach ($rsgroups as $rsgroup) {
        echo  "<option value='" . $rsgroup['ref'] . "'";
        if ($thegroup['rsgroup'] == $rsgroup['ref']) {
            echo " selected";
        }
        echo ">" . $rsgroup['name'] . "</option>\n";
    }
    ?></select>
    </td>
    <td><input type='text' name='priority[]' value='<?php echo escape($thegroup['priority']); ?>' /></td>
</tr>
<?php } ?>
</table>

<a onclick='addGroupMapRow()'><?php echo escape($lang['simplesaml_addrow']); ?></a>
</div>

<div class="Question">  
<label for="submit"></label>
<input type="submit" name="save" id="save" value="<?php echo escape($lang['plugins-saveconfig']); ?>">
<input type="submit" name="submit" id="submit" value="<?php echo escape($lang['plugins-saveandexit']); ?>">
</div><div class="clearerleft"></div>

</form>
</div>  

<script language="javascript">
        function addGroupMapRow() {
 
            var table = document.getElementById("groupmaptable");
 
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
 
            row.innerHTML = document.getElementById("groupmapmodel").innerHTML;
        }
</script> 
<?php

include '../../../include/footer.php';
