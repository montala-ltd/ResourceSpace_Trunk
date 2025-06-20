<?php

// Do the include and authorization checking ritual
include '../../../include/boot.php';
include '../../../include/authenticate.php';
if (!checkperm('a')) {
    exit($lang['error-permissiondenied']);
}

if (getval("cleanup","")!="") {
    // Vector cleanup
    clip_vector_cleanup();
}

$plugin_name = "clip";
$page_heading = $lang['clip-configuration'];
$page_intro = "";

$page_def[] = config_add_text_input("clip_service_url", $lang["clip_service_url"]);

$page_def[] = config_add_section_header($lang["clip-vector-generation"]);

$page_def[] = config_add_boolean_select("clip_vector_on_upload", $lang["clip-vector-on-upload"]);
$page_def[] = config_add_multi_rtype_select("clip_resource_types",$lang["clip_resource_types"]);

$page_def[] = config_add_html("<br /><div class='Question'><label>" . escape($lang["clip_vector-statistics"]). "</label>" . escape($lang["clip_count_vectors"]) . ": " . clip_count_vectors() . "<br />" . escape($lang["clip_missing_vectors"]) . ": " . clip_missing_vectors() . "<div class='clearerleft'></div></div>");

$page_def[] = config_add_html("<br /><div class='Question'><label>" . escape($lang["clip-vector-cleanup-description"]) . "</label><input type='submit' name='cleanup' value='" . escape($lang["clip-vector-cleanup"]) . "' /><div class='clearerleft'></div></div>");

// Build configuration variable descriptions
$page_def[] = config_add_section_header($lang["clip-natural-language-search"]);
$page_def[] = config_add_percent_range("clip_search_cutoff", $lang["clip_search_cutoff"]);
$page_def[] = config_add_text_input("clip_results_limit_search", $lang["clip_results_limit_search"]);
//$page_def[] = config_add_multi_ftype_select("clip_text_search_fields", $lang["clip_text_search_fields"],410,10,0);

$page_def[] = config_add_section_header($lang["clip-visually-similar-images"]);
$page_def[] = config_add_percent_range("clip_similar_cutoff", $lang["clip_similar_cutoff"]);
$page_def[] = config_add_text_input("clip_results_limit_similar", $lang["clip_results_limit_similar"]);


$page_def[] = config_add_section_header($lang["clip-duplicate-images"]);
$page_def[] = config_add_percent_range("clip_duplicate_cutoff", $lang["clip_duplicate_cutoff"]);

$page_def[] = config_add_section_header($lang["clip-automatic-tagging"]);

$page_def[] = config_add_single_ftype_select("clip_title_field", $lang["clip-title-field"], 300, false, $TEXT_FIELD_TYPES);
$page_def[] = config_add_text_input("clip_title_url", $lang["clip-title-url"], false, 600);

$page_def[] = config_add_single_ftype_select("clip_keyword_field", $lang["clip-keyword-field"], 300, false, $FIXED_LIST_FIELD_TYPES);
$page_def[] = config_add_text_input("clip_keyword_url", $lang["clip-keyword-url"], false, 600);
$page_def[] = config_add_text_input("clip_keyword_count", $lang["clip-keyword-count"]);


// Do the page generation ritual
config_gen_setup_post($page_def, $plugin_name);
include '../../../include/header.php';
config_gen_setup_html($page_def, $plugin_name, null, $page_heading, $page_intro);
include '../../../include/footer.php';
