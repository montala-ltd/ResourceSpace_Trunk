<?php
/**
 * Plugins management interface (part of team center)
 * 
 * @package ResourceSpace
 * @subpackage Pages_Team
 */
include "../../include/boot.php";

include "../../include/authenticate.php";

if(!checkperm('a'))
    {
    header('HTTP/1.1 401 Unauthorized');
    exit(escape($lang['error-permissiondenied']));
    }

if (isset($_REQUEST['activate']) && enforcePostRequest(false))
    {
    $inst_name = trim(getval('activate',''), '#');
    if ($inst_name != '' && !in_array($inst_name,$disabled_plugins))
        {
        activate_plugin($inst_name);   
        }
    redirect($baseurl_short.'pages/team/team_plugins.php');    # Redirect back to the plugin page so plugin is actually activated. 
    }
elseif (isset($_REQUEST['deactivate']) && enforcePostRequest(false))
    { # Deactivate a plugin
    # Strip the leading hash mark added by javascript.
    $remove_name = trim(getval('deactivate',''), "#");
    if ($remove_name!='')
        {
        deactivate_plugin($remove_name); 
        }
    redirect($baseurl_short.'pages/team/team_plugins.php');    # Redirect back to the plugin page so plugin is actually deactivated.
    }
elseif (isset($_REQUEST['purge']) && enforcePostRequest(false))
    { # Purge a plugin's configuration (if stored in DB)
    # Strip the leading hash mark added by javascript.
    $purge_name = trim(getval('purge',''), '#');
    if ($purge_name!='')
        {
        purge_plugin_config($purge_name);
        }
    }

$inst_plugins = ps_query('SELECT name, config_url, descrip, author, ' .
    'inst_version, update_url, info_url, enabled_groups, disable_group_select, title, icon ' .
    'FROM plugins WHERE inst_version>=0 order by name');
/**
 * Ad hoc function for array_walk through plugins array.
 * 
 * When called from array_walk, steps through each element of the installed 
 * plugins array and checks to see if it was installed via config.php (legacy).
 * If so, sets an addition array key for template to display the link correctly.
 * 
 * @param array $i_plugin Plugin array element. 
 * @param string $key Array key. 
 */
function legacy_check(&$i_plugin, $key)
    {
    global $legacy_plugins;
    if (array_search($i_plugin['name'], $legacy_plugins)!==false)
        {
        $i_plugin['legacy_inst'] = true;
        }
    }

for ($n=0;$n<count($inst_plugins);$n++)
    {
    # Check if group access is permitted by YAML file. Needed because plugin may have been enabled before this development)
    $py = get_plugin_yaml($inst_plugins[$n]["name"], false);  
    
    // Override YAML values (not config) with updated plugin YAML
    foreach(["title","name","icon","author","desc","version","category","config_url"] as $yaml_idx)
        {
        if(isset($py[$yaml_idx]))
            {
            $inst_plugins[$n][$yaml_idx] = $py[$yaml_idx];
            if (($yaml_idx)=="desc") // Special case, "desc" in the YAML is "descrip" in the page/db.
                {
                $inst_plugins[$n]["descrip"] = $py[$yaml_idx];
                }
            }
        }
    }
        
array_walk($inst_plugins, 'legacy_check');
# Build an array of available plugins.
$plugins_avail = array();

function load_plugins($plugins_dir)
    {
    global $plugins_avail;
 
    $dirh = opendir($plugins_dir);
    while (false !== ($file = readdir($dirh))) 
        {
        if (is_dir($plugins_dir.$file)&&$file[0]!='.')
            {
            #Check if the plugin is already activated.
            $status = ps_query('SELECT inst_version, config FROM plugins WHERE name=?',array("s",$file));
            if ((count($status)==0) || ($status[0]['inst_version']==null))
                {
                # Look for a <pluginname>.yaml file.
                $plugin_yaml = get_plugin_yaml($file, false);
                foreach ($plugin_yaml as $key=>$value)
                    {
                    $plugins_avail[$file][$key] = $value ;
                    }
                $plugins_avail[$file]['config']=(ps_value("SELECT config AS value FROM plugins WHERE name=?",array("s",$file), '') != '');
                # If no yaml, or yaml file but no description present, 
                # attempt to read an 'about.txt' file
                if ($plugins_avail[$file]["desc"]=="")
                    {
                    $about=$plugins_dir.$file.'/about.txt';
                    if (file_exists($about)) 
                        {
                        $plugins_avail[$file]["desc"]=substr(file_get_contents($about),0,95) . "...";
                        }
                    }
                }        
            }
        }
    closedir($dirh);
    }

