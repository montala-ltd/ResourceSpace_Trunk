<?php


$lang["tms_link_configuration"]='Cynllunio Cyswllt TMS';
$lang["tms_link_dsn_name"]='Enw\'r DSN lleol i gysylltu â\'r gronfa ddata TMS. Ar Windows, mae hyn wedi\'i ffurfweddu gan offer gweinyddol->Ffynonellau Data (ODBC). Gwnewch yn siŵr bod y cysylltiad cywir wedi\'i ffurfweddu (32/64 bit)';
$lang["tms_link_table_name"]='Enw\'r tabl neu\'r golygfa TMS a ddefnyddir i adfer data TMS';
$lang["tms_link_user"]='Enw defnyddiwr ar gyfer cysylltiad cronfa ddata TMS';
$lang["tms_link_password"]='Cyfrinair ar gyfer defnyddiwr cronfa ddata TMS';
$lang["tms_link_resource_types"]='Dewiswch fathau adnoddau sy\'n gysylltiedig â TMS';
$lang["tms_link_object_id_field"]='Maes a ddefnyddir i storio ID gwrthrych TMS';
$lang["tms_link_checksum_field"]='Maes metadata i\'w ddefnyddio ar gyfer storio checksums. Mae hyn i atal diweddariadau diangen os nad yw\'r data wedi newid';
$lang["tms_link_checksum_column_name"]='Colofn a ddychwelwyd o dabl TMS i\'w defnyddio ar gyfer y cewch a ddychwelwyd o gronfa ddata TMS.';
$lang["tms_link_tms_data"]='Data TMS Byw';
$lang["tms_link_database_setup"]='Cysylltiad cronfa ddata TMS';
$lang["tms_link_metadata_setup"]='cyfuniad metadata TMS';
$lang["tms_link_tms_link_success"]='Cysylltiad llwyddiannus';
$lang["tms_link_tms_link_failure"]='Methodd cysylltu wedi methu. Gwiriwch eich manylion.';
$lang["tms_link_test_link"]='Cyswllt prawf i TMS';
$lang["tms_link_tms_resources"]='TMS Adnoddau';
$lang["tms_link_no_tms_resources"]='Dim adnoddau TMS a ddarganfuwyd. Gwiriwch eich bod wedi ffurfweddu\'r plugin yn gywir a mapio\'r meysydd metadata ObjectID a checksum cywir.';
$lang["tms_link_no_resource"]='Dim adnodd wedi\'i benodi';
$lang["tms_link_resource_id"]='ID Adnodd';
$lang["tms_link_object_id"]='ID Detholiad';
$lang["tms_link_checksum"]='Checksum';
$lang["tms_link_no_tms_data"]='Dim data a ddychwelwyd o TMS';
$lang["tms_link_field_mappings"]='TMS maes i fapiau maes ResourceSpace';
$lang["tms_link_resourcespace_field"]='Maes ResourceSpace';
$lang["tms_link_column_name"]='COLAMITY The term "TMS" is a specific acronym that may not have a direct translation in the context of digital asset management software.';
$lang["tms_link_add_mapping"]='Ychwanegu mapio';
$lang["tms_link_performance_options"]='Gosodiadau sgript TMS - bydd y gosodiadau hyn yn effeithio ar y dasg a gynhelir sy\'n diweddaru data adnoddau o TMS';
$lang["tms_link_query_chunk_size"]='Nifer o gofrestriadau i\'w dychwelyd o TMS ym mhob cwch. Gellir addasu hyn i ddod o hyd i\'r gosodiad gorau.';
$lang["tms_link_test_mode"]='Mod prawf - Gosodwch i wir a bydd y sgript yn rhedeg ond ni fydd yn diweddaru adnoddau';
$lang["tms_link_email_notify"]='Cyfeiriad e-bost y bydd y sgript yn anfon rhybuddion iddo. Bydd yn dychwelyd i gyfeiriad rhybuddion y system os bydd yn cael ei adael yn wag';
$lang["tms_link_test_count"]='Nifer o gofrestriadau i brofi sgript ar - gellir ei osod i rif is i brofi sgript a pherfformiad';
$lang["tms_link_last_run_date"]='<strong>Y sgript diwethaf a redeg: </strong>';
$lang["tms_link_script_failure_notify_days"]='Nifer y dyddiau ar ôl hynny i ddangos rhybudd a anfon e-bost os nad yw\'r sgript wedi cwblhau';
$lang["tms_link_script_problem"]='RHAGFYNIAD - ni chafodd y sgript TMS ei chwblhau\'n llwyddiannus yn ystod y %days% diwrnod diwethaf. Amser rhedeg diwethaf:';
$lang["tms_link_upload_tms_field"]='TMS ObjectID';
$lang["tms_link_upload_nodata"]='Dim data TMS a ddarganfuwyd ar gyfer y ObjectID hwn:';
$lang["tms_link_confirm_upload_nodata"]='Os gwelwch yn dda, gwirio\'r blwch i gadarnhau eich bod am barhau gyda\'r llwytho i fyny';
$lang["tms_link_enable_update_script"]='Galluogi sgript diweddaru TMS';
$lang["tms_link_enable_update_script_info"]='Galluogi sgript a fydd yn diweddaru data TMS yn awtomatig pryd bynnag y caiff y dasg a gynhelir gan ResourceSpace (cron_copy_hitcount.php) ei rhedeg.';
$lang["tms_link_log_directory"]='Cyfeiriadur i storio cofrestriadau sgript. Os bydd hyn yn cael ei adael yn wag neu\'n annilys, ni fydd cofrestru yn digwydd.';
$lang["tms_link_log_expiry"]='Nifer y dyddiau i storio cofrestriadau sgript. Bydd unrhyw gofrestriadau TMS yn y cyfeiriad hwn sy\'n hŷn yn cael eu dileu';
$lang["tms_link_column_type_required"]='<strong>NODYN</strong>: Os ydych yn ychwanegu colofn newydd, os gwelwch yn dda ychwanegwch enw\'r colofn i\'r rhestr briodol isod i ddangos a yw\'r colofn newydd yn cynnwys data rhifol neu destun.';
$lang["tms_link_numeric_columns"]='Rhestr o golofnau y dylid eu dychwelyd fel UTF-8';
$lang["tms_link_text_columns"]='Rhestr o golofnau y dylid eu dychwelyd fel UTF-16';
$lang["tms_link_bidirectional_options"]='Cydsyniad dwyrain (ychwanegu delweddau RS i TMS)';
$lang["tms_link_push_condition"]='Meini prawf metadata sy\'nな rhaid eu cwrdd â nhw er mwyn i ddelweddau gael eu hychwanegu at TMS';
$lang["tms_link_tms_loginid"]='ID mewngofnodi TMS a fydd yn cael ei ddefnyddio gan ResourceSpace i fewnosod cofrestriadau. Mae\'n rhaid creu neu fod gan gyfrif TMS gyda\'r ID hwn';
$lang["tms_link_push_image"]='Pwyswch delwedd i TMS ar ôl creu rhagolwg? (Bydd hyn yn creu cofrestr Newydd o Ddarluniau yn TMS)';
$lang["tms_link_mediatypeid"]='MathCyfryngauID i\'w ddefnyddio ar gyfer cofrestriadau cyfryngau a fewnosodwyd';
$lang["tms_link_formatid"]='FformatID i\'w ddefnyddio ar gyfer cofrestriadau cyfryngau a fewnosodwyd';
$lang["tms_link_colordepthid"]='IDDyfnderLliw i\'w ddefnyddio ar gyfer cofrestriadau cyfryngau a fewnosodwyd';
$lang["tms_link_mediapaths_resource_reference_column"]='Colofn i\'w defnyddio yn y tabl MediaMaster i storio ID y Dresource. Mae hyn yn ddewisol ac fe\'i defnyddir i osgoi nifer o ddynion defnydd yn defnyddio\'r un ID Media Master.';
$lang["tms_link_modules_mappings"]='Cydamser o fodiwlau ychwanegol (tablau/golygfeydd)';
$lang["tms_link_module"]='Modiwl';
$lang["tms_link_uid_field_int"]='UIDs TMS Cyfan. Gosodwch i ffug i ganiatáu UIDau nad ydynt yn gyfan.';
$lang["tms_link_rs_uid_field"]='Maes UID ResourceSpace';
$lang["tms_link_applicable_rt"]='Math(au) adnoddau perthnasol';
$lang["tms_link_modules_mappings_tools"]='Dulliau';
$lang["tms_link_add_new_tms_module"]='Ychwanegu modiwl TMS ychwanegol newydd';
$lang["tms_link_tms_module_configuration"]='cyfuniad modiwl TMS';
$lang["tms_link_encoding"]='codio';
$lang["tms_link_not_found_error_title"]='Nid yw wedi\'i ddod o hyd';
$lang["tms_link_not_deleted_error_detail"]='Methu dileu\'r gosodiad modiwl a ofynnwyd.';
$lang["tms_link_confirm_delete_module_config"]='A ydych yn siŵr eich bod am ddileu\'r gosodiad modiwl hwn? Ni ellir adfer y weithred hon!';
$lang["tms_link_write_to_debug_log"]='Cynnwys cynnydd sgript yn y log dadfygio system (mae angen i logio dadfygio gael ei gynllunio ar wahân). Rhybudd: Bydd yn achosi twf cyflym i ffeil log dadfygio.';
$lang["tms_link_push_image_sizes"]='Maintiau rhagolwg a ffefrir i\'w hanfon i TMS. Wedi\'i wahanu gan gomau yn nhrefn ffefrir, felly bydd y maint cyntaf sydd ar gael yn cael ei ddefnyddio';
$lang["tms_link_tms_uid_field"]='TMS UID maes';
$lang["tms_link_tms_module_name"]='Enw modiwl TMS';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field';
$lang["tms_link_media_path"]='Llwybr gwraidd i\'r storfa ffeiliau a fydd yn cael ei storio yn TMS e.e. \\RS_SERVERilestore\\. Gwnewch yn siŵr bod y slaes terfynol wedi\'i gynnwys. Bydd yr enw ffeil a gedwir yn TMS yn cynnwys y llwybr cymharol o wraidd y storfa ffeiliau.';
$lang["tms_link_selected_module_missing"] = 'Mae enw modiwl TMS ar hyn o bryd wedi\'i osod i "%%MODULE%%" ond nid yw hwn yn opsiwn ar gael. Adolygwch yr opsiynau yn y rhestr ddisgynnol a diweddarwch isod.';