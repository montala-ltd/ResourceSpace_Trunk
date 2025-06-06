<?php

$lang["simplesaml_configuration"] = 'Cynllun SimpleSAML';
$lang["simplesaml_main_options"] = 'Dewisiau defnydd';
$lang["simplesaml_site_block"] = 'Defnyddiwch SAML i rwystro mynediad i\'r safle yn llwyr, os bydd yn cael ei osod i wir, yna ni all neb gael mynediad i\'r safle, hyd yn oed yn ddi-enw, heb ddilysu.';
$lang["simplesaml_allow_public_shares"] = 'Os yw\'r safle\'n cael ei rwystro, a ddylid caniatáu i rannu cyhoeddus fynd heibio dilysu SAML?';
$lang["simplesaml_allowedpaths"] = 'Rhestr o lwybrau ychwanegol a ganiateir sy\'n gallu osgoi gofynion SAML';
$lang["simplesaml_allow_standard_login"] = 'Caniatáu defnyddwyr i fewngofnodi gyda chyfrifon safonol yn ogystal â defnyddio SAML SSO? RHYBUDD: Gall analluogi hyn risgio cau pob defnyddiwr allan o\'r system os yw dilysu SAML yn methu';
$lang["simplesaml_use_sso"] = 'Defnyddiwch SSO i fewngofnodi';
$lang["simplesaml_idp_configuration"] = 'Cynllunio IdP';
$lang["simplesaml_idp_configuration_description"] = 'Defnyddiwch y canlynol i gyfarwyddo\'r plwg i weithio gyda\'ch IdP';
$lang["simplesaml_username_attribute"] = 'Priodwedd(au) i\'w defnyddio ar gyfer enw defnyddiwr. Os yw hyn yn gyfuniad o ddau briodwedd, gwahanu gyda choma';
$lang["simplesaml_username_separator"] = 'Os ydych yn uno meysydd ar gyfer enw defnyddiwr, defnyddiwch y cymeriad hwn fel separator';
$lang["simplesaml_fullname_attribute"] = 'Atribut(au) i\'w defnyddio ar gyfer enw llawn. Os yw hwn yn gysylltiad o ddau atribute, gwahanu gyda choma.';
$lang["simplesaml_fullname_separator"] = 'Os ydych yn uno meysydd ar gyfer enw llawn defnyddiwch y cymeriad hwn fel separator';
$lang["simplesaml_email_attribute"] = 'Atribut i\'w ddefnyddio ar gyfer cyfeiriad e-bost';
$lang["simplesaml_group_attribute"] = 'Priodwedd i\'w defnyddio i bennu aelodaeth grŵp';
$lang["simplesaml_username_suffix"] = 'Atodiad i\'w ychwanegu at enwau defnyddwyr a grëwyd i\'w gwahaniaethu oddi wrth gyfrifon safonol ResourceSpace';
$lang["simplesaml_update_group"] = 'Diweddaru grŵp defnyddiwr ar bob logio. Os nad ydych yn defnyddio priodoledd grŵp SSO i benderfynu ar fynediad yna gosodwch hyn i ffug fel y gall defnyddwyr gael eu symud yn ddynol rhwng grwpiau';
$lang["simplesaml_groupmapping"] = 'SAML - Mapio Grŵp ResourceSpace';
$lang["simplesaml_fallback_group"] = 'Grŵp defnyddiwr diffiniedig a fydd yn cael ei ddefnyddio ar gyfer defnyddwyr newydd a grëwyd';
$lang["simplesaml_samlgroup"] = 'grŵp SAML';
$lang["simplesaml_rsgroup"] = 'Grŵp ResourceSpace';
$lang["simplesaml_priority"] = 'Blaenoriaeth (rhif uwch fydd yn cael blaenoriaeth)';
$lang["simplesaml_addrow"] = 'Ychwanegu mapio';
$lang["simplesaml_service_provider"] = 'Enw\'r darparwr gwasanaeth lleol (SP)';
$lang["simplesaml_prefer_standard_login"] = 'Dewiswch fewngofnodi safonol (ailgyfeirio i\'r dudalen fewngofnodi fel arfer)';
$lang["simplesaml_sp_configuration"] = 'Mae\'n rhaid cwblhau\'r gosodiad simplesaml SP er mwyn defnyddio\'r plwg hwn. Gweler yr erthygl yn y Gwybodaeth Sylfaenol am ragor o wybodaeth';
$lang["simplesaml_custom_attributes"] = 'Priodweddau arferol i gofrestru yn erbyn cofrestr y defnyddiwr';
$lang["simplesaml_usercomment"] = 'Crewyd gan plug-in SimpleSAML';
$lang["origin_simplesaml"] = 'SimpleSAML plugin';
$lang["simplesaml_lib_path_label"] = 'Llwybr llyfrgell SAML (os gwelwch yn dda nodwch llwybr llawn y gweinydd)';
$lang["simplesaml_login"] = 'Defnyddiwch ddilysiadau SAML i fewngofnodi i ResourceSpace? (Dim ond os yw\'r opsiwn uchod wedi\'i alluogi)';
$lang["simplesaml_create_new_match_email"] = 'Email-cydweddu: Cyn creu defnyddwyr newydd, gwirio os yw e-bost defnyddiwr SAML yn cydweddu â chyfrif RS presennol. Os ceir cydweddiad, bydd y defnyddiwr SAML yn \'dderbyn\' y cyfrif hwnnw';
$lang["simplesaml_allow_duplicate_email"] = 'Caniatáu i greu cyfrifon newydd os oes cyfrifon ResourceSpace presennol gyda\'r un cyfeiriad e-bost? (mae hyn yn cael ei orfodi os yw\'r cyfeiriad e-bost yn cyfateb yn y fan uchod a chanfyddir un cyfateb)';
$lang["simplesaml_multiple_email_match_subject"] = 'ResourceSpace SAML - ymdrech logio e-bost gwrthdaro';
$lang["simplesaml_multiple_email_match_text"] = 'Mae defnyddiwr SAML newydd wedi mynediad i\'r system ond mae mwy nag un cyfrif eisoes gyda\'r un cyfeiriad e-bost.';
$lang["simplesaml_multiple_email_notify"] = 'Cyfeiriad e-bost i hysbysu os bydd gwrthdaro e-bost yn cael ei ddod o hyd iddo';
$lang["simplesaml_duplicate_email_error"] = 'Mae cyfrif presennol gyda\'r un cyfeiriad e-bost. Cysylltwch â\'ch gweinyddwr.';
$lang["simplesaml_usermatchcomment"] = 'Diweddarwyd i ddefnyddiwr SAML gan y plugin SimpleSAML.';
$lang["simplesaml_usercreated"] = 'Creuodd ddefnyddiwr SAML newydd';
$lang["simplesaml_duplicate_email_behaviour"] = 'Rheoli cyfrifau dyblyg';
$lang["simplesaml_duplicate_email_behaviour_description"] = 'Mae\'r adran hon yn rheoli beth sy\'n digwydd os yw defnyddiwr SAML newydd sy\'n mewngofnodi yn gwrthdaro â chyfrif presennol.';
$lang["simplesaml_authorisation_rules_header"] = 'Rheol awdurdodi';
$lang["simplesaml_authorisation_rules_description"] = 'Galluogi ResourceSpace i gael ei ffurfweddu gyda awdurdodiad lleol ychwanegol ar gyfer defnyddwyr yn seiliedig ar nodwedd ychwanegol (h.y. honiad/ hawl) yn y ymateb gan yr IdP. Bydd y honiad hwn yn cael ei ddefnyddio gan y plugin i benderfynu a yw\'r defnyddiwr yn cael mynediad i ResourceSpace ai peidio.';
$lang["simplesaml_authorisation_claim_name_label"] = 'Enw\'r nodwedd (dweud/ honni)';
$lang["simplesaml_authorisation_claim_value_label"] = 'Gwerth Nodwedd (dweud/ honni)';
$lang["simplesaml_authorisation_login_error"] = 'Nac oes gennych fynediad i\'r cais hwn! Cysylltwch â\'r gweinyddwr ar gyfer eich cyfrif!';
$lang["simplesaml_healthcheck_error"] = 'Gwall plwgyn SimpleSAML';
$lang["simplesaml_rsconfig"] = 'Defnyddiwch ffeiliau gosod safonol ResourceSpace i sefydlu gosodiad SP a metadata? Os bydd hyn yn cael ei osod i false, yna bydd angen golygu ffeiliau\'n ddwyfol.';
$lang["simplesaml_sp_generate_config"] = 'Generwch gyfarwyddiadau SP';
$lang["simplesaml_sp_config"] = 'Ffurfeydd Gweithredwr Gwasanaeth (SP)';
$lang["simplesaml_sp_data"] = 'Gwybodaeth am Darparwr Gwasanaeth (SP)';
$lang["simplesaml_idp_section"] = 'IdP';
$lang["simplesaml_idp_metadata_xml"] = 'Gosodwch y Metadata XML IdP yma';
$lang["simplesaml_sp_cert_path"] = 'Llwybr i ffeil tystysgrif SP (gadael yn wag i gynhyrchu ond llenwch y manylion tystysgrif isod)';
$lang["simplesaml_sp_key_path"] = 'Llwybr i ffeil allweddol SP (.pem) (gadael yn wag i gynhyrchu)';
$lang["simplesaml_sp_idp"] = 'Dynodiad IdP (gadael yn wag os yn prosesu XML)';
$lang["simplesaml_saml_config_output"] = 'Gosodwch hyn yn eich ffeil gosod ResourceSpace';
$lang["simplesaml_sp_cert_info"] = 'Gwybodaeth am y tystysgrif (anghennir)';
$lang["simplesaml_sp_cert_countryname"] = 'Cod Gwlad (dim ond 2 nod)';
$lang["simplesaml_sp_cert_stateorprovincename"] = 'Enw\'r wladwriaeth, sirol neu dalaith';
$lang["simplesaml_sp_cert_localityname"] = 'Lleoliad (e.e. tref/dinas)';
$lang["simplesaml_sp_cert_organizationname"] = 'Enw\'r sefydliad';
$lang["simplesaml_sp_cert_organizationalunitname"] = 'Uned sefydliadol /adran';
$lang["simplesaml_sp_cert_commonname"] = 'Enw cyffredin (e.e. sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"] = 'Cyfeiriad e-bost';
$lang["simplesaml_sp_cert_invalid"] = 'Gwybodaeth dystysgrif annilys';
$lang["simplesaml_sp_cert_gen_error"] = 'Methu creu tystysgrif';
$lang["simplesaml_sp_samlphp_link"] = 'Visit SimpleSAMLphp test site';
$lang["simplesaml_sp_technicalcontact_name"] = 'Enw cyswllt technegol';
$lang["simplesaml_sp_technicalcontact_email"] = 'ebost cyswllt technegol';
$lang["simplesaml_entity_id"] = 'ID Endidwad/URL metadata';
$lang["simplesaml_single_logout_url"] = 'URL allgofnodi unig';
$lang["simplesaml_start_url"] = 'URL Dechrau/Mewngofnodi';
$lang["simplesaml_existing_config"] = 'Dilynwch y cyfarwyddiadau Cronfa wybodaeth i drosglwyddo eich gosodiad SAML presennol';
$lang["simplesaml_test_site_url"] = 'URL safle prawf SimpleSAML';
$lang["simplesaml_idp_certs"] = 'Tystysgrifau IdP SAML';
$lang["simplesaml_idp_cert_expiring"] = 'Tystysgrif IdP %idpname yn dod i ben ar %expiretime';
$lang["simplesaml_idp_cert_expired"] = 'Mae tystysgrif IdP %idpname wedi dod i ben ar %expiretime';
$lang["simplesaml_idp_cert_expires"] = 'Mae tystysgrif IdP %idpname yn dod i ben ar %expiretime';
$lang["simplesaml_check_idp_cert_expiry"] = 'Gwiriwch ddirwygiad tystysgrif IdP?';
$lang["simplesaml_custom_attribute_label"] = 'atribwt SSO';
$lang["simplesaml_authorisation_version_error"] = 'PWYSIG: Mae angen diweddaru eich ffurfweddiad SimpleSAML. Cyfeiriwch at adran \'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'> Mudo\'r SP i ddefnyddio ffurfweddiad ResourceSpace</a>\' o\'r Gofod Gwybodaeth am ragor o wybodaeth';
$lang["simplesaml_sp_auth.adminpassword"] = 'SP Test site admin password';
$lang["simplesaml_acs_url"] = 'ACS URL / Reply URL';

$lang["simplesaml_use_www_label"] = 'Caniatáu ceisiadau metadata SP ar gyfer llwybr "www"? (newid i ffug fydd yn gofyn i\'r IdP ail-fyw\'r metadata SP)';
$lang["simplesaml_use_www_error"] = 'Rhybudd! Mae\'r plugin yn defnyddio\'r llwybrau "www" hen. Os yw hwn yn gosodiad newydd, newidwch ef nawr! Fel arall, cydweithiwch gyda\'r gweinyddwr IdP fel y gallant ddiweddaru\'r metadata SP yn unol â hynny.';