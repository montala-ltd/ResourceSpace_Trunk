<?php
include "../include/boot.php";
include "../include/authenticate.php";

$ref = getval("ref", "", true);

if (checkperm('D')) {
    include "../include/header.php";
    echo "Error: Resource deletion is disabled.";
    exit;
} else {
    $resource = get_resource_data($ref);

    # fetch the current search
    $search = getval("search", "");
    $order_by = getval("order_by", "relevance");
    $offset = getval("offset", 0, true);
    $restypes = getval("restypes", "");

    if (strpos($search, "!") !== false) {
        $restypes = "";
    }

    $archive = getval("archive", "");
    $modal = (getval("modal", "") == "true");
    $default_sort_direction = "DESC";

    if (substr($order_by, 0, 5) == "field") {
        $default_sort_direction = "ASC";
    }

    $sort = getval("sort", $default_sort_direction);
    $curpos = getval("curpos", "");
    $error = "";

    $urlparams = array(
    'resource' => $ref,
    'ref' => $ref,
    'search' => $search,
    'order_by' => $order_by,
    'offset' => $offset,
    'restypes' => $restypes,
    'archive' => $archive,
    'default_sort_direction' => $default_sort_direction,
    'sort' => $sort,
    'curpos' => $curpos,
    "modal" => ($modal ? "true" : "")
    );

    # Not allowed to edit this resource? They shouldn't have been able to get here.
    if (!get_edit_access($ref, $resource["archive"], $resource)) {
        exit("Permission denied.");
    }

    if ($resource["lock_user"] > 0 && $resource["lock_user"] != $userref) {
        $error = get_resource_lock_message($resource["lock_user"]);
        error_alert($error, !$modal);
        exit();
    }

    hook("pageevaluation");

    if (getval("save", "") != "" && enforcePostRequest(getval("ajax", false))) {
        if ($delete_requires_password && !rs_password_verify(getval('password', ''), $userpassword, ['username' => $username])) {
            $error = $lang['wrongpassword'];
        } else {
            delete_resource($ref);
            echo "<script>
                ModalLoad('" . $baseurl_short . "pages/done.php?text=deleted&refreshcollection=true&search=" . urlencode($search) . "&offset=" . urlencode($offset) . "&order_by=" . urlencode($order_by) . "&sort=" . urlencode($sort) . "&archive=" . urlencode($archive) . "',true);
                </script>";
            exit();
        }
    }
    include "../include/header.php";

    if (isset($resource['is_transcoding']) && $resource['is_transcoding'] == 1) {
        ?>
        <div class="BasicsBox"> 
            <h2>&nbsp;</h2>
            <h1>
                <?php
                echo escape($lang["deleteresource"]);
                render_help_link("user/deleting-resources");
                ?>
            </h1>
            <p class="FormIncorrect"><?php echo escape($lang["cantdeletewhiletranscoding"]); ?></p>
        </div>
        <?php
    } else {
        ?>
        <div class="BasicsBox"> 
            <?php
            if (getval("context", false) == 'Modal') {
                $previous_page_modal = true;
            } else {
                $previous_page_modal = false;
            }

            if (!$modal) {
                ?>
                <a onclick="return CentralSpaceLoad(this,true);" href="<?php echo generateURL($baseurl_short . "pages/view.php", $urlparams);?>">
                    <?php echo LINK_CARET_BACK . escape($lang["backtoresourceview"]); ?>
                </a>
                <?php
            } elseif ($previous_page_modal) {
                ?>
                <a onclick="return ModalLoad(this,true);" href="<?php echo generateURL($baseurl_short . "pages/view.php", $urlparams);?>">
                    <?php echo LINK_CARET_BACK . escape($lang["backtoresourceview"]); ?>
                </a>
                <?php
            }
            ?>
        </div>

        <div class="BasicsBox"> 
            <h1>
                <?php
                echo escape($lang["deleteresource"]);
                render_help_link("user/deleting-resources");
                ?>
            </h1>

            <p>
                <?php if ($delete_requires_password) {
                    text("introtext");
                } else {
                    echo escape($lang["delete__nopassword"]);
                } ?>
            </p>
            
            <?php if ($resource["archive"] == 3) { ?>
                <p><strong><?php echo escape($lang["finaldeletion"]); ?></strong></p>
            <?php } ?>
            
            <form method="post" action="<?php echo $baseurl_short?>pages/delete.php?ref=<?php echo urlencode($ref) ?>&search=<?php echo urlencode($search)?>&offset=<?php echo urlencode($offset) ?>&order_by=<?php echo urlencode($order_by) ?>&sort=<?php echo urlencode($sort) ?>&archive=<?php echo urlencode($archive) ?>&amp;restypes=<?php echo urlencode($restypes); ?>">
                <input type=hidden name=ref value="<?php echo urlencode($ref) ?>">
                <?php generateFormToken("delete_resource"); ?>

                <div class="Question">
                    <label><?php echo escape($lang["resourceid"]); ?></label>
                    <div class="Fixed"><?php echo urlencode($ref) ?></div>
                    <div class="clearerleft"></div>
                </div>
                
                <?php if ($delete_requires_password) { ?>
                    <div class="Question">
                        <label for="password"><?php echo escape($lang["yourpassword"]); ?></label>
                        <input type=password class="shrtwidth" name="password" id="password" />
                        <div class="clearerleft"></div>
                        <?php if ($error != "") { ?>
                            <div class="FormError">!! <?php echo escape($error) ?> !!</div>
                        <?php } ?>
                    </div>
                <?php }

                $cancelparams = array();

                $cancelparams["ref"]        = $ref;
                $cancelparams["search"]     = $search;
                $cancelparams["offset"]     = $offset;
                $cancelparams["order_by"]   = $order_by;
                $cancelparams["sort"]       = $sort;
                $cancelparams["archive"]    = $archive;

                $cancelurl = generateURL($baseurl_short . "pages/view.php", $cancelparams);
                ?>
                
                <div class="QuestionSubmit">
                    <input name="save" type="hidden" value="true" />    
                    <input name="save" type="submit" value="<?php echo escape($lang["deleteresource"]); ?>" onclick="return ModalPost(this.form,true);"/>        
                    <input name="cancel" type="button" value="<?php echo escape($lang["cancel"]); ?>" onclick='return CentralSpaceLoad("<?php echo $cancelurl ?>",true);'/>
                </div>
            </form>
        </div>
        <?php
    }
} // end of block to prevent deletion if disabled

include "../include/footer.php";
?>
