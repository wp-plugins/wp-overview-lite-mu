=== WP Overview (lite) MU Footer Memory Usage ===
Contributors: sLa
Donate link: http://lcsn.net/donate/
Tags: wp, overview, show, memory, usage, dashboard, less, load, consumption
Stable tag: 2010.0528.2010-MU
Requires at least: 2.7
Tested up to: 2.9.2
License: GPLv2
Show Overview and memory usage on Wordpress Dashboard, with less load consumption. Full compatible with WP 3.0 Network Multisite and 2.9.2 WPMU.
== Description ==
Show Overview and memory usage on Dashboard, with less load consumption. Work under GPLv2 License.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.7.0 to 2.9.2 but if you are still using an older one, put latest release on WPMU 2.9.2 instead.

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
= Cannot Redeclare Class: wp_overview_lite =
Fatal error on reload after upgrade with WPMU Sitewide Plugins Mode: cannot redeclare `class wp_overview_lite` in /home/your-installation-of-wp-/wp-content/plugins/wp-overview-lite/wp-overview-lite.php on line ... This issue is only for WPMU users: WP users are not affected! This error is not fatal for the plugin or Wordpress: all it work correctly also after upgrading, but is needed re-activate WP Overview (lite) manually. No problem exist for WPMU users with the plugin on directory /mu-plugins/.
= Network Activate Failed after Upgrading Plugin. =
After upgrading the plugin, it is not plus Network re-Activate but local. Cause of this issue is one WP conflict with W3 Total Cache. All plugins have this issue not only WP Overview (lite). The solution is deactivate W3 Total Cache before any plugin update and reactivate W3 Total Cache it after updating is terminated.
== Screenshots ==
[Screenshot](http://plugins.trac.wordpress.org/browser/wp-overview-lite-mu/branches/screenshots/screenshot.jpg) of the WP Overview (lite) MU on WordPress `3.0` Dashboard.

Show Overview and memory usage on Dashboard, with less load consumption. Work under GPLv2 License.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.7.0 to 2.9.2 but if you are still using an older one, put latest release on WPMU 2.9.2 instead.

`Nothing is written into your space disk or VPS`
`Nothing is written into wp_option database table!`
`Nothing is added into database during activation!`
`No need to delete anything from the wp_option when deactivate!`
`No need to delete anything from the database when deactivate!`
`Not need other actions except installing or uninstall it!`
`Work with Shared and VPS Hosting`
== Changelog ==
`History Release's:`
`Development Version 2010 Build 0529-RC Revision 0000-MU`
`Current Stable Version 2010 Build 0528-RC3 Revision 2010-MU`
*Is very suggested upgrade to the latest build as soon possible; previous release are on fact deprecated and no longer supported on this project! :)*
= 2010.0528.2010-MU =
* Redesigned new style: introduced version MU~LTI-SITE
 * WP Overview (lite) MU is coming out soon with WP 3.0
 * New Lightened Widget Layout (redesigned)
 * Freezing features: on waiting the final release.
 * Bump Version 2010 Build 0528-RC3 Revision 2010-MU
== Upgrade Notice ==
= 2010.0528.2010-MU =
Redesigned new style: introduced version MU~LTI-SITE. WP Overview (lite) MU is coming out soon with WP 3.0 ... Stay Tuned!
== Standard Release of WP Overview (lite) ==
The final release of this plugin is splitted on two separated versions to improved stability and security. Want you to standard version now? [Download](http://wordpress.org/extend/plugins/wp-overview-lite/) it from here!

Show Overview and memory usage on Dashboard, with less load consumption. Work under GPLv2 License.

Written for WPMU work with Shared and VPS Hosting. Support all WPMU version from 2.7.0 to 2.9.2 but if you are still using an older one, put latest release on WPMU 2.9.2 instead.

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
Thanks to all keep the [Credit Link](http://wordpress.org/extend/plugins/profile/slangji) :D
== Updates ==
[Update Link](http://wordpress.org/extend/plugins/wp-overview-lite-mu/)
== Thanks ==
Part of copyright belongs to sLa and a portion to their respective owners.