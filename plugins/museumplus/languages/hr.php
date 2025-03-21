<?php


$lang["museumplus_configuration"]='Konfiguracija MuseumPlus-a';
$lang["museumplus_top_menu_title"]='MuseumPlus: nevažeće povezanosti';
$lang["museumplus_api_settings_header"]='Detalji API-ja';
$lang["museumplus_host"]='Domaćin';
$lang["museumplus_host_api"]='API domaćin (samo za API pozive; obično isti kao i gore navedeno)';
$lang["museumplus_application"]='Naziv aplikacije';
$lang["user"]='Korisnik';
$lang["museumplus_api_user"]='Korisnik';
$lang["password"]='Lozinka';
$lang["museumplus_api_pass"]='Lozinka';
$lang["museumplus_RS_settings_header"]='Postavke ResourceSpace-a';
$lang["museumplus_mpid_field"]='Polje metapodataka koje se koristi za pohranu identifikatora MuseumPlus (MpID)';
$lang["museumplus_module_name_field"]='Polje metapodataka koje se koristi za pohranu naziva modula za koje je MpID valjan. Ako nije postavljeno, dodatak će se koristiti s konfiguracijom modula "Objekt".';
$lang["museumplus_secondary_links_field"]='Polje metapodataka koje se koristi za držanje sekundarnih veza prema drugim modulima. ResourceSpace će generirati MuseumPlus URL za svaku vezu. Veze će imati poseban sintaksni format: naziv_modula:ID (npr. "Objekt:1234")';
$lang["museumplus_object_details_title"]='Detalji MuseumPlus-a';
$lang["museumplus_script_header"]='Postavke skripte';
$lang["museumplus_last_run_date"]='Zadnje pokretanje skripte';
$lang["museumplus_enable_script"]='Omogući MuseumPlus skriptu';
$lang["museumplus_interval_run"]='Pokreni skriptu u sljedećem intervalu (npr. +1 dan, +2 tjedna, dva tjedna). Ostavi prazno i pokrenut će se svaki put kada se cron_copy_hitcount.php pokrene';
$lang["museumplus_log_directory"]='Mapa za pohranu zapisa skripti. Ako se ostavi prazno ili je neispravno, neće se vršiti nikakvo evidentiranje.';
$lang["museumplus_integrity_check_field"]='Provjera integriteta polja';
$lang["museumplus_modules_configuration_header"]='Konfiguracija modula';
$lang["museumplus_module"]='Modul';
$lang["museumplus_add_new_module"]='Dodaj novi modul MuseumPlus-a';
$lang["museumplus_mplus_field_name"]='Naziv polja u MuseumPlus-u';
$lang["museumplus_rs_field"]='Polje ResourceSpace-a';
$lang["museumplus_view_in_museumplus"]='Pregledaj u MuseumPlus-u';
$lang["museumplus_confirm_delete_module_config"]='Jeste li sigurni da želite izbrisati konfiguraciju ovog modula? Ova radnja se ne može poništiti!';
$lang["museumplus_module_setup"]='Postavljanje modula';
$lang["museumplus_module_name"]='Naziv modula MuseumPlus';
$lang["museumplus_mplus_id_field"]='Naziv polja za ID u MuseumPlus-u';
$lang["museumplus_mplus_id_field_helptxt"]='Ostavite prazno kako bi se koristio tehnički ID \'__id\' (zadano)';
$lang["museumplus_rs_uid_field"]='Polje UID u ResourceSpace-u';
$lang["museumplus_applicable_resource_types"]='Primjenjivi tip(ovi) resursa';
$lang["museumplus_field_mappings"]='MuseumPlus - mapiranja polja ResourceSpace-a';
$lang["museumplus_add_mapping"]='Dodaj mapiranje';
$lang["museumplus_error_bad_conn_data"]='Podaci za povezivanje s MuseumPlus-om su nevažeći';
$lang["museumplus_error_unexpected_response"]='Primljen je neočekivani kod odgovora MuseumPlus-a - %code';
$lang["museumplus_error_no_data_found"]='Nema podataka pronađenih u MuseumPlus za ovaj MpID - %mpid';
$lang["museumplus_warning_script_not_completed"]='UPOZORENJE: MuseumPlus skripta nije dovršena od \'%script_last_ran\'.
Možete sigurno zanemariti ovo upozorenje samo ako ste naknadno primili obavijest o uspješnom dovršetku skripte.';
$lang["museumplus_error_script_failed"]='Skripta MuseumPlus nije uspjela pokrenuti jer je proces zaključavanja bio aktivan. To ukazuje na to da prethodno pokretanje nije bilo dovršeno. Ako trebate otključati nakon neuspjelog pokretanja, pokrenite skriptu na sljedeći način: php museumplus_script.php --clear-lock';
$lang["museumplus_php_utility_not_found"]='Konfiguracijska opcija $php_path MORA biti postavljena kako bi cron funkcionalnost uspješno radila!';
$lang["museumplus_error_not_deleted_module_conf"]='Nije moguće izbrisati traženu konfiguraciju modula.';
$lang["museumplus_error_unknown_type_saved_config"]='\'museumplus_modules_saved_config\' je nepoznatog tipa!';
$lang["museumplus_error_invalid_association"]='Nevažeća povezanost modula. Molimo provjerite jesu li ispravno uneseni ID modula i/ili zapisa!';
$lang["museumplus_id_returns_multiple_records"]='Pronađeno je više zapisa - umjesto toga unesite tehnički ID';
$lang["museumplus_error_module_no_field_maps"]='Nije moguće sinkronizirati podatke iz MuseumPlus-a. Razlog: modul \'%name\' nema konfigurirane mapiranja polja.';
$lang["plugin-museumplus-title"]='MuseumPlus';
$lang["plugin-museumplus-desc"]='Omogućuje izdvajanje metapodataka resursa iz MuseumPlus koristeći njegov REST API (MpRIA).';