=== WP Overview (lite) MU Dashboard Memory Bump Usage ===
Contributors: sLa
Donate link: http://donate.sla.lcsn.net/
Tags: wp, overview, show, memory, usage, dashboard, less, load, consumption
Stable tag: 2010.0617.2010-MU
Requires at least: 2.6
Tested up to: 3.0
Show Overview and memory usage on Wordpress Dashboard, with less load consumption. Full compatible with WP 3.0 Network Multisite and 2.9.2 WPMU.
== Description ==
Show Overview and memory usage on Dashboard, with less load consumption.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version
from 2.6.x to 3.0.x but if you are still using an older one, put latest
release on WPMU 2.7.1 instead.

Try [Memory Bump](http://wordpress.org/extend/plugins/memory-bump/) for [Ticket #13847](http://core.trac.wordpress.org/ticket/13847) troubleshooting.

`Nothing is written into your space disk`
`Nothing is written into wp_option database table!`
`Nothing is added into database during activation!`
`No need to delete anything from the database when deactivate!`
`Not need other actions except installing or uninstall it!`
== Installation ==
Download WP Overview (lite) Dashboard Memory Usage
= For users of WP 3.0 MU~LTI-SITE =
1. Upload it into your plugins directory.
2. It will create a directory /wp-content/plugins`/wp-overview-lite-mu/`
3. Go to plugins page and Network Activate WP Overview (lite) MU
= For users of old WPMU =
1. If you are using WordPress MU `wp-overview-lite-mu.php` must be put directly into the directory /wp-content`/mu-plugins/`
2. Activate of WP Overview (lite) should be `AutomaTTic` ;)
= How to uninstall WP Overview (lite) =
1. Disable WP Overview (lite) MU from Menu Plugins of Control Panel.
2. Delete WP Overview (lite) MU from Menu Plugins of Control Panel.
= Troubleshooting =
If all else fails and your site is broken remove directly via ftp on your host space /home/your-wp-install-dir/wp-content/plugins/wp-overview-lite-mu/ or /home/your-wp-install-dir/wp-content/mu-plugins/wp-overview-lite-mu.php
== Frequently Asked Questions ==
* License

 * This program is free software, but licensed work is under Creative Commons License;
   you can use it only with the terms of [Attribution-Noncommercial-No Derivative Works 3.0 Unported](http://creativecommons.org/licenses/by-nc-nd/3.0/).

 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
   without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
   See the terms of the [GNU General Public License](http://wordpress.org/about/gpl/) as published by the Free Software Foundation.
= WP3 exceed 256 memory limit? =
RESOLVED [WP3 exceed 256 memory limit](http://wordpress.org/support/topic/wp3-exeed-256-memory-limit?replies=5)
WordPress 3.0 Multi-site: 256 MB Memory Requirements?
WordPress Multi-site unofficially needs 256 Megabyte of Memory, but only for admin backend panel, not for the user frontend!
This is a very high value, and is not announced in the minimum WordPress requirements since the 2.7 version. See also: [Technical WordPress Installation Checklist](http://codex.wordpress.org/User:Hakre/Technical_Installation)
Because raising the memory limit over your servers allowance can crash your blog on some servers, or shared hosting, (Fatal Error: Allowed Memory Size Exhausted) it’s adviseable, previous to upgrade, increase your WordPress Memory Limit with third part plugins like [Memory Bump](http://wordpress.org/extend/plugins/memory-bump/), and check how much PHP or WP Memory your server allows with WP Overview or similar.
If it’s below 256 Megabytes this could render your blog useless after upgrade, and it means you need to increase your WordPress Memory Limit. Related Ticket: [Ticket #13847](http://core.trac.wordpress.org/ticket/13847)
For this bug #13847 [WP Overview (lite)](http://wordpress.org/extend/plugins/wp-overview-lite/) and [WP Overview (lite) MU](http://wordpress.org/extend/plugins/wp-overview-lite-mu/) need another upgrade to work fine on WP 3.0 environment.
The fix is already online on my reposytory [lite](http://plugins.svn.wordpress.org/wp-overview-lite/trunk/) and [mu](http://plugins.svn.wordpress.org/wp-overview-lite-mu/trunk/) and it official released after [WP 3.0.1](http://core.trac.wordpress.org/milestone/3.0.1) launch.
I tested my plugin, on various scenario, and 48MB is a good chance for somes WP and MU~LTI-SITE installations to work fine.
= Cannot Redeclare Class: wp_overview_lite =
Fatal error on reload after upgrade with WPMU Sitewide Plugins Mode: cannot redeclare `class wp_overview_lite` in /home/your-installation-of-wp-/wp-content/plugins/wp-overview-lite/wp-overview-lite.php on line ... This issue is only for WPMU users: WP users are not affected! This error is not fatal for the plugin or Wordpress: all it work correctly also after upgrading, but is needed re-activate WP Overview (lite) manually. No problem exist for WPMU users with the plugin on directory /mu-plugins/.
= Network Activate Failed after Upgrading Plugin. =
After upgrading the plugin, it is not plus Network re-Activate but local. Cause of this issue is one WP conflict with W3 Total Cache. All plugins have this issue not only WP Overview (lite). The solution is deactivate W3 Total Cache before any plugin update and reactivate W3 Total Cache it after updating is terminated.
== Screenshots ==
[Screenshot](http://plugins.trac.wordpress.org/browser/wp-overview-lite-mu/branches/screenshots/screenshot.jpg) of the WP Overview (lite) MU on WordPress `3.0` Dashboard.

Show Overview and memory usage on Dashboard, with less load consumption.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.6.x to 3.0.x but if you are still using an older one, put latest release on WPMU 2.7.1 instead.

`Nothing is written into your space disk or VPS`
`Nothing is written into wp_option database table!`
`Nothing is added into database during activation!`
`No need to delete anything from the wp_option when deactivate!`
`No need to delete anything from the database when deactivate!`
`Not need other actions except installing or uninstall it!`
`Work with Shared and VPS Hosting`
== Changelog ==
`History Release's:`
`Development Version 2010 Build 06728-BUGFIX Revision 1811-MU`
`First Stable Version 2010 Build 0617 Revision 2010-MU`
`Prevoius Stable Version 2010 Build 0528-RC3 Revision 2010-MU`
*Is very suggested upgrade to the latest build as soon possible; previous release are on fact deprecated and no longer supported on this project! :)*
= 2010.0617.2010-MU =
* First Public Stable Release (full WP 3.0 compatible)
 * WordPress 3.0 is out and WP Overview (lite) is now!
 * Show Real Time Memory Load on WordPress Installation.
 * Show WP, PHP and SQL info on Dashboard.
 * Show most common WP functions configuration.
 * Show most common NETWORK MU~LTI-SITE config.
 * One Simple Dashboard Widgets on right to Right Now
 * Plugin Memory Consumption (less of 1KB or no more)
 * Only 7KB of unique php plugin file.
 * No action or user config is needed.
 * Special WPMU and Network MU~LTI-SITE Release.
 * Full Strict Security Rules Applied.
 * 8 Mount's of Debug and Development ...
 * Nothing is written into your space disk or VPS.
 * Nothing is written into wp_option database table!
 * Nothing is added into database during activation!
 * No need delete anything on wp_option when deactivate!
 * No need delete anything on database when deactivate!
 * Not need other actions except install or uninstall!
 * Work with Shared and VPS Hosting.
 * Bump Version 2010 Build 0617 Revision 2010-MU
= 2010.0528.2010-MU =
* Redesigned new style: introduced version MU~LTI-SITE
 * WP Overview (lite) MU is coming out soon with WP 3.0
 * New Lightened Widget Layout (redesigned)
 * Freezing features: on waiting the final release.
 * Bump Version 2010 Build 0528-RC3 Revision 2010-MU
== Upgrade Notice ==
= 2010.0617.2010-MU =
First Public Stable Release of WP Overview (lite) MU is now! (full WP 3.0 and 2.9.2 WPMU compatible) 
= 2010.0528.2010-MU =
Redesigned new style: introduced version MU~LTI-SITE. WP Overview (lite) MU is coming out soon with WP 3.0 ... Stay Tuned!
== Standard Release of WP Overview (lite) ==
The final release of this plugin is splitted on two separated versions to improved stability and security. Want you to standard version now? [Download](http://wordpress.org/extend/plugins/wp-overview-lite/) it from here!

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.6.x to 3.0.x but if you are still using an older one, put latest release on WPMU 2.7.1 instead.

`No need to delete anything from the database.`
`Nothing is written into wp_option database table when installing!`
`No need to delete anything from the database when deactivate!`
`Not need other actions except installing or uninstall it!`
`Work with Shared and VPS Hosting`
== Todo List ==
Nothing for now ...
== Translations ==
[Translation Link](http://plugins.trac.wordpress.org/browser/wp-overview-lite-mu/branches/languages/wp-overview-lite-mu.pot)
== Links ==
Thanks to all keep the [Credit Link](http://sla.lcsn.net/) :D
== Updates ==
[Update Link](http://svn.sla.lcsn.net/wp-overview/)
== Thanks ==
Part of copyright belongs to sLa and a portion to their respective owners.