load_plugins(dirname(__FILE__) . '/../../plugins/');
if(!file_exists($storagedir . '/plugins/'))
    {
    mkdir($storagedir . '/plugins/');
    }
load_plugins($storagedir . '/plugins/');

ksort ($plugins_avail);


// Search functionality
$searching          = ((getval("find", "") != "" && getval("clear_search", "") == "") ? true : false);
$find               = getval("find", "");
if (!$searching) {$find="";}

/**
* Find plugin which contains the searched text in the name/ description
* 
* @param array   $plugin  Plugin data array (either the installed/ available version)
* @param string  $search  Searched text to find the plugin
* 
* @return boolean Returns TRUE if plugin data matches the search (mostly name and description), FALSE otherwise
*/
function findPluginFromSearch(array $plugin, $search)
    {
    // If we are not searching for anything in particular then 
    if(trim($search) == "")
        {
        return true;
        }

    if(isset($plugin["name"]) && stripos($plugin["name"], $search) !== false)
        {
        return true;
        }

    if(isset($plugin["title"]) && stripos($plugin["title"], $search) !== false)
        {
        return true;
        }

    if(isset($plugin["descrip"]) && stripos($plugin["descrip"], $search) !== false)
        {
        return true;
        }

    if(isset($plugin["desc"]) && stripos($plugin["desc"], $search) !== false)
        {
        return true;
        }

    return false;
    }

/*
 * Start Plugins Page Content
 */
include "../../include/header.php"; ?>
<script type="text/javascript">
(function($) { 
   $(function() {
      function actionPost(action, value){
      $('input#anc-input').attr({
      name: action,
      value: value});
      jQuery('form#anc-post').submit();
      }
      $('#BasicsBox').ready(function() {
         $('a.p-deactivate').click(function() {
         actionPost('deactivate', $(this).attr('href'));
         return false;
         });
         $('a.p-activate').click(function() {
         var pname = $(this).attr('href');
         actionPost('activate', $(this).attr('href'));
         return false;
         });
         $('a.p-purge').click(function() {
         actionPost('purge', $(this).attr('href'));
         return false;                        
         });
         $('a.p-delete').click(function() {
         actionPost('delete', $(this).attr('href'));
         return false;
         });
      });
   });
})(jQuery);
</script>
<div class="BasicsBox">
<h1><?php echo escape($lang["pluginmanager"]); ?></h1>
<?php
$links_trail = array(
    array(
        'title' => $lang["systemsetup"],
        'href'  => $baseurl_short . "pages/admin/admin_home.php",
        'menu' =>  true
    ),
    array(
        'title' => $lang["pluginmanager"]
    )
);
renderBreadcrumbs($links_trail);
?>

<form id="SearchSystemPages" method="post" onSubmit="return CentralSpacePost(this);">
    <?php generateFormToken("plugin_search"); ?>
    <input type="text" name="find" id="pluginsearch" value="<?php echo escape($find); ?>">
    <input type="submit" name="searching" value="<?php echo escape($lang["searchbutton"]); ?>">
<?php
if($searching)
    {
    ?>
    <input type="button" name="clear_search" value="<?php echo escape($lang["clearbutton"]); ?>" onClick="jQuery('#pluginsearch').val('');CentralSpacePost(document.getElementById('SearchSystemPages'));">
    <?php
    }
    ?>
</form>

