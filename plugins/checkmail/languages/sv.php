<?php
# Swedish
# Language File for the Checkmail Plugin
# Updated by Henrik Frizén 20130216 for svn r4285
# -------
#
#
$lang['checkmail_configuration']="Kolla e-post – inställningar";
$lang['checkmail_install_php_imap_extension']="Steg 1: Installera php-utökningen för imap.";
$lang['checkmail_cronhelp']="Innan du kan använda detta tillägg måste du göra ett par inställningar så att systemet kan logga in på det e-postkonto som är avsett för att ta emot filer som ska överföras.<br /><br />Säkerställ att imap är aktiverat för kontot. I Gmail aktiveras imap genom Gmail-inställningar>Vidarebefordran och POP/IMAP>Aktivera IMAP<br /><br />
När du installerar tillägget och konfigurerar det kan det vara lämpligt att köra plugins/checkmail/pages/cron_check_email.php manuellt från kommandoraden för att se hur det fungerar.
När anslutningen väl är korrekt konfigurerad och du har förstått hur skriptet fungerar måste du ställa in ett cron-jobb till att köra skriptet varje eller varannan minut. Det söker igenom brevlådan och läser ett oläst meddelande per körning.<br /><br />
Ett exempel på cron-jobb som körs varannan minut:<br />
*/2 * * * * cd /var/www/resourcespace/plugins/checkmail/pages; php ./cron_check_email.php >> /var/log/cron.log 2>&1<br /><br />";
$lang['checkmail_lastcheck']="Imap-kontot kollades senast [lastcheck].";
$lang['checkmail_cronjobprob']="Cron-jobbet för Kolla e-post kanske inte körs som det ska. Det har gått mer än 5&nbsp;minuter sedan det senast kördes.<br /><br />
Ett exempel på cron-jobb som körs varje minut:<br />
* * * * * cd /var/www/resourcespace/plugins/checkmail/pages; php ./cron_check_email.php >> /var/log/cron.log 2>&1<br /><br />";
$lang['checkmail_imap_server']="Imap-server";
$lang['checkmail_email']="E-postadress";
$lang['checkmail_password']="Lösenord";
$lang['checkmail_extension_mapping']="Knytning av materialtyp till filnamnsändelse";
$lang['checkmail_default_resource_type']="Förvald materialtyp";
$lang['checkmail_extension_mapping_desc']="Nedanför väljaren av förvald materialtyp finns en inmatningsruta för varje materialtyp. <br />Om du vill tvinga överförda filer av vissa filtyper till en specifik materialtyp, lägger du till en kommaseparerad lista med filnamnsändelserna (t.ex. jpg,gif,png) till denna materialtyp.";
$lang['checkmail_resource_type_population']="<br />(från Tillåtna filnamnsändelser)";
$lang['checkmail_subject_field']="Ämnesfält";
$lang['checkmail_body_field']="Textfält";
$lang['checkmail_purge']="Ta bort e-postmeddelande efter överföring?";
$lang['checkmail_confirm']="Skicka e-postmeddelande med bekräftelse?";
$lang['checkmail_users']="Tillåtna användare";
$lang['checkmail_default_access']="Förvald åtkomst";
$lang['checkmail_default_archive']="Förvald status";
$lang['checkmail_html']="Tillåt html-innehåll? (experimentell, ej rekommenderad)";
$lang['checkmail_mail_skipped']="Överhoppat e-postmeddelande";

$lang['addresourcesviaemail']="Lägg till material i grupp – per e-post";
$lang['uploadviaemail']="Lägg till material i grupp – per e-post";
$lang['uploadviaemail-intro']="<br /><br />Om du vill överföra filer per e-post bifogar du dem i ett e-postmeddelande som du skickar till <b><a href='mailto:[toaddress]'>[toaddress]</a></b>.</p> <p>E-postmeddelandet måste skickas från <b>[fromaddress]</b>, i annat fall kommer det att ignoreras.</p><p>Observera att e-postmeddelandets ämnesrad kopieras till fältet [subjectfield] i [applicationname]. </p><p> Observera även att meddelandetexten kopieras till fältet [bodyfield] i [applicationname]. </p>  <p>Om flera filer bifogas i ett e-postmeddelande grupperas de i en samling. Materialen får den förvalda åtkomstnivån <b>’[access]’</b> och statusen <b>’[archive]’</b>.</p><p> [confirmation]";
$lang['checkmail_confirmation_message']="När ditt e-postmeddelande är färdigbearbetat kommer du att få en bekräftelse per e-post. Om ditt e-postmeddelande har hoppats över av någon anledning (om det t.ex. har skickats från fel adress) kommer administratören att få besked om att det finns ett e-postmeddelande som kräver åtgärd.";
$lang['yourresourcehasbeenuploaded']="Materialet har överförts";
$lang['yourresourceshavebeenuploaded']="Materialen har överförts";

$lang["checkmail_blocked_users_label"]='Blockerade användare';
$lang["checkmail_allow_users_based_on_permission_label"]='Ska användare tillåtas att ladda upp baserat på behörighet?';
$lang["checkmail_not_allowed_error_template"]='[user-fullname] ([username]), med ID [user-ref] och e-postadressen [user-email] har inte tillåtelse att ladda upp via e-post (kontrollera behörigheterna "c" eller "d" eller de blockerade användarna på sidan för e-postkontroll). Inspelat den: [datetime].';
$lang["checkmail_createdfromcheckmail"]='Skapad från Check Mail-tillägg';
$lang["plugin-checkmail-title"]='Kontrollera e-post';
$lang["plugin-checkmail-desc"]='[Avancerad] Tillåter import av bifogade filer via e-post';