<?php

// Do the include and authorization checking ritual
include '../../../include/boot.php';
include '../../../include/authenticate.php';
if (!checkperm('a')) {
    exit($lang['error-permissiondenied']);
}

$plugin_name = "whisper";
$page_heading = $lang['whisper_configuration'];
$page_intro = "";

$page_def[] = config_add_single_ftype_select("whisper_field", $lang["whisper_field"], 600, false, $TEXT_FIELD_TYPES);
$page_def[] = config_add_text_input("whisper_extensions", $lang["whisper_extensions"], false, 600);
$page_def[] = config_add_text_input("whisper_prompt", $lang["whisper_prompt"], false, 600, true);
$page_def[] = config_add_boolean_select("whisper_subtitles", $lang["whisper_subtitles"], '', 600);
$page_def[] = config_add_boolean_select("whisper_transcript", $lang["whisper_transcript"], '', 600);

// Do the page generation ritual
config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, null, $page_heading, $page_intro);
include '../../../include/footer.php';