<p><?php echo escape($lang["plugins-headertext"]); render_help_link('systemadmin/managing_plugins');?></p>
<h2><?php echo escape(!$searching ? $lang['plugins-installedheader'] : $lang['plugins-search-results-header']); ?></h2>
<?php hook("before_active_plugin_list");
if($searching)
    {
    $all_plugins = array_merge($inst_plugins, $plugins_avail);
    ?>
    <div class="Listview">
        <table class= "ListviewStyle">
            <thead>
                <tr class="ListviewTitleStyle">
                    <th><?php echo escape($lang['plugins-icon']); ?></th>
                    <th><?php echo escape($lang['name']); ?></th>
                    <th><?php echo escape($lang['description']); ?></th>
                    <th><?php echo escape($lang['plugins-author']); ?></th>
                    <th><?php echo escape($lang['plugins-version']); ?></th>
                    <?php hook('additional_plugin_columns'); ?>
                    <th><div class="ListTools"><?php echo escape($lang['tools']); ?></div></th>
                </tr>
            </thead>
            <tbody>
    <?php
    foreach($all_plugins as $plugin)
        {
        if(!findPluginFromSearch($plugin, $find))
            {
            continue;
            }

        $plugin_description = (isset($plugin["desc"]) ? $plugin["desc"] : "");

        // Plugin version key is different if plugin is installed (version|inst_version)
        $plugin_version = (isset($plugin["version"]) ? $plugin["version"] : "");
        $plugin_version = (isset($plugin["inst_version"]) ? $plugin["inst_version"] : $plugin_version);
        /* Make sure that the version number is displayed with at least one decimal place.
        If the version number is 0 the displayed version is $lang["notavailableshort"].
        (E.g. 0 -> (en:)N/A ; 1 -> 1.0 ; 0.92 -> 0.92)
        */
        if($plugin_version == 0)
           {
           $plugin_version = $lang["notavailableshort"];
           }
        elseif(sprintf("%.1f", $plugin_version) == $plugin_version)
            {
            $plugin_version = sprintf("%.1f", $plugin_version);
            }

        $activate_or_deactivate_label = (isset($plugin["inst_version"]) ? $lang["plugins-deactivate"] : $lang['plugins-activate']);
        $activate_or_deactivate_class = (isset($plugin["inst_version"]) ? "p-deactivate" : "p-activate");
        $activate_or_deactivate_href  = $plugin['name'];

        if(isset($plugin["legacy_inst"]))
            {
            $activate_or_deactivate_label = $lang["plugins-legacyinst"];
            $activate_or_deactivate_class = "nowrap";
            $activate_or_deactivate_href  = "";
            }

        switch ($activate_or_deactivate_label)
            {
            case $lang['plugins-activate']:
                $activate_or_deactivate_icon = "fas fa-check";
                break;
            case $lang["plugins-deactivate"]:
                $activate_or_deactivate_icon = "fa fa-times";
                break;
            default:
                $activate_or_deactivate_icon = "fas fa-check";
            }
        ?>
            <tr>
                <td><?php echo '<i class="plugin-icon ' . escape($plugin["icon"]) . '"></i>'; ?></td>
                <td><?php echo $plugin["title"] != "" ? escape($plugin["title"]) : escape($plugin["name"]); ?></td>
                <td><?php echo escape($plugin_description); ?></td>
                <td><?php echo escape($plugin["author"]); ?></td>
                <td><?php echo escape($plugin_version); ?></td>
                <?php hook('additional_plugin_column_data'); ?>
                <td>
                    <div class="ListTools">
                    <?php
                    if(!in_array($plugin["name"],$disabled_plugins) || isset($plugin["inst_version"]))
                        {?>
                        <a href="#<?php echo $activate_or_deactivate_href; ?>" class="<?php echo $activate_or_deactivate_class; ?>"><?php echo '<i class="' . $activate_or_deactivate_icon . '"></i>&nbsp;' . $activate_or_deactivate_label; ?></a>
                        <?php
                        }
                    elseif(in_array($plugin["name"],$disabled_plugins))
                        {
                        echo ($disabled_plugins_message != "") ? strip_tags_and_attributes(i18n_get_translated($disabled_plugins_message),array("a"),array("href","target")) : ("<a href='#' >" . '<i class="' . $activate_or_deactivate_icon . '"></i>' . "&nbsp;" . strip_tags_and_attributes($lang['plugins-disabled-plugin-message'],array("a"),array("href","target")) . "</a>");
                        }
                if ($plugin['info_url']!='')
                   {
                   echo '<a class="nowrap" href="'.$plugin['info_url'].'" target="_blank"><i class="fas fa-info"></i>&nbsp;' . escape($lang['plugins-moreinfo']) .'</a> ';
                   }
                if (!$plugin['disable_group_select'])
                    {
                    echo '<a onClick="return CentralSpaceLoad(this,true);" class="nowrap" href="'.$baseurl_short.'pages/team/team_plugins_groups.php?plugin=' . urlencode($plugin['name']) . '"><i class="fas fa-users"></i>&nbsp;' . escape($lang['groupaccess']) . ((isset($plugin['enabled_groups']) && trim($plugin['enabled_groups']) != '') ? ' (' . escape($lang["on"]) . ')': '') . '</a> ';
                    $plugin['enabled_groups'] = (isset($plugin['enabled_groups']) ? array($plugin['enabled_groups']) : array());
                    }
                if ($plugin['config_url']!='')        
                   {
                   // Correct path to support plugins that are located in filestore/plugins
                   if(substr($plugin['config_url'],0,8)=="/plugins")
                    {
                    $plugin_config_url = str_replace("/plugins/" . $plugin['name'], get_plugin_path($plugin['name'],true), $plugin['config_url']);
                    }
                   else
                    {$plugin_config_url = $baseurl_short . $plugin['config_url'];}
                   echo '<a onClick="return CentralSpaceLoad(this,true);" class="nowrap" href="' . $plugin_config_url . '"><i class="fas fa-cog"></i>&nbsp;' . escape($lang['options']).'</a> ';        
                   }
                if (isset($plugin['config']) && $plugin['config'])
                    {
                    echo '<a href="#' . escape($plugin['name']) . '" class="p-purge"><i class="fa fa-trash"></i>&nbsp;' . escape($lang['plugins-purge']) . '</a> ';
                    }
                ?>
                    </div><!-- End of ListTools -->
                </td>
            </tr>
        <?php
        }
        ?>
            </tbody>
        </table>
        <form id="anc-post" method="post" action="<?php echo $baseurl_short; ?>pages/team/team_plugins.php">
            <?php generateFormToken("anc_post"); ?>
            <input type="hidden" id="anc-input" name="" value="" />
        </form>
    </div><!-- end of ListView -->
    </div> <!-- end of BasicBox -->
    <?php
    include "../../include/footer.php";
    exit();
    }
    
