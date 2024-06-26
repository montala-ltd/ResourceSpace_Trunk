<?php
#
# offline_archive setup page
#

include '../../../include/boot.php';
include '../../../include/authenticate.php';
if (!checkperm('a'))
    {
    exit (escape($lang['error-permissiondenied']));
    }

$plugin_name = 'offline_archive';
if(!in_array($plugin_name, $plugins))
    {
    plugin_activate_for_setup($plugin_name);
    }

$plugin_page_heading = $lang['offline_archive_configuration'];

$page_def[] = config_add_single_ftype_select('offline_archive_archivefield',$lang['offline_archive_archivefield']);
$page_def[] = config_add_text_input('offline_archive_archivepath', $lang['offline_archive_archivepath']);
$page_def[] = config_add_text_input('offline_archive_restorepath', $lang['offline_archive_restorepath']);
$page_def[] = config_add_boolean_select('offline_archive_preservedate', $lang['offline_archive_preservedate']);
// Do the page generation ritual -- don't change this section.
config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, null, $plugin_page_heading);
include '../../../include/footer.php';
