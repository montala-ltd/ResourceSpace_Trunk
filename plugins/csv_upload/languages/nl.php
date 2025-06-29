<?php

$lang["csv_upload_nav_link"] = 'CSV upload vertaling: CSV uploaden';
$lang["csv_upload_intro"] = 'Dit plugin stelt je in staat om resources te creëren of bij te werken door middel van het uploaden van een CSV-bestand. Het formaat van de CSV is belangrijk';
$lang["csv_upload_condition2"] = 'De CSV moet een kopregel hebben';
$lang["csv_upload_condition3"] = 'Om later bronbestanden te kunnen uploaden met behulp van de batchvervangingsfunctionaliteit, moet er een kolom zijn met de naam \'Originele bestandsnaam\' en moet elk bestand een unieke bestandsnaam hebben';
$lang["csv_upload_condition4"] = 'Alle verplichte velden voor nieuw aangemaakte resources moeten aanwezig zijn in de CSV';
$lang["csv_upload_condition5"] = 'Voor kolommen die waarden bevatten met <b>komma\'s ( , )</b>, zorg ervoor dat je het format instelt als type <b>tekst</b>, zodat je geen aanhalingstekens ("") hoeft toe te voegen. Bij het opslaan als een csv-bestand, controleer of de optie om teksttype cellen tussen aanhalingstekens te plaatsen is aangevinkt.';
$lang["csv_upload_condition6"] = 'Je kunt een voorbeeld CSV-bestand downloaden door te klikken op <a href="../downloads/csv_upload_example.csv">csv-upload-voorbeeld.csv</a>';
$lang["csv_upload_condition7"] = 'Om bestaande gegevens van een resource bij te werken, kunt u een CSV downloaden met de bestaande metadata door te klikken op de optie \'CSV-export - metadata\' in het actiemenu van de collectie of zoekresultaten.';
$lang["csv_upload_condition8"] = 'Je kunt een eerder geconfigureerd CSV-mappingbestand opnieuw gebruiken door te klikken op \'CSV-configuratiebestand uploaden\'';
$lang["csv_upload_error_no_permission"] = 'Je hebt niet de juiste rechten om een CSV-bestand te uploaden';
$lang["check_line_count"] = 'Ten minste twee rijen gevonden in CSV-bestand';
$lang["csv_upload_file"] = 'Selecteer CSV-bestand';
$lang["csv_upload_default"] = 'Standaard';
$lang["csv_upload_error_no_header"] = 'Geen koptekstrij gevonden in het bestand';
$lang["csv_upload_update_existing"] = 'Bestaande resources bijwerken? Als dit niet is aangevinkt, worden er nieuwe resources aangemaakt op basis van de CSV-gegevens';
$lang["csv_upload_update_existing_collection"] = 'Alleen bronnen bijwerken in een specifieke collectie?';
$lang["csv_upload_process"] = 'Verwerken';
$lang["csv_upload_add_to_collection"] = 'Nieuw aangemaakte resources toevoegen aan huidige collectie?';
$lang["csv_upload_step1"] = 'Stap 1 - Bestand selecteren';
$lang["csv_upload_step2"] = 'Stap 2 - Standaardopties voor bronnen';
$lang["csv_upload_step3"] = 'Stap 3 - Koppel kolommen aan metadatavelden';
$lang["csv_upload_step4"] = 'Stap 4 - Controleren van CSV-gegevens';
$lang["csv_upload_step5"] = 'Stap 5 - Verwerken van CSV';
$lang["csv_upload_update_existing_title"] = 'Bijwerken van bestaande bronnen';
$lang["csv_upload_update_existing_notes"] = 'Selecteer de benodigde opties om bestaande resources bij te werken';
$lang["csv_upload_create_new_title"] = 'Nieuwe bronnen aanmaken';
$lang["csv_upload_create_new_notes"] = 'Selecteer de benodigde opties om nieuwe resources aan te maken';
$lang["csv_upload_map_fields_notes"] = 'Koppel de kolommen in de CSV aan de vereiste metagegevensvelden. Door op \'Volgende\' te klikken wordt de CSV gecontroleerd zonder dat er daadwerkelijk gegevens worden gewijzigd';
$lang["csv_upload_map_fields_auto_notes"] = 'Metadatavelden zijn vooraf geselecteerd op basis van namen of titels, maar controleer alstublieft of deze correct zijn';
$lang["csv_upload_workflow_column"] = 'Selecteer de kolom die de workflow status ID bevat';
$lang["csv_upload_workflow_default"] = 'Standaard workflowstatus als er geen kolom is geselecteerd of als er geen geldige status is gevonden in de kolom';
$lang["csv_upload_access_column"] = 'Selecteer de kolom die het toegangsniveau bevat (0=Openbaar, 1=Beperkt, 2=Vertrouwelijk)';
$lang["csv_upload_access_default"] = 'Standaard toegangsniveau als er geen kolom is geselecteerd of als er geen geldige toegang is gevonden in de kolom';
$lang["csv_upload_resource_type_column"] = 'Selecteer de kolom die de bron type identifier bevat';
$lang["csv_upload_resource_type_default"] = 'Standaard bron type als er geen kolom is geselecteerd of als er geen geldig type is gevonden in de kolom';
$lang["csv_upload_resource_match_column"] = 'Selecteer de kolom die de bron-identificatie bevat';
$lang["csv_upload_match_type"] = 'Overeenkomstige bron vinden op basis van bron-ID of metadata veldwaarde?';
$lang["csv_upload_multiple_match_action"] = 'Actie te ondernemen als er meerdere overeenkomende bronnen zijn gevonden';
$lang["csv_upload_validation_notes"] = 'Controleer de validatiemeldingen hieronder voordat u verder gaat. Klik op Verwerken om de wijzigingen door te voeren';
$lang["csv_upload_upload_another"] = 'Upload een andere CSV';
$lang["csv_upload_mapping config"] = 'CSV kolom toewijzingsinstellingen';
$lang["csv_upload_download_config"] = 'Download CSV-mappinginstellingen als bestand';
$lang["csv_upload_upload_config"] = 'Upload CSV-mappingbestand';
$lang["csv_upload_upload_config_question"] = 'CSV-mappingbestand uploaden? Gebruik dit als u eerder een vergelijkbare CSV heeft geüpload en de configuratie heeft opgeslagen';
$lang["csv_upload_upload_config_set"] = 'CSV configuratie set';
$lang["csv_upload_upload_config_clear"] = 'Duidelijke CSV-mapping configuratie';
$lang["csv_upload_mapping_ignore"] = 'NIET GEBRUIKEN';
$lang["csv_upload_mapping_header"] = 'Kolomkop';
$lang["csv_upload_mapping_csv_data"] = 'Voorbeeldgegevens uit CSV';
$lang["csv_upload_using_config"] = 'Het gebruik van bestaande CSV-configuratie';
$lang["csv_upload_process_offline"] = 'CSV-bestand offline verwerken? Dit moet worden gebruikt voor grote CSV-bestanden. U ontvangt een melding via een ResourceSpace-bericht zodra de verwerking is voltooid';
$lang["csv_upload_oj_created"] = 'CSV-uploadtaak aangemaakt met taak-ID # [jobref]. <br/>U ontvangt een ResourceSpace-systeembericht zodra de taak is voltooid';
$lang["csv_upload_oj_complete"] = 'CSV upload taak voltooid. Klik op de link om het volledige logbestand te bekijken';
$lang["csv_upload_oj_failed"] = 'CSV upload taak mislukt';
$lang["csv_upload_processing_x_meta_columns"] = 'Verwerken van %count metadatakolommen';
$lang["csv_upload_processing_complete"] = 'Verwerking voltooid om [time] ([hours] uur, [minutes] minuten, [seconds] seconden)';
$lang["csv_upload_error_in_progress"] = 'Verwerking afgebroken - dit CSV-bestand wordt al verwerkt';
$lang["csv_upload_error_file_missing"] = 'Fout - CSV-bestand ontbreekt: [file]';
$lang["csv_upload_full_messages_link"] = 'Alleen de eerste 1000 regels worden weergegeven. Klik <a href=\'[log_url]\' target=\'_blank\'>hier</a> om het volledige logbestand te downloaden';
$lang["csv_upload_ignore_errors"] = 'Negeer fouten en verwerk het bestand toch';
$lang["csv_upload_process_offline_quick"] = 'Validatie overslaan en CSV-bestand offline verwerken? Dit moet alleen worden gebruikt voor grote CSV-bestanden wanneer testen op kleinere bestanden is voltooid. U ontvangt een melding via een ResourceSpace-bericht zodra de upload is voltooid';
$lang["csv_upload_force_offline"] = 'Deze grote CSV kan lang duren om te verwerken, dus zal offline worden uitgevoerd. U ontvangt een melding via een ResourceSpace-bericht zodra de verwerking is voltooid';
$lang["csv_upload_recommend_offline"] = 'Deze grote CSV kan erg lang duren om te verwerken. Het wordt aanbevolen om offline taken in te schakelen als je grote CSV\'s moet verwerken';
$lang["csv_upload_createdfromcsvupload"] = 'Aangemaakt met de CSV Upload plugin';
$lang["plugin-csv_upload-title"] = 'CSV Upload';
$lang["plugin-csv_upload-desc"] = 'Upload metadata met een CSV-bestand.';

$lang["csv_upload_check_file_error"] = 'CSV-bestand kan niet worden geopend of gelezen';
$lang["csv_upload_check_utf_error"] = 'CSV-bestand is geen geldige UTF-8. Ongeldig teken op regel';
$lang["csv_upload_condition1"] = 'Zorg ervoor dat het CSV-bestand is gecodeerd met <b>UTF-8</b>.';
$lang["csv_upload_check_removebom"] = 'CSV-bestand heeft BOM dat niet kon worden verwijderd';