if (count($inst_plugins)>0)
   { ?>
   <div class="Listview">
   <table class= "ListviewStyle">
      <thead>
         <tr class="ListviewTitleStyle">
         <th><?php echo escape($lang['plugins-icon']); ?></th>
         <th><?php echo escape($lang['name']); ?></th>
         <th><?php echo escape($lang['description']); ?></th>
         <th><?php echo escape($lang['plugins-author']); ?></th>
         <th><?php echo escape($lang['plugins-instversion']); ?></th>
         <?php hook('additional_plugin_columns'); ?>
         <th><div class="ListTools"><?php echo escape($lang['tools']); ?></div></th>
         </tr>
      </thead>
      <tbody>
         <?php 
         foreach ($inst_plugins as $p)
            {
            if($searching && !findPluginFromSearch($p, $find))
                {
                continue;
                }
            # Make sure that the version number is displayed with at least one decimal place.
            # If the version number is 0 the displayed version is $lang["notavailableshort"].
            # (E.g. 0 -> (en:)N/A ; 1 -> 1.0 ; 0.92 -> 0.92)
            if ($p['inst_version']==0)
               {
               $formatted_inst_version = $lang["notavailableshort"];
               }
            else
               {
               if (sprintf("%.1f",$p['inst_version'])==$p['inst_version'])
                  {
                  $formatted_inst_version = sprintf("%.1f",$p['inst_version']);
                  }
               else
                  {
                  $formatted_inst_version = $p['inst_version'];
                  }
               }
            echo '<tr>';
            echo '<td><i class="plugin-icon ' . $p['icon'] . '"></td>';
            echo $p['title'] != '' ? "<td>" . escape($p['title']). "</td>" : "<td>" .escape($p['name']) . "</td>";
            echo "<td>{$p['descrip']}</td><td>{$p['author']}</td><td>".$formatted_inst_version."</td>";
            hook('additional_plugin_column_data');
            echo '<td><div class="ListTools">';
            if (isset($p['legacy_inst']))
               {
               echo '<a class="nowrap" href="#"><i class="fas fa-check"></i>&nbsp;' . escape($lang['plugins-legacyinst']).'</a> '; # TODO: Update this link to point to a help page on the wiki
               }
            else
               {
               echo '<a href="#'.escape($p['name']).'" class="p-deactivate"><i class="fas fa-times"></i>&nbsp;' . escape($lang['plugins-deactivate']).'</a> ';
               }
            if ($p['info_url']!='')
               {
               echo '<a class="nowrap" href="'.$p['info_url'].'" target="_blank"><i class="fas fa-info"></i>&nbsp;' . escape($lang['plugins-moreinfo']).'</a> ';
               }
            if (!$p['disable_group_select'])
                {
                echo '<a onClick="return CentralSpaceLoad(this,true);" class="nowrap" href="'.$baseurl_short.'pages/team/team_plugins_groups.php?plugin=' . urlencode($p['name']) . '"><i class="fas fa-users"></i>&nbsp;' . escape($lang['groupaccess']) . ((trim((string) $p['enabled_groups']) != '') ? ' (' . escape($lang["on"]) . ')': '')  . '</a> ';
                $p['enabled_groups'] = array($p['enabled_groups']);
                }
            if ($p['config_url']!='')        
               {
               // Correct path to support plugins that are located in filestore/plugins
               if(substr($p['config_url'],0,8)=="/plugins")
                {
                $plugin_config_url = str_replace("/plugins/" . $p['name'], (string)get_plugin_path($p['name'],true), $p['config_url']);
                }
               else
                {$plugin_config_url = $baseurl_short . $p['config_url'];}
               echo '<a onClick="return CentralSpaceLoad(this,true);" class="nowrap" href="' . $plugin_config_url . '"><i class="fas fa-cog"></i>&nbsp;' .escape($lang['options']).'</a> ';        
               }
            echo '</div></td></tr>';
            } 
         ?>
      </tbody>
   </table>
   </div>
   <?php 
   } 
