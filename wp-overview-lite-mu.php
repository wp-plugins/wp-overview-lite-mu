<?php
/*
Plugin Name: WP Overview (lite) MU
Plugin URI: http://wordpress.org/extend/plugins/wp-overview-lite-mu/
Description: <code>Show Dashboard Overview</code> and memory usage with less consumption. Work under GPLv2 License. | <a href="http://lcsn.net/donate/" title="Free Donation">Donate</a>
Version: 2010.0528.2010-MU
Author: sLa
Author URI: http://wordpress.org/extend/plugins/profile/sla/
License: GPLv2
 *
 * Development Release: Version 2010 Build 0529-RC Revision 0000-MU
 *
 * WP Overview (lite) MU - WordPress PlugIn
 *
 *  This program is free software; you can redistribute it and/or
 *  modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
 *  as published by the Free Software Foundation; either [version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 *  of the License, or (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * Copyright © 2010 [sLaNGjI](http://wordpress.org/extend/plugins/profile/sla/) a.k.a. sLa (slangji [at] gmail [dot] com)
 */
/**
 * @package WP Overview (lite) MU
 * @subpackage WordPress MU PlugIn
 * @since 2.7.0
 * @version 2010.0528.2010-MU
 * @author sLa
 * @license GPLv2
 *
 * Show Dashboard Overview and memory usage with less consumption. Work under GPLv2 License.
 */
if(!function_exists('add_action')){header('Status 403 Forbidden');header('HTTP/1.0 403 Forbidden');header('HTTP/1.1 403 Forbidden');exit();}?><?php
if(is_admin()){
class wp_overview_lite{
var $memory=false;
function wp_overview_lite(){return $this->__construct();}
function __construct(){add_action('wp_dashboard_setup',array(&$this,'add_dashboard'));$this->memory=array();}
function check_memory_usage(){$this->memory['wp-load']=function_exists('memory_get_usage')?round(memory_get_usage()/1024/1024,2):0;$this->memory['wp-limit']=(int)ini_get('memory_limit');$this->memory['percent-consumption']=round($this->memory['wp-load']/$this->memory['wp-limit']*100,0);}
function dashboard_output(){$this->check_memory_usage();$this->memory['wp-load']=empty($this->memory['wp-load'])?__('0'):$this->memory['wp-load'].__('M');?><?php
global$wpdb,$wp_version,$wpmu_version;$mysql_status=array();$mysql_vars=array();
foreach($wpdb->get_results('SHOW GLOBAL STATUS')as$result){$mysql_status[$result->Variable_name]=$result->Value;}
foreach($wpdb->get_results('SHOW GLOBAL VARIABLES')as$result){$mysql_vars[$result->Variable_name] = $result->Value;}
$uptime_days=$mysql_status['Uptime']/86400;$uptime_hours=($uptime_days-(int)$uptime_days)*24;$uptime_minutes=($uptime_hours-(int)$uptime_hours)*60;$uptime_seconds=($uptime_minutes-(int)$uptime_minutes)*60;$uptime_string =(int)$uptime_days.' days, '.(int)$uptime_hours.' hours, '.(int)$uptime_minutes.' minutes, '.(int)$uptime_seconds.' seconds';?>
<ul><li><strong>Mem</strong>:
<strong>WP </strong><span><?php echo WP_MEMORY_LIMIT;?></span>
<strong>Usage </strong><span><?php echo $this->memory['percent-consumption'].'%'.' '.$this->memory['wp-load'];?></span>
<strong>Limit </strong><span><?php echo $this->memory['wp-limit'].'M';?></span></li>
<li><br /><strong>Server</strong>:
<strong>OS </strong><span><?php echo PHP_OS;?></span>
<strong>Software </strong><span><?php echo $_SERVER['SERVER_SOFTWARE'];?></span>
<strong>Version </strong><span><?php echo (PHP_INT_SIZE*8).__('Bit');?></span></li>
<li><strong>System</strong>:
<strong>PHP </strong><span><?php echo PHP_VERSION;?></span>
<strong>SQL </strong><span><?php printf("%s\n",mysql_get_client_info());?></span>
<strong>Build </strong><span><?php echo $mysql_vars['version'];?></span></li>
<li><strong>WordPress</strong>:
<strong>Version </strong><span><?php echo _e($wp_version);?></span>
<strong>Max Post </strong><span><?php echo _e(ini_get('post_max_size'));?></span>
<strong>Max Upload </strong><span><?php echo _e(ini_get('upload_max_filesize'));?></span></li>
<li><strong>Debug</strong>:
<strong>State </strong><span><?php echo (int)WP_DEBUG;?></span>
<strong>Display </strong><span><?php echo (int)WP_DEBUG_DISPLAY;?></span>
<strong>Log </strong><span><?php echo (int)WP_DEBUG_LOG;?></span>
<strong>Script </strong><span><?php echo (int)SCRIPT_DEBUG;?></span>
<strong>Deprecated </strong><span><?php echo (int)E_DEPRECATED;?></span></li>
<li><br /><strong>Uptime</strong>: <span><?php echo $uptime_string;?></span></li>
<li><br /><strong>Allow DB Repair</strong>: <span><?php echo (int)WP_ALLOW_REPAIR;?></span><em> (since wp-2.9)</em></li>
<li><strong>Auto-Save</strong>: <span><?php echo (int)AUTOSAVE_ON;?></span><em> (since wp-2.5)</em></li>
<li><strong>Auto-Save Interval</strong>: <span><?php echo (int)AUTOSAVE_INTERVAL.' seconds';?></span><em> (since wp-2.5)</em></li>
<li><strong>WP (Hyper - Super - W3 Total) Cache</strong>: <span><?php echo (int)WP_CACHE;?></span><em> (since wp-2.6)</em></li>
<li><strong>Magpie RSS Cache</strong>: <span><?php echo (int)MAGPIE_CACHE_ON;?></span><em> (since wp-1.5)</em></li>
<li><strong>Magpie RSS Cache Age</strong>: <span><?php echo (int)MAGPIE_CACHE_AGE.' seconds';?></span><em> (since wp-1.5)</em></li>
<li><strong>Post Revisions</strong>: <span><?php echo (int)WP_POST_REVISIONS;?></span><em> (since wp-2.6)</em></li>
<li><strong>Trash</strong>: <span><?php echo (int)WP_TRASH;?></span><em> (since wp-2.9)</em></li>
<li><strong>Media Trash</strong>: <span><?php echo (int)MEDIA_TRASH;?></span><em> (since wp-3.0)</em></li>
<li><strong>Empity Trash</strong>: <span><?php echo(int)EMPTY_TRASH_DAYS.' days';?></span><em> (since wp-2.9)</em></li>
<li><br /><strong><u>NETWORK - MU</u></strong></li>
<li><strong>404</strong>: <span><?php echo _e(NOBLOGREDIRECT);?></span><br /></li>
<li><strong>Multisite</strong>: <span><?php echo _e(WP_ALLOW_MULTISITE);?></span><em> (since wp-3.0)</em><br /></li>
<li><strong>Sunrise</strong>: <span><?php echo _e(SUNRISE);?></span></li></ul>
<br /><em><strong>Legend</strong> 0=disabled 1=enabled</em><?php
}function add_dashboard(){wp_add_dashboard_widget('wp_overview_lite_dashboard','Overview MU~lti-site',array(&$this,'dashboard_output'));}}add_action('plugins_loaded',create_function('','$memory=new wp_overview_lite();'));}?>