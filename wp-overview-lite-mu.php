<?php
/*
Plugin Name: WP Overview (lite) MU
Plugin URI: http://wordpress.org/extend/plugins/wp-overview-lite-mu/
Description: <code>Show Dashboard Overview</code> and memory usage with less consumption | <a href="http://donate.sla.lcsn.net/" title="Donate author plugin">Donate</a>
Version: 2010.0617.2010-MU
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/sla/
 *
 * Development Release: Version 2010 Build 0618-BUGFIX Revision 0000-MU
 * First Public Release: Version 2010 Build 0617 Revision 2010-MU
 * Previous Stable Release: Version 2010 Build 0528-RC3 Revision 2010-MU
 *
 *  This program is free software, but licensed work is under Creative Commons License;
 *  you can use it only with the terms of [Attribution-Noncommercial-No Derivative Works 3.0 Unported](http://creativecommons.org/licenses/by-nc-nd/3.0/).
 *
 *  This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 *  without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *  See the terms of the [GNU General Public License](http://wordpress.org/about/gpl/) as published by the Free Software Foundation.
 *
 * Part of Copyright © 2009-2010 belongs to sLa [LavaTeam] NGjI ™ (slangji [at] gmail [dot] com)
 * and a portion to their respective owners ® Patent Pending - Licensing Applyed
 *
/**
 * @package WordPress WP Overview (lite) MU
 * @subpackage PlugIn
 * @author sLa
 * @version 2010.0617.2010-MU
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}?><?php
if(is_admin()){class wp_overview_lite_mu{var$memory=false;function wpo(){return$this->__construct();}function __construct(){add_action('init',array(&$this,'wpo_limit'));add_action('wp_dashboard_setup',array(&$this,'wpo_dashboard'));add_filter('admin_footer_text',array(&$this,'wpo_footer'));$this->memory=array();}function wpo_limit(){$this->memory['wpo-limit']=(int)ini_get('memory_limit');}function wpo_load(){$this->memory['wpo-load']=function_exists('memory_get_usage')?round(memory_get_usage()/1024/1024,2):0;}function wpo_consumption(){$this->memory['wpo-consumption']=round($this->memory['wpo-load']/$this->memory['wpo-limit']*100,0);}function wpo_output(){$this->wpo_load();$this->wpo_consumption();$this->memory['wpo-load']=empty($this->memory['wpo-load'])?__('0'):$this->memory['wpo-load'].__('M')?><?php
global$wpdb,$wp_version,$wpmu_version;$mysql_status=array();$mysql_vars=array();foreach($wpdb->get_results('SHOW GLOBAL STATUS')as$result){$mysql_status[$result->Variable_name]=$result->Value;}foreach($wpdb->get_results('SHOW GLOBAL VARIABLES')as$result){$mysql_vars[$result->Variable_name] = $result->Value;}$uptime_days=$mysql_status['Uptime']/86400;$uptime_hours=($uptime_days-(int)$uptime_days)*24;$uptime_minutes=($uptime_hours-(int)$uptime_hours)*60;$uptime_seconds=($uptime_minutes-(int)$uptime_minutes)*60;$uptime_string =(int)$uptime_days.' days, '.(int)$uptime_hours.' hours, '.(int)$uptime_minutes.' minutes, '.(int)$uptime_seconds.' seconds'?>
<ul><li><strong>Mem</strong>:
<strong>WP </strong><span><?php echo WP_MEMORY_LIMIT?></span>
<strong>Usage </strong><span><?php echo$this->memory['wpo-consumption'].'%'.' '.$this->memory['wpo-load']?></span>
<strong>Limit </strong><span><?php echo$this->memory['wpo-limit'].'M *'?></span></li>
<li><br /><strong>Server</strong>:
<strong>OS </strong><span><?php echo PHP_OS?></span>
<strong>Software </strong><span><?php echo$_SERVER['SERVER_SOFTWARE']?></span>
<strong>Version </strong><span><?php echo(PHP_INT_SIZE*8).__('Bit')?></span></li>
<li><strong>System</strong>:
<strong>PHP </strong><span><?php echo PHP_VERSION?></span>
<strong>SQL </strong><span><?php printf("%s\n",mysql_get_client_info())?></span>
<strong>Build </strong><span><?php echo$mysql_vars['version']?></span></li>
<li><strong>WordPress</strong>:
<strong>VER </strong><span><?php echo _e($wp_version)?></span>
<strong>Max Post </strong><span><?php echo _e(ini_get('post_max_size'))?></span>
<strong>Max Upload </strong><span><?php echo _e(ini_get('upload_max_filesize'))?></span></li>
<li><strong>Debug</strong>:
<strong>State </strong><span><?php echo(int)WP_DEBUG?></span>
<strong>Display </strong><span><?php echo(int)WP_DEBUG_DISPLAY?></span>
<strong>Log </strong><span><?php echo(int)WP_DEBUG_LOG?></span>
<strong>Script </strong><span><?php echo(int)SCRIPT_DEBUG?></span>
<strong>Deprecated </strong><span><?php echo(int)E_DEPRECATED?></span></li>
<li><br /><strong>SQL Uptime</strong>: <span><?php echo$uptime_string?></span></li>
<li><br /><li><strong>Default Theme</strong>: <span><?php echo WP_DEFAULT_THEME?></span><em> (since wp-3.0)</em></li>
<li><strong>Allow DB Repair</strong>: <span><?php echo(int)WP_ALLOW_REPAIR?></span><em> (since wp-2.9)</em></li>
<li><strong>Auto-Save</strong>: <span><?php echo(int)AUTOSAVE_ON?></span> <strong>Interval</strong> <?php echo(int)AUTOSAVE_INTERVAL.' seconds'?></span><em> (since wp-2.5)</em></li>
<li><strong>WP (Hyper - Super - W3 Total) Cache</strong>: <span><?php echo(int)WP_CACHE?></span><em> (since wp-2.6)</em></li>
<li><strong>Magpie RSS Cache</strong>: <span><?php echo(int)MAGPIE_CACHE_ON?></span> <strong>Age</strong> <span><?php echo(int)MAGPIE_CACHE_AGE.' seconds'?></span><em> (since wp-1.5)</em></li>
<li><strong>Post Revisions</strong>: <span><?php echo(int)WP_POST_REVISIONS?></span><em> (since wp-2.6)</em></li>
<li><strong>Trash</strong>: <span><?php echo(int)WP_TRASH?></span> <strong>Empity</strong> <span><?php echo(int)EMPTY_TRASH_DAYS.' days'?></span><em> (since wp-2.9)</em> <strong>Media</strong> <span><?php echo(int)MEDIA_TRASH?></span><em> (wp-3.0?)</em></li>
<li><br /><strong><u>NETWORK - MU~LTI-SITE</u></strong></li>
<li><strong>404</strong>: <span><?php echo _e(NOBLOGREDIRECT)?></span><br /></li>
<li><strong>Multi-site</strong>: <span><?php echo _e(WP_ALLOW_MULTISITE)?></span><em> (since wp-3.0)</em><br /></li>
<li><strong>Sunrise</strong>: <span><?php echo _e(SUNRISE)?></span></li></ul><br />
<em><strong>Legend</strong> 0=disabled 1=enabled * PHP or WP</em><?php
}function wpo_dashboard(){wp_add_dashboard_widget('wp_overview_lite_mu_dashboard_widget','Overview',array(&$this,'wpo_output'));}function wpo_footer($content){$this->wpo_load();$content.=' Load '.$this->memory['wpo-load'].'M'.' of '.$this->memory['wpo-limit'].'M';return$content;}}add_action('plugins_loaded',create_function('','$memory=new wp_overview_lite_mu();'));}?>