else 
   {
   echo "<p>".escape($lang['plugins-noneinstalled'])."</p>";
   } ?>

<h2 class="pageline"><?php echo escape($lang['plugins-availableheader']); ?></h2>
<?php

if (count($plugins_avail)>0) 
   { 
   $plugin_categories = array();
   foreach($plugins_avail as $p)
      {
        if($searching && !findPluginFromSearch($p, $find))
            {
            continue;
            }

      $plugin_row = '<tr><td>'.'<i class="plugin-icon '.$p['icon'].'">'.'</td>';
      if ($p['title'] != '')
        {
        $plugin_row .= '<td>'.$p['title'].'</td>';
        }
      else
        {
        $plugin_row .= '<td>'.$p['name'].'</td>';
        }
      $plugin_row .= '<td>'.$p['desc'].'</td><td>'.$p['author'].'</td>';
      if ($p['version'] == 0)
         {
         $plugin_row .= '<td>' . $lang["notavailableshort"] . '</td>';
         }
      else
         {
         $plugin_row .= '<td>'.$p['version'].'</td>';
         }
        $plugin_row .= '<td><div class="ListTools">';
      
        if(!in_array($p["name"],$disabled_plugins) || isset($p["inst_version"]))
            {
            $plugin_row .= '<a href="#'.$p['name'].'" class="p-activate"><i class="fa fa-check"></i>&nbsp;' . $lang['plugins-activate'].'</a> ';
            }
        elseif(in_array($p["name"],$disabled_plugins))
            {
            $plugin_row .=  ($disabled_plugins_message != "") ? strip_tags_and_attributes(i18n_get_translated($disabled_plugins_message),array("a"),array("href","target")) : ("<a href='#' >" . '<i class="fas fa-ban"></i>&nbsp;' . "&nbsp;" . $lang['plugins-disabled-plugin-message'] . "</a>");
            }
                        
     
      if ($p['info_url']!='')
         {
         $plugin_row .= '<a class="nowrap" href="'.$p['info_url'].'" target="_blank"><i class="fas fa-info"></i>&nbsp;'  . $lang['plugins-moreinfo'].'</a> ';
         }
      if ($p['config'])
         {
         $plugin_row .= '<a href="#'.$p['name'].'" class="p-purge"><i class="fa fa-trash"></i>&nbsp;' . $lang['plugins-purge'].'</a> ';
         }
      $plugin_row .= '</div></td></tr>';  
      if(isset($p["category"]))
         {
         $p["category"] = trim(strtolower($p["category"]));
         #Check for category lists
         if(preg_match("/.*,.*/",$p["category"]))
            {
            $p_cats = explode(",",$p["category"]);
            foreach($p_cats as $p_cat)
               {
                $p_cat = trim(strtolower($p_cat));
                if(!isset($plugin_categories[$p_cat]))
                    {
                    $plugin_categories[$p_cat] = array();
                    }
                array_push($plugin_categories[$p_cat], $plugin_row);
               }
            }
         else 
            {
            if(!isset($plugin_categories[$p["category"]]))
               {
               $plugin_categories[$p["category"]] = array();
               }

            array_push($plugin_categories[$p["category"]], $plugin_row);
            }
         }
      }

function display_plugin_category($plugins,$category,$header=true) 
    { 
    global $lang;
    ?>
    <div class="plugin-category-container">
    <?php 
    if($header)
        {
        $category_name = isset($lang["plugin_category_{$category}"]) ? $lang["plugin_category_{$category}"] : $category;
        ?>
        <h3 class="CollapsiblePluginListHead collapsed"><?php echo escape($category_name); ?></h3>
        <?php
        }
        ?>
        <div class="Listview CollapsiblePluginList">
            <table class="ListviewStyle">
                <thead>
                    <tr class="ListviewTitleStyle">
                    <th><?php echo escape($lang['plugins-icon']); ?></th>
                    <th><?php echo escape($lang['name']); ?></th>
                    <th><?php echo escape($lang['description']); ?></th>
                    <th><?php echo escape($lang['plugins-author']); ?></th>
                    <th><?php echo escape($lang['plugins-version']); ?></th>
                    <th><div class="ListTools"><?php echo escape($lang['tools']); ?></div></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($plugins as $plugin)
                    {
                    echo $plugin;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    }

   # Category Specific plugins
   ksort($plugin_categories);
   foreach($plugin_categories as $category => $plugins)
      {
      display_plugin_category($plugins,$category);
      }
    ?>
   <script>
      jQuery(".CollapsiblePluginListHead").click(function(){
         if(jQuery(this).hasClass("collapsed")) {
            jQuery(this).removeClass("collapsed");
            jQuery(this).addClass("expanded");
            jQuery(this).siblings(".CollapsiblePluginList").show();
         }
         else {
            jQuery(this).removeClass("expanded");
            jQuery(this).addClass("collapsed");
            jQuery(this).siblings(".CollapsiblePluginList").hide();
         }
      });
      jQuery(".CollapsiblePluginList").hide();
   </script>
   <?php
   } 
else 
   {
   echo ",p>".escape($lang['plugins-noneavailable'])."</p>";
   }

?>
</div>
<form id="anc-post" method="post" action="<?php echo $baseurl_short?>pages/team/team_plugins.php" >
    <?php generateFormToken("anc_post"); ?>
  <input type="hidden" id="anc-input" name="" value="" />
</form>
<?php
include "../../include/footer.php";

