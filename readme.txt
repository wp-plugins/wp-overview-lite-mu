=== WP Overview (lite) MU Footer Memory Usage ===
Contributors: slangjis
Donate link: http://slangji.wordpress.com/donate/
Tags: memory,limit,wp,overview,lite,mu,show,usage,dashboard,load,footer, slangjis
Stable tag: 2010.0821.1539
Requires at least: 2.7
Tested up to: 2.9.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Show Overview and memory usage on Wordpress Dashboard, with less load consumption. Full compatible with WordPress 2.9.2 MU.
== Description ==
Author Website: [slangji.wordpress.com](http://slangji.wordpress.com/) - Author Repositories: [github.com/slangji](https://github.com/slangji)

[Find More on sLa Developer Page @ SoftPedia.com](http://webscripts.softpedia.com/author/sLa-1869786722.html)

Show Overview and memory usage on Dashboard, with less load consumption. Work under GPLv2 License.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.7.0 to 2.9.2 but if you are still using an older one, put latest release on WPMU 2.9.2 instead.

* [Plugins](http://slangji.wordpress.com/plugins/):
 * [WP Overview (lite)](http://wordpress.org/plugins/wp-overview-lite/)
 * [WP Overview (lite) MU](http://wordpress.org/plugins/wp-overview-lite-mu/)
 * [WP Overview (lite) MS](http://wordpress.org/plugins/wp-overview-lite-ms/)
 * [WP Missed Schedule](http://wordpress.org/plugins/wp-missed-schedule/)
 * [WP Admin Bar Removal](http://wordpress.org/plugins/wp-admin-bar-removal/) Linked and reviewed at [softpedia.com](http://webscripts.softpedia.com/script/Modules/WordPress-Plugins/Admin-Bar-Removal-completely-disable-73547.html)
 * [WP Admin Bar Node Removal](http://wordpress.org/plugins/wp-admin-bar-node-removal/)
 * [WP Toolbar Removal](http://wordpress.org/plugins/wp-toolbar-removal/) Linked and reviewed at [softpedia.com](http://webscripts.softpedia.com/script/Modules/WordPress-Plugins/ToolBar-Removal-completely-disable-73548.html)
 * [WP Toolbar Node Removal](http://wordpress.org/plugins/wp-toolbar-node-removal/)
 * [Noindex (login) WordPress Deindexing](http://wordpress.org/plugins/wp-login-deindexing/)
 * [Noindex (total) WordPress Deindexing](http://wordpress.org/plugins/wp-total-deindexing/)
 * [IE Enhancer and Modernizer](http://wordpress.org/plugins/wp-ie-enhancer-and-modernizer/) Linked and reviewed at [softpedia.com](http://webscripts.softpedia.com/script/Modules/WordPress-Plugins/IE-Enhancer-and-Modernizer-73546.html)
 * [Memory Load Consumption db size Usage Indicator](http://wordpress.org/plugins/wp-memory-db-indicator/)
 *
 * [Memory Bump](http://wordpress.org/plugins/memory-bump/) for [Ticket #13847](http://core.trac.wordpress.org/ticket/13847) troubleshooting.
 * [Health Check](http://wordpress.org/plugins/health-check/) verify if the PHP and MySQL versions of your server are not too low to meet the requirements that we have announced for WordPress 3.2.

Work under [GPLv2](http://www.gnu.org/licenses/gpl-2.0.html) License.



`Nothing is written into your space disk or VPS`
`Nothing is written into your database!`
`Nothing is written into wp_option database table!`
`Nothing is added into database during activation!`
`Nothing is added into wp_option database table during activation!`
`No need to delete anything from your space disk or VPS when deactivate`
`No need to delete anything from the database when deactivate!`
`No need to delete anything from the wp_option when deactivate!`
`No need to delete anything from your space disk or VPS when removed!`
`No need to delete anything from the database when removed!`
`No need to delete anything from the wp_option when removed!`
`Not need other actions except installing or uninstall it!`
`Work with Shared and VPS Hosting`
`Zero Bug Certified Plugin`
== Installation ==
Download WP Overview (lite) MU Dashboard Memory Bump Usage
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
== Licensing ==
* License
 *  This program is free software; you can redistribute it and/or
    modify it under the terms of the [GNU General Public License](http://wordpress.org/about/gpl/)
    as published by the Free Software Foundation; either [version 2](http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
    of the License, or (at your option) any later version.
 *  This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
 *  You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
* Disclaimer
 * The license under which the WordPress software is released is the GPLv2 (or later) from the Free Software Foundation. A copy of the license is included with every copy of WordPress.
 * Part of this license outlines requirements for derivative works, such as plugins or themes. Derivatives of WordPress code inherit the GPL license.
 * There is some legal grey area regarding what is considered a derivative work, but we feel strongly that plugins and themes are derivative work and thus inherit the GPL license.
= WP3 exceed 256 memory limit? =
RESOLVED [WP3 exceed 256 memory limit](http://wordpress.org/support/topic/wp3-exeed-256-memory-limit?replies=5)
WordPress 3.0 Multi-site: 256 MB Memory Requirements?
WordPress Multi-site unofficially needs 256 Megabyte of Memory, but only for admin backend panel, not for the user frontend!
This is a very high value, and is not announced in the minimum WordPress requirements since the 2.7 version. See also: [Technical WordPress Installation Checklist](http://codex.wordpress.org/User:Hakre/Technical_Installation)
Because raising the memory limit over your servers allowance can crash your blog on some servers, or shared hosting, (Fatal Error: Allowed Memory Size Exhausted) it’s adviseable, previous to upgrade, increase your WordPress Memory Limit with third part plugins like [Memory Bump](http://wordpress.org/plugins/memory-bump/), and check how much PHP or WP Memory your server allows with WP Overview or similar.
If it’s below 256 Megabytes this could render your blog useless after upgrade, and it means you need to increase your WordPress Memory Limit. Related Ticket: [Ticket #13847](http://core.trac.wordpress.org/ticket/13847)
For this bug #13847 [WP Overview (lite)](http://wordpress.org/plugins/wp-overview-lite/) and [WP Overview (lite) MU](http://wordpress.org/plugins/wp-overview-lite-mu/) need another upgrade to work fine on WP 3.0 environment.
The fix is already online on my reposytory [lite](http://plugins.svn.wordpress.org/wp-overview-lite/trunk/) and [mu](http://plugins.svn.wordpress.org/wp-overview-lite-mu/trunk/) and it official released after [WP 3.0.1](http://core.trac.wordpress.org/milestone/3.0.1) launch.
I tested my plugin, on various scenario, and 48MB is a good chance for somes WP and MU~LTI-SITE installations to work fine.
= Cannot Redeclare Class: wp_overview_lite =
Fatal error on reload after upgrade with WPMU Sitewide Plugins Mode: cannot redeclare `class wp_overview_lite` in /home/your-installation-of-wp-/wp-content/plugins/wp-overview-lite/wp-overview-lite.php on line ... This issue is only for WPMU users: WP users are not affected! This error is not fatal for the plugin or Wordpress: all it work correctly also after upgrading, but is needed re-activate WP Overview (lite) manually. No problem exist for WPMU users with the plugin on directory /mu-plugins/.
= Network Activate Failed after Upgrading Plugin. =
After upgrading the plugin, it is not plus Network re-Activate but local. Cause of this issue is one WP conflict with W3 Total Cache. All plugins have this issue not only WP Overview (lite). The solution is deactivate W3 Total Cache before any plugin update and reactivate W3 Total Cache it after updating is terminated.
== Screenshots ==
[Screenshot](http://plugins.trac.wordpress.org/browser/wp-overview-lite-mu/branches/screenshots/screenshot.jpg) of the WP Overview (lite) MU on WordPress `2.9.2` Dashboard.

Show Overview and memory usage on Dashboard, with less load consumption. Work under GPLv2 License.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.7.0 to 2.9.2 but if you are still using an older one, put latest release on WPMU 2.9.2 instead.

`Nothing is written into your space disk or VPS`
`Nothing is written into your database!`
`Nothing is written into wp_option database table!`
`Nothing is added into database during activation!`
`Nothing is added into wp_option database table during activation!`
`No need to delete anything from your space disk or VPS when deactivate`
`No need to delete anything from the database when deactivate!`
`No need to delete anything from the wp_option when deactivate!`
`No need to delete anything from your space disk or VPS when removed!`
`No need to delete anything from the database when removed!`
`No need to delete anything from the wp_option when removed!`
`Not need other actions except installing or uninstall it!`
`Work with Shared and VPS Hosting`
`Zero Bug Certified Plugin`
== Changelog ==
`History Release's:`
`Development Release: Version 2010 Build 1010-BUGFIX Revision 1809-MU`
`Current Public Release: Version 2010 Build 0729 Revision 2244-MU`
`First Public Release: Version 2010 Build 0617 Revision 2010-MU`
`First Stable Release: Version 2010 Build 0528-RC3 Revision 2010-MU`
*All previous release are on fact deprecated and no longer supported on this project: is very suggested upgrade to the latest build as soon possible! :)*
= 2010.0821.1539-MU =
* Silent Update [BUGFIX] Reduced Bloat and Code Cleanup.
 * Please update as soon possible!
 * Bump Version 2010 Build 0821 Revision 1539-MU
= 2010.0729.2244-MU =
* Silent Update [CRITICAL] Fixed PHP and WP Memory Limit.
 * Please update as soon possible!
 * RESOLVED [WP3 exceed 256 memory limit](http://wordpress.org/support/topic/wp3-exeed-256-memory-limit?replies=5)
 * FIXED [Ticket #13847](http://core.trac.wordpress.org/ticket/13847)
 * Make it full compatible with WP 3.0.1
 * Preemptive support for WordPress 3.1-alpha
 * `Add memory load on admin footer panel`
 * Fixed some Deprecated Functions
 * Updated Security Improvements
 * Reduced Bloat
 * Code Cleanup
 * Bump Version 2010 Build 0729 Revision 2244-MU
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
= 2010.0821.1539-MU =
Silent Update [BUGFIX] Reduced Bloat and Code Cleanup: please update! Add memory load on admin footer panel.
= 2010.0729.2244-MU =
Silent Update [CRITICAL] Fixed PHP and WP Memory Limit: please update! Add memory load on admin footer panel.
= 2010.0617.2010-MU =
First Public Stable Release of WP Overview (lite) MU is now! (full WP 3.0 and 2.9.2 WPMU compatible) 
= 2010.0528.2010-MU =
Redesigned new style: introduced version MU~LTI-SITE. WP Overview (lite) MU is coming out soon with WP 3.0 ... Stay Tuned!
== Standard Release of WP Overview (lite) ==
The final release of this plugin is splitted on two separated versions to improved stability and security. Want you to standard version now? [Download](http://wordpress.org/plugins/wp-overview-lite/) it from here!

Show Overview and memory usage on Dashboard, with less load consumption. Work under GPLv2 License.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.7.0 to 2.9.2 but if you are still using an older one, put latest release on WPMU 2.9.2 instead.

`Nothing is written into your space disk or VPS`
`Nothing is written into your database!`
`Nothing is written into wp_option database table!`
`Nothing is added into database during activation!`
`Nothing is added into wp_option database table during activation!`
`No need to delete anything from your space disk or VPS when deactivate`
`No need to delete anything from the database when deactivate!`
`No need to delete anything from the wp_option when deactivate!`
`No need to delete anything from your space disk or VPS when removed!`
`No need to delete anything from the database when removed!`
`No need to delete anything from the wp_option when removed!`
`Not need other actions except installing or uninstall it!`
`Work with Shared and VPS Hosting`
`Zero Bug Certified Plugin`
== Todo List ==
Menus and Custom Menu Widget Identification ...

== Disclaimer ==

`sLa NGjI's Team do not provide support on wordpress.org forum!`

Dear user of plugins or themes:

`sLa NGjI’s Team has started adventure on
wordpress.org forum since 2007: 7 years ago!`

Everything was very different from today: the plugins and themes developed by us were much less, and also the users who used it.

The traffic generated by users of the wordpress.org forum has increased exponentially, and in the same way also the requests for assistance have increased exponentially.

In the near future this increase will be even more pronounced, as a result of the great success of WordPress.

By contrast, both the posts and threads definable "requests" and those definable "trash" are very difficult to finding and follow: the time necessary for this purpose, now, longer a nightmare that one added value service, real.

With the passage of time, the problems of this type of assistance have been deemed ineffective by more and more developers excellent, while the tools available for this workload considered insufficient or inadequate to many of them.

Many of these developers have already abandoned this platform of assistance by providing other methods of customer care.

Our team has tried to respond to all for seven long years, and maintained the support forums for plugins and themes developed always clean, neat, and clear.

Failing to provide a service that gives us satisfaction, through the instruments of wordpress.org forum, as of today August 15, 2014 we abandon the active support with this type of structure, started since August 7, 2007 to try to give one type of service more personalized, and targeted, to requests of users.

1. For bug's please refer to [sLa NGjI's GitHub ](//github.com/slangji/) bug's report support
1. For tickets please refer to [sLa NGjI's Contact](//slangji.wordpress.com/contact/) tickets form support

* Please note that:
 * We are not interested in reviews on our plugins and themes.
 * Do not write anything like that!
 * We are not interested in stars on our plugins and themes.
 * Do not make any in that sections!

Generally we're not interested to be informed if you like our plugins and themes, or if you use them successfully through the instruments of the wordpress.org forums!

Remember to keep proper behavior on the wordpress.org forum, under the rules, respect all their moderators, and its users: this team do not supporting anymore wordpress.org forum, and the possibility that some of us then reply or write on wordpress.org forum, will be very low!

... to be continued ? ...
