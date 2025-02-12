<?php


$lang["museumplus_configuration"]='MuseumPlus Cyfluniad';
$lang["museumplus_top_menu_title"]='MuseumPlus: cysylltiadau annilys';
$lang["museumplus_api_settings_header"]='manylion API';
$lang["museumplus_host"]='Gwesteiwr';
$lang["museumplus_host_api"]='API Host (ar gyfer galwadau API yn unig; fel arfer yr un â\'r uchod)';
$lang["museumplus_application"]='Enw\'r cais (nid yw\'n ofynnol ar gyfer URLs M+ Host newydd)';
$lang["user"]='Defnyddiwr';
$lang["museumplus_api_user"]='Defnyddiwr';
$lang["password"]='Cyfrinair';
$lang["museumplus_api_pass"]='Cyfrinair';
$lang["museumplus_RS_settings_header"]='Gosodiadau ResourceSpace';
$lang["museumplus_mpid_field"]='Maes metadata a ddefnyddir i storio\'r adnabod MuseumPlus (MpID)';
$lang["museumplus_module_name_field"]='Maes metadata a ddefnyddir i gadw enw\'r modiwl y mae\'r MpID yn ddilys ar ei gyfer. Os na chaiff ei osod, bydd y plugin yn dychwelyd i gyfarwyddiadau\'r modiwl "Object".';
$lang["museumplus_secondary_links_field"]='Maes metadata a ddefnyddir i gadw\'r dolenni eilaidd i fodylau eraill. Bydd ResourceSpace yn creu URL MuseumPlus ar gyfer pob un o\'r dolenni. Bydd dolenni yn cael fformat syntacs arbennig: enw_modyl:ID (e.e. "Object:1234")';
$lang["museumplus_object_details_title"]='Manylion MuseumPlus';
$lang["museumplus_script_header"]='Gosodiadau sgript';
$lang["museumplus_last_run_date"]='Sgript a gynhelir diwethaf';
$lang["museumplus_enable_script"]='Galluogwch sgript MuseumPlus';
$lang["museumplus_interval_run"]='Rhedeg sgript ar y cyfnod canlynol (e.e. +1 diwrnod, +2 wythnos, pymtheg niwrnod). Gadewch yn wag a bydd yn rhedeg bob tro y bydd cron_copy_hitcount.php yn rhedeg)';
$lang["museumplus_log_directory"]='Cyfeiriadur i storio cofrestriadau sgript. Os bydd hyn yn cael ei adael yn wag neu\'n annilys, ni fydd cofrestru yn digwydd.';
$lang["museumplus_integrity_check_field"]='Maes gwirio cywirdeb';
$lang["museumplus_modules_configuration_header"]='Cynllunio modiwlau';
$lang["museumplus_module"]='Modiwl';
$lang["museumplus_add_new_module"]='Ychwanegu modiwl MuseumPlus newydd';
$lang["museumplus_rs_field"]='Maes ResourceSpace';
$lang["museumplus_view_in_museumplus"]='View in MuseumPlus';
$lang["museumplus_confirm_delete_module_config"]='A ydych yn siŵr eich bod am ddileu\'r gosodiad modiwl hwn? Ni ellir adfer y weithred hon!';
$lang["museumplus_module_setup"]='Gosodiad modiwl';
$lang["museumplus_mplus_id_field_helptxt"]='Gadewch yn wag i ddefnyddio\'r ID technegol \'__id\' (dyfarnwyd)';
$lang["museumplus_rs_uid_field"]='Maes UID ResourceSpace';
$lang["museumplus_applicable_resource_types"]='Math(au) adnoddau perthnasol';
$lang["museumplus_field_mappings"]='MuseumPlus - mapiau maes ResourceSpace';
$lang["museumplus_add_mapping"]='Ychwanegu mapio';
$lang["museumplus_error_bad_conn_data"]='Data Cyswllt MuseumPlus yn annilys';
$lang["museumplus_error_unexpected_response"]='Cod ymateb annisgwyl MuseumPlus wedi\'i dderbyn - %code';
$lang["museumplus_error_no_data_found"]='Dim data wedi\'i ddod o hyd yn MuseumPlus ar gyfer y MpID hwn - %mpid';
$lang["museumplus_warning_script_not_completed"]='RHAGOLWG: Nid yw\'r sgript MuseumPlus wedi cwblhau ers \'%script_last_ran\'. Gallwch anwybyddu\'r rhybudd hwn yn ddiogel dim ond os ydych wedi derbyn hysbysiad o gwblhau llwyddiannus y sgript yn ddiweddarach.';
$lang["museumplus_php_utility_not_found"]='Mae\'n rhaid gosod yr opsiwn gosod $php_path er mwyn i swyddogaeth cron redeg yn llwyddiannus!';
$lang["museumplus_error_not_deleted_module_conf"]='Methu dileu\'r gosodiad modiwl a ofynnwyd.';
$lang["museumplus_error_unknown_type_saved_config"]='Mae\'r \'museumplus_modules_saved_config\' yn fath anhysbys!';
$lang["museumplus_error_invalid_association"]='Cysylltiad modiwl(au) annilys. Gwnewch yn siŵr bod y Modiwl a/neu ID y Cofnod cywir wedi\'u rhoi!';
$lang["museumplus_id_returns_multiple_records"]='Cafwyd cofrestriadau lluosog - os gwelwch yn dda rhowch y ID technegol yn lle hynny';
$lang["museumplus_error_module_no_field_maps"]='Methu syncio data o MuseumPlus. Rheswm: mae\'r modiwl \'%name\' heb fapiau maes wedi\'u cynllunio.';
$lang["museumplus_mplus_field_name"]='MuseumPlus enw maes';
$lang["museumplus_module_name"]='MuseumPlus module name';
$lang["museumplus_mplus_id_field"]='Enw maes ID MuseumPlus';
$lang["museumplus_error_script_failed"]='Method MuseumPlus methu rhedeg oherwydd bod clo proses ar waith. Mae hyn yn dangos nad yw\'r rhediad blaenorol wedi cwblhau. Os oes angen i chi glirio\'r clo ar ôl rhediad a fethodd, rhedwch y sgript fel a ganlyn: php museumplus_script.php --clear-lock';