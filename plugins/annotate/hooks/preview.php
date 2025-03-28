<?php
function HookAnnotatePreviewReplacepreviewbacktoview(){
    global $baseurl,$lang,$ref,$search,$offset,$order_by,$sort,$archive,$k;
    
    $urlparams = array(
        "annotate"  => (getval("annotate","") == "true" ? "true" : ""),
        "ref"       => $ref,
        "search"    => $search,
        "offset"    => $offset,
        "order_by"  => $order_by,
        "sort"      => $sort,
        "archive"   => $archive,
        "k"         => $k,
        );
    ?>
<p style="margin:7px 0 7px 0;padding:0;"><a class="enterLink" href="<?php echo generateURL($baseurl . "/pages/view.php", $urlparams); ?>"><?php echo LINK_CARET_BACK ?><?php echo escape($lang["backtoresourceview"]); ?></a>
<?php return true;
} 

function HookAnnotatePreviewPreviewimage2 (){
global $ajax,$ext,$baseurl,$ref,$k,$search,$offset,$order_by,$sort,$archive,$lang,
       $download_multisize,$baseurl_short,$url,$annotate_ext_exclude,
       $annotate_rt_exclude,$annotate_public_view,$annotate_pdf_output,$nextpage,
       $previouspage, $alternative, $view_title_field;
    
$resource=get_resource_data($ref);
$size = resource_download_allowed($resource['ref'], 'scr', $resource['resource_type']) ? ['scr'] : ['pre'];
$preview_path = get_resource_preview($resource, $size);
if($preview_path !== false) {
    $preview_path = $preview_path['path'];
}
$path_orig = resource_download_allowed($resource['ref'], '', $resource['resource_type']) ? get_resource_path($resource['ref'], true, '') : $preview_path;

if($preview_path === false && ($path_orig === false || trim($path_orig) == '')) { 
    return false;
}

if (in_array($resource['file_extension'],$annotate_ext_exclude)){return false;}
if (in_array($resource['resource_type'],$annotate_rt_exclude)){return false;}

if ($k != "" && !$annotate_public_view) {
    return false;
}

if (!file_exists($preview_path) && !file_exists($path_orig)) {
    return false;
}

?>

<script type="text/javascript">
    button_ok = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["ok"])) ?>";
    button_cancel = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["cancel"])) ?>";
    button_delete = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-delete"])) ?>";
    button_add = "&gt&nbsp;<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-add_note"])) ?>";     
    button_toggle = "&gt;&nbsp;<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-toggle-on"])) ?>";
    button_toggle_off = "&gt;&nbsp;<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-toggle-off"])) ?>";
    error_saving = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["error-saving"])) ?>";
    error_deleting = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["error-deleting"])) ?>";
</script>
<script>
     jQuery.noConflict();
</script>

<div id="wrapper" style="display:block;clear:none;float:left;margin: 0px;">
    <table cellpadding="0" cellspacing="0">
    <tr>
    <?php
    
     $urlparams = array(
        "ref"           => $ref,
        "alternative"   => $alternative,
        "ext"           => $ext,
        "search"        => $search,
        "offset"        => $offset,
        "order_by"      => $order_by,
        "sort"          => $sort,
        "archive"       => $archive,
        "k"             => $k
        );
    
    if($resource['file_extension'] != "jpg" && $previouspage != -1 && resource_download_allowed($ref, "scr", $resource["resource_type"])) { ?>
        <td valign="middle">
            <a onClick="return CentralSpaceLoad(this);" href="<?php echo generateURL($baseurl_short . "pages/preview.php", $urlparams,array("page" => $previouspage)); ?>" class="PDFnav  pagePrev">&lt;</a>
        </td>
    <?php 
    } elseif($nextpage !=-1 && resource_download_allowed($ref, "scr", $resource["resource_type"])) { ?>
        <td valign="middle">
            <a href="#" class="PDFnav pagePrev">&nbsp;&nbsp;&nbsp;</a>
        </td>
    <?php
    } ?>
<div>
        <td>
            <img alt="<?php echo escape(i18n_get_translated($resource['field'.$view_title_field] ?? ""));?>"
            alt="" id="toAnnotate" onload="annotate(<?php echo (int)$ref?>,'<?php echo escape($k)?>',this ,<?php echo escape(getval("annotate_toggle",true))?>,<?php echo (int) getval('page', 1); ?>, false);" src="<?php echo escape($url)?>" id="previewimage" class="Picture" GALLERYIMG="no" style="display:block;"   />
        </td>
    <?php
    if($nextpage != -1 && resource_download_allowed($ref, "scr", $resource["resource_type"])) { ?>
        <td valign="middle">
            <a onClick="return CentralSpaceLoad(this);" href="<?php echo generateURL($baseurl_short . "pages/preview.php", $urlparams, array("page" => $nextpage)); ?>" class="PDFnav pageNext">&gt;</a>
        </td>
    <?php 
    } ?>
    </div>

<div style="padding-top:5px;">

     <?php if ($annotate_pdf_output){?>
     &nbsp;&nbsp;<a style="display:inline;float:right;margin-right:10px;" href="<?php echo generateURL($baseurl. '/plugins/annotate/pages/annotate_pdf_config.php?', $urlparams, ['ext' => $resource["preview_extension"]])?>" >&gt;&nbsp;<?php echo escape($lang["pdfwithnotes"])?></a> &nbsp;&nbsp;
     <?php } ?>
        </div>
    </tr></table>
</div>

     
     
     <?php

return true;    
}


