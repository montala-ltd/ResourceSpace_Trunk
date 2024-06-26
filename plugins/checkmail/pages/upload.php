<?php
include "../../../include/boot.php";

include "../../../include/authenticate.php"; 


$userinfo=get_user($userref);
if (!in_array($userref,$checkmail_users)){ error_alert("You do not have permission to upload via e-mail");}

include "../../../include/header.php";
?>

<div class="BasicsBox">
    <p><a onClick="return CentralSpaceLoad(this,true);" href="<?php echo $baseurl_short?>pages/team/team_resource.php"><?php echo LINK_CARET_BACK ?><?php echo escape($lang["back"]); ?></a></p>
<h1><?php echo escape($lang['uploadviaemail']); ?></h1>

<?php 

if ($userinfo['email']==""){error_alert($lang['pleasesetupemailaddress']);}

global $applicationname;
$message = str_replace('[applicationname]', $applicationname, $lang["uploadviaemail-intro"]);
$message=str_replace("[fromaddress]",$userinfo['email'], $message);
$message=str_replace("[toaddress]",$checkmail_email,$message);

$subjectfield = ps_value("select title value from resource_type_field where ref = ?", array("i",$checkmail_subject_field), "", "schema");
$bodyfield = ps_value("select title value from resource_type_field where ref = ?", array("i",$checkmail_body_field), "", "schema");

$message=str_replace("[subjectfield]",lang_or_i18n_get_translated($subjectfield, "fieldtitle-"),$message);
$message=str_replace("[bodyfield]",lang_or_i18n_get_translated($bodyfield, "fieldtitle-"),$message);

$access=$checkmail_default_access;
$access=$lang["access$access"];
$archive=$checkmail_default_archive;
$archive=$lang["status$archive"];

$message=str_replace("[access]",$access,$message);
$message=str_replace("[archive]",$archive,$message);

$message=str_replace("[confirmation]",$lang['checkmail_confirmation_message'],$message);
?>
<p><?php echo $message;?></p>

</div>
<?php 
include "../../../include/footer.php";
?>
