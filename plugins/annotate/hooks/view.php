<?php
function HookAnnotateViewRenderinnerresourcepreview()
    {
    global $baseurl_short, $ajax, $ref, $ffmpeg_preview_extension, $resource, $k,
           $search, $offset, $order_by, $sort, $archive, $lang, $download_multisize,
           $baseurl, $annotate_ext_exclude, $annotate_rt_exclude, $annotate_public_view,
           $annotate_pdf_output, $ffmpeg_audio_extensions, $view_title_field, $retina_mode, $resource_view_use_pre, $access;

    if(in_array($resource['file_extension'], $annotate_ext_exclude))
        {
        return false;
        }

    if(in_array($resource['resource_type'], $annotate_rt_exclude))
        {
        return false;
        }

    if ($k != '' && !$annotate_public_view) {
        return false;
    }

    $video_preview_file = get_resource_path($ref, true, 'pre', false, $ffmpeg_preview_extension);

    if(file_exists($video_preview_file))
        {
        return false;
        }
    
    if(in_array($resource['file_extension'], $ffmpeg_audio_extensions) || $resource['file_extension'] == "mp3") 
        {
        return false;
        }

    if((int) $resource['has_image'] !== RESOURCE_PREVIEWS_NONE)
        {
        ?>
        <script>
        button_ok         = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["ok"])) ?>";
        button_cancel     = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["cancel"])) ?>";
        button_delete     = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-delete"])) ?>";
        button_add        = "&gt;&nbsp;<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-add_note"])) ?>";
        button_toggle     = "&gt;&nbsp;<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-toggle-on"])) ?>";
        button_toggle_off = "&gt;&nbsp;<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["action-toggle-off"])) ?>";
        error_saving      = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["error-saving"])) ?>";
        error_deleting    = "<?php echo preg_replace("/\r?\n/", "\\n", addslashes($lang["error-deleting"])) ?>";

        jQuery.noConflict();
        </script>
        <?php
        $use_watermark = check_use_watermark();
        $use_size      = (($retina_mode || !$resource_view_use_pre) && $access === 0) ? 'scr' : 'pre';
        $imagepath     = get_resource_path($ref, true, $use_size, false, $resource['preview_extension'], -1, 1, $use_watermark);

        if(!file_exists($imagepath))
            {
            $use_size = 'thm';
            $imagepath=get_resource_path($ref,true, $use_size,false,$resource["preview_extension"],-1,1,$use_watermark);    
            $imageurl=get_resource_path($ref,false, $use_size,false,$resource["preview_extension"],-1,1,$use_watermark);
            }
        else
            {
            $imageurl=get_resource_path($ref,false, $use_size,false,$resource["preview_extension"],-1,1,$use_watermark);
            }

        if(resource_has_access_denied_by_RT_size($resource['resource_type'], $use_size))
            {
            return false;
            }

        if (!file_exists($imagepath))
            {
            return false;
            }

        if(file_exists($imagepath))
            {
            $modal = (getval("modal", "") == "true" ? "true" : "false");
            ?>
            <div id="wrapper" class="annotate-view-wrapper">
                <div>
                <img alt="<?php echo escape(i18n_get_translated($resource['field'.$view_title_field] ?? ""));?>"
                 id="toAnnotate" onload="annotate(<?php echo (int) $ref?>,'<?php echo escape($k)?>', this, <?php echo escape(getval("annotate_toggle",true))?>, 1, <?php echo escape($modal); ?>);" src="<?php echo escape($imageurl . "&iaccept=on")?>" id="previewimage" class="Picture" GALLERYIMG="no" style="display:block;"   />
                </div>

                <div class="annotate-view-preview-links" >
                <?php    
                $urlparams = array(
                    "annotate"  => (getval("annotate","") == "true" ? "true" : ""),
                    "ref"       => $ref,
                    "ext"       => $resource["preview_extension"],
                    "search"    => $search,
                    "offset"    => $offset,
                    "order_by"  => $order_by,
                    "sort"      => $sort,
                    "archive"   => $archive,
                    "k"         => $k
                    ); ?>
                    
                    <a class="enterLink" href="<?php echo generateURL($baseurl_short . "pages/preview.php", $urlparams); ?>" title="<?php echo escape($lang["fullscreenpreview"])?>"><?php echo LINK_CARET . escape($lang["fullscreenpreview"])?></a>
                <?php

                if($annotate_pdf_output)
                    {
                    ?>
                    &nbsp;&nbsp;<a style="display:inline;float:right;" class="nowrap" href="<?php echo generateURL($baseurl_short . 'plugins/annotate/pages/annotate_pdf_config.php', $urlparams)?>" onClick="return CentralSpaceLoad(this);"><?php echo LINK_CARET . $lang["pdfwithnotes"]; ?></a>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php 
            }
        }
    else
        {
        ?>
        <div id="previewimagewrapper">
            <?php echo get_nopreview_html((string) $resource["file_extension"], $resource["resource_type"]); ?>
        </div>
        <?php
        }

    return true;    
    }

function HookAnnotateViewpreviewlinkbar()
{
    // Remove View links from drop down on view page.
    // Annotate plugin will add "Full screen preview" link instead.
    return true;
}
