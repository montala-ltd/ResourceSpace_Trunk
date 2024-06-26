<?php
include "../include/boot.php";

include "../include/authenticate.php";
if (!checkperm("s"))
    {exit ("Permission denied.");}

$resource_type=getval("resource_type","",true);
$context=getval("context","");

# Loop through all the submitted keywords, build a search string
$search=array();
foreach ($_POST as $key=>$value)
    {
    if (substr($key,0,8)=="keyword_") {$search[]=urldecode(substr($key,8));}
    }

if (getval("countonly","")!="")
    {
    # Only show the results (this will appear in an iframe)
    if (count($search)==0)
        {
        $count=0;
        }
    else
        {
        $search = i18n_get_translated(join(',', $search));
        $result=do_search($search,$resource_type,"relevance",0,1);
        if (is_array($result))
            {
            $count=count($result);
            }
        else
            {
            $count=0;
            }
        }
    ?>
    <html>
    <script language="Javascript">
    <?php if ($count>0) { ?>
    parent.document.getElementById("<?php echo escape($context) ?>dosearch").value="<?php echo escape($lang["view"]) ?> <?php echo number_format($count)?> <?php echo ($count==1)? escape($lang["similarresource"]):escape($lang["similarresources"])?>";
    parent.document.getElementById("<?php echo escape($context) ?>dosearch").disabled=false;
<?php } else { ?>
    parent.document.getElementById("<?php echo escape($context) ?>dosearch").disabled=true;
    parent.document.getElementById("<?php echo escape($context) ?>dosearch").value="<?php echo escape($lang["nosimilarresources"]) ?>";
    <?php } ?>
    </script>
    </html>
    <?php
    }
else
    {
    # redirect to the search page.
    redirect ($baseurl_short."pages/search.php?search=" . urlencode(i18n_get_translated(join(',', $search))) . "&resetrestypes=yes&resource" . urlencode($resource_type) . "=yes");
    }

?>
