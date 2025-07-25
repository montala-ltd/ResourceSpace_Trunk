<?php


$lang["tms_link_configuration"]='Configurazione del collegamento TMS';
$lang["tms_link_dsn_name"]='Nome del DSN locale per connettersi al database TMS. Su Windows, questa operazione viene configurata tramite Strumenti di amministrazione -> Sorgenti dati (ODBC). Assicurati che la connessione corretta sia configurata (32/64 bit)';
$lang["tms_link_table_name"]='Nome della tabella o vista TMS utilizzata per recuperare i dati TMS';
$lang["tms_link_user"]='Nome utente per la connessione al database TMS';
$lang["tms_link_password"]='Password per l\'utente del database TMS';
$lang["tms_link_resource_types"]='Seleziona i tipi di risorse collegati a TMS';
$lang["tms_link_object_id_field"]='Campo utilizzato per memorizzare l\'ID dell\'oggetto TMS';
$lang["tms_link_checksum_field"]='Campo di metadati da utilizzare per memorizzare i checksum. Ciò serve per evitare aggiornamenti non necessari nel caso in cui i dati non siano stati modificati';
$lang["tms_link_checksum_column_name"]='Colonna restituita dalla tabella TMS da utilizzare per il checksum restituito dal database TMS.';
$lang["tms_link_tms_data"]='Dati TMS in tempo reale';
$lang["tms_link_database_setup"]='Connessione al database TMS';
$lang["tms_link_metadata_setup"]='Configurazione dei metadati TMS';
$lang["tms_link_tms_link_success"]='Connessione riuscita';
$lang["tms_link_tms_link_failure"]='Connessione fallita. Controlla i tuoi dettagli.';
$lang["tms_link_test_link"]='Collegamento di prova al TMS';
$lang["tms_link_tms_resources"]='Risorse TMS';
$lang["tms_link_no_tms_resources"]='Nessuna risorsa TMS trovata. Verifica di aver configurato correttamente il plugin e di aver mappato i campi corretti di metadati ObjectID e checksum';
$lang["tms_link_no_resource"]='Nessuna risorsa specificata';
$lang["tms_link_resource_id"]='Identificativo della risorsa';
$lang["tms_link_object_id"]='Identificativo oggetto';
$lang["tms_link_checksum"]='Somma di controllo';
$lang["tms_link_no_tms_data"]='Nessun dato restituito dal TMS';
$lang["tms_link_field_mappings"]='Mappatura dei campi TMS ai campi di ResourceSpace';
$lang["tms_link_resourcespace_field"]='Campo di ResourceSpace';
$lang["tms_link_column_name"]='Colonna TMS';
$lang["tms_link_add_mapping"]='Aggiungi mappatura';
$lang["tms_link_performance_options"]='Impostazioni script TMS - queste impostazioni influenzeranno il compito pianificato che aggiorna i dati delle risorse da TMS';
$lang["tms_link_query_chunk_size"]='Numero di record da recuperare da TMS in ogni blocco. Questo può essere regolato per trovare l\'impostazione ottimale.';
$lang["tms_link_test_mode"]='Modalità di prova - Impostare su vero e lo script verrà eseguito ma non aggiornerà le risorse';
$lang["tms_link_email_notify"]='Indirizzo email a cui lo script invierà le notifiche. Se lasciato vuoto, verrà utilizzato l\'indirizzo di notifica di sistema predefinito';
$lang["tms_link_test_count"]='Numero di record su cui eseguire lo script di test - può essere impostato su un numero inferiore per testare lo script e le prestazioni';
$lang["tms_link_last_run_date"]='Ultima esecuzione dello script:';
$lang["tms_link_script_failure_notify_days"]='Numero di giorni dopo i quali visualizzare l\'avviso e inviare l\'email se lo script non è stato completato';
$lang["tms_link_script_problem"]='AVVISO - lo script TMS non è stato completato con successo negli ultimi %days% giorni. Ultima esecuzione:';
$lang["tms_link_upload_tms_field"]='Identificativo oggetto TMS';
$lang["tms_link_upload_nodata"]='Nessun dato TMS trovato per questo ObjectID:';
$lang["tms_link_confirm_upload_nodata"]='Si prega di selezionare la casella per confermare di voler procedere con il caricamento';
$lang["tms_link_enable_update_script"]='Abilita lo script di aggiornamento TMS';
$lang["tms_link_enable_update_script_info"]='Abilita lo script che aggiornerà automaticamente i dati TMS ogni volta che viene eseguito il compito pianificato di ResourceSpace (cron_copy_hitcount.php).';
$lang["tms_link_log_directory"]='Cartella in cui archiviare i log degli script. Se questo campo viene lasciato vuoto o è invalido, non verrà effettuato alcun registro.';
$lang["tms_link_log_expiry"]='Numero di giorni per conservare i log degli script. Qualsiasi log TMS in questa directory che sia più vecchio verrà eliminato';
$lang["tms_link_column_type_required"]='<strong>NOTA</strong>: Se si sta aggiungendo una nuova colonna, si prega di aggiungere il nome della colonna all\'elenco appropriato di seguito per indicare se la nuova colonna contiene dati numerici o testuali.';
$lang["tms_link_numeric_columns"]='Elenco delle colonne che devono essere recuperate come UTF-8';
$lang["tms_link_text_columns"]='Elenco di colonne che dovrebbero essere recuperate come UTF-16';
$lang["tms_link_bidirectional_options"]='Sincronizzazione bidirezionale (aggiunta di immagini RS a TMS)';
$lang["tms_link_push_condition"]='Criteri di metadati che devono essere soddisfatti affinché le immagini possano essere aggiunte a TMS';
$lang["tms_link_tms_loginid"]='ID di accesso TMS che verrà utilizzato da ResourceSpace per inserire i record. Deve essere creato o esistere un account TMS con questo ID';
$lang["tms_link_push_image"]='Inviare l\'immagine a TMS dopo la creazione dell\'anteprima? (Ciò creerà un nuovo record multimediale in TMS)';
$lang["tms_link_push_image_sizes"]='Dimensioni di anteprima preferite da inviare a TMS. Separate da virgola in ordine di preferenza, in modo che la prima dimensione disponibile venga utilizzata';
$lang["tms_link_mediatypeid"]='IdentificatoreTipoMedia da utilizzare per i record dei media inseriti';
$lang["tms_link_formatid"]='ID formato da utilizzare per i record dei media inseriti';
$lang["tms_link_colordepthid"]='ProfonditàColoreID per l\'utilizzo nei record dei media inseriti';
$lang["tms_link_media_path"]='Percorso radice per il filestore che verrà memorizzato in TMS, ad esempio \\RS_SERVERilestore\\. Assicurati di includere la barra finale. Il nome del file memorizzato in TMS includerà il percorso relativo dalla radice del filestore.';
$lang["tms_link_modules_mappings"]='Sincronizzazione da moduli extra (tabelle/viste)';
$lang["tms_link_module"]='Modulo';
$lang["tms_link_tms_uid_field"]='Campo UID TMS';
$lang["tms_link_rs_uid_field"]='Campo UID di ResourceSpace';
$lang["tms_link_applicable_rt"]='Tipi di risorse applicabili';
$lang["tms_link_modules_mappings_tools"]='Strumenti';
$lang["tms_link_add_new_tms_module"]='Aggiungi un nuovo modulo extra TMS';
$lang["tms_link_tms_module_configuration"]='Configurazione del modulo TMS';
$lang["tms_link_tms_module_name"]='Nome del modulo TMS';
$lang["tms_link_encoding"]='codifica';
$lang["tms_link_not_found_error_title"]='Non trovato';
$lang["tms_link_not_deleted_error_detail"]='Impossibile eliminare la configurazione del modulo richiesto.';
$lang["tms_link_confirm_delete_module_config"]='Sei sicuro di voler eliminare questa configurazione del modulo? Questa azione non può essere annullata!';
$lang["tms_link_mediapaths_resource_reference_column"]='Colonna da utilizzare nella tabella MediaMaster per memorizzare l\'ID della Risorsa. Questo è facoltativo e viene utilizzato per evitare che più risorse utilizzino lo stesso ID Media Master.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field';
$lang["tms_link_write_to_debug_log"]='Includi il progresso dello script nel registro di debug del sistema (richiede la configurazione separata del registro di debug). Attenzione: causerà una rapida crescita del file di registro di debug.';
$lang["plugin-tms_link-title"]='Collegamento TMS';
$lang["plugin-tms_link-desc"]='Consente di estrarre i metadati delle risorse dal database TMS.';
$lang["tms_link_uid_field_int"]='TMS Integer UIDs. Imposta su falso per consentire UIDs non interi.';
$lang["tms_link_selected_module_missing"] = 'Il nome del modulo TMS è attualmente impostato su "%%MODULE%%" ma questa non è un\'opzione disponibile. Controlla le opzioni a discesa e aggiorna qui sotto.';