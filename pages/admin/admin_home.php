<?php
include "../../include/boot.php";
include "../../include/authenticate.php";

if (!checkperm("a")) {
    exit("Permission denied.");
}

include "../../include/header.php";
?>

<div class="BasicsBox"> 
    <h1><?php echo escape($lang["systemsetup"]); ?></h1>
    <?php if (getval("modal", "") == "") { ?>
        <p><?php echo text("introtext")?></p>
    <?php } ?>
    <div class="<?php echo $tilenav ? "TileNav" : "VerticalNav TileReflow"; ?>">
        <ul>
            <li>
                <a href="<?php echo $baseurl_short?>pages/admin/admin_group_management.php" onclick="return CentralSpaceLoad(this,true);" >
                    <i aria-hidden="true" class="fa fa-fw fa-users"></i>
                    <br /><?php echo escape($lang['page-title_user_group_management']); ?>
                </a>
            </li>

            <li>
                <a href="<?php echo $baseurl_short?>pages/admin/admin_resource_types.php" onclick="return CentralSpaceLoad(this,true);">
                    <i aria-hidden="true" class="fa fa-fw fa-cubes"></i>
                    <br /><?php echo escape($lang["resource_types_manage"]); ?>
                </a>
            </li>

            <li>
                <a href="<?php echo $baseurl_short?>pages/admin/admin_resource_type_fields.php" onclick="return CentralSpaceLoad(this,true);">
                    <i aria-hidden="true" class="fa fa-fw fa-bars"></i>
                    <br /><?php echo escape($lang["admin_resource_type_fields"]); ?>
                </a>
            </li>

            <li>
                <a href="<?php echo $baseurl_short?>pages/admin/admin_filter_manage.php" onclick="return CentralSpaceLoad(this,true);">
                    <i aria-hidden="true" class="fa fa-fw fa-filter"></i>
                    <br /><?php echo escape($lang["filter_manage"]); ?>
                </a>
            </li>

            <li>
                <a href="<?php echo $baseurl_short?>pages/admin/admin_report_management.php" onclick="return CentralSpaceLoad(this,true);">
                    <i aria-hidden="true" class="fa fa-fw fa-table"></i>
                    <br /><?php echo escape($lang['page-title_report_management']); ?>
                </a>
            </li>

            <li>
                <a href="<?php echo $baseurl_short?>pages/admin/admin_size_management.php" onclick="return CentralSpaceLoad(this,true);">
                    <i aria-hidden="true" class="fa fa-fw fa-files-o"></i>
                    <br /><?php echo escape($lang["page-title_size_management"]); ?>
                </a>
            </li>
            
            <?php if (checkperm("o")) { ?>
                <li>
                    <a href="<?php echo $baseurl_short?>pages/admin/admin_content.php" onClick="return CentralSpaceLoad(this,true);">
                        <i aria-hidden="true" class="fa fa-fw fa-pencil-square-o"></i>
                        <br /><?php echo escape($lang["managecontent"]); ?>
                    </a>
                </li>
            <?php } ?>
            
            <li>
                <a href="<?php echo $baseurl_short?>pages/team/team_plugins.php" onClick="return CentralSpaceLoad(this,true);">
                    <i aria-hidden="true" class="fa fa-fw fa-plug"></i>
                    <br /><?php echo escape($lang["pluginssetup"]); ?>
                </a>
            </li>

            <?php
            if (checkperm('a')) {
                $failedjobs = job_queue_get_jobs("", STATUS_ERROR);
                $failedjobcount = count($failedjobs);
                ?>
                <li>
                    <a href="<?php echo $baseurl_short; ?>pages/admin/admin_manage_slideshow.php" onClick="return CentralSpaceLoad(this, true);">
                        <i aria-hidden="true" class="fa fa-fw fa-picture-o"></i>
                        <br /><?php echo escape($lang['manage_slideshow']); ?>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $baseurl_short; ?>pages/manage_jobs.php" onClick="return CentralSpaceLoad(this, true);">
                        <i aria-hidden="true" class="fa fa-fw fa-tasks"></i>
                        <br /><?php echo escape($lang['manage_jobs']);?>
                    </a>
                    
                    <?php if ($failedjobcount > 0) { ?>
                        &nbsp;<span class="Pill"><?php echo $failedjobcount ?></span>
                    <?php } ?>
                </li>
                <?php
            }

            // A place to add links to setup pages keeping them away from the more "sysadmin" type pages towards the bottom.
            hook("customadminsetup");

            if ('' != $mysql_bin_path && $system_download_config) { ?>
                <li>
                    <a href="<?php echo $baseurl_short?>pages/admin/admin_download_config.php" onClick="return CentralSpaceLoad(this,true);">
                        <i aria-hidden="true" class="fa fa-fw fa-database"></i>
                        <br /><?php echo escape($lang["exportdata"]); ?>
                    </a>
                </li>
                <?php
            }

            if (checkperm('a')) {
                if ($enable_remote_apis) {
                    ?>
                    <li>
                        <a href="<?php echo $baseurl_short?>pages/api_test.php" onClick="return CentralSpaceLoad(this,true);">
                            <i aria-hidden="true" class="fa fa-fw fa-stethoscope"></i>
                            <br /><?php echo escape($lang["api-test-tool"]); ?>
                        </a>
                    </li>
                    <?php
                }
                ?>

                <li>
                    <a href="<?php echo $baseurl_short; ?>pages/admin/tabs.php" onclick="return CentralSpaceLoad(this, true);">
                        <i aria-hidden="true" class="fa fa-window-restore"></i>
                        <br /><?php echo escape($lang['system_tabs']); ?>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $baseurl_short?>pages/check.php" onClick="return CentralSpaceLoad(this,true);">
                        <i aria-hidden="true" class="fa fa-fw fa-check-square"></i>
                        <br /><?php echo escape($lang["installationcheck"]); ?>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $baseurl_short; ?>pages/admin/admin_system_log.php" onClick="return CentralSpaceLoad(this,true);">
                        <i aria-hidden="true" class="fa fa-fw fa-history"></i>
                        <br /><?php echo escape($lang["systemlog"]); ?>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $baseurl_short?>pages/admin/admin_system_performance.php" onClick="return CentralSpaceLoad(this,true);">
                        <i aria-hidden="true" class="fa fa-fw fa-bolt"></i>
                        <br /><?php echo escape($lang["system_performance"]); ?>
                    </a>
                </li>

                <li>
                    <a href="<?php echo $baseurl; ?>/pages/admin/admin_system_config.php" onClick="return CentralSpaceLoad(this, true);">
                        <i aria-hidden="true" class="fa fa-fw fa-cog"></i>
                        <br /><?php echo escape($lang['systemconfig']); ?>
                    </a>
                </li>
                <?php
            }

            hook("customadminfunction");
            ?>
        </ul>
    </div>
</div> <!-- End of BasicsBox -->

<?php
include "../../include/footer.php";