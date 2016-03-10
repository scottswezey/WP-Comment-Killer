=== WP Comment Killer ===
Contributors: ScottSwezey
Tags: Comments, Spam
Requires at least: 3.5
Tested up to: 4.1
Stable tag: trunk
License: MIT
License URI: http://choosealicense.com/licenses/mit/

Install to stop all comments and pingbacks. Uninstall to revert to normal.

== Description ==
Designed for use when a site is under attack by comment spam bots. Installing this plugin automatically disables all comments and pingbacks. There are no settings to configure.

This plugin doesn't modify your database in any way. Remove it to revert your site to normal comment functionality.

== Installation ==
1. Place wp-comment-killer.php into wp-content/mu-plugins (you may need to create this folder first)

== Uninstallation ==
1. Delete wp-comment-killer.php
2. Previous versions may have been installed as a normal plugin. In this case, it should be deactivated and removed via wp-admin.

== Frequently Asked Questions ==
= Why? =
This is only intended for when a site is under attack by comment spam. No more comments will be accepted with the installed and active.

= What if I never want to get comments? =
You should configure your site correctly. Everything this plugin does can be achieved by configuring WordPress. This can help until you do that.

= Help? =
See https://github.com/scottswezey/WP-Comment-Killer -- Open an issue.

= WP Network installs? =
This plugin will affect all network sites. As the plugin is only intended as a temporary countermeasure, this is acceptable behavior. Please properly configure the blog(s) getting attacked with comment spam to not accept comments, then remove this plugin.

= I didn't install this =
Your web host may have. Check with them, and contact them for support. That said, this is very easy to disable and remove if you've fixed your spam bot issue.

== Changelog ==

= 2.0.3 =
* Bumped copyright license year.
* Planning to check compatibility with current WP versions soon.

= 2.0.2 =
* Update to reflect compatibility with WordPress 4.1.
* Update copyright date.
* No other changes.

= 2.0.1 =
* Removed manual-force-activation.php

= 2.0.0 =
* WP-Comment-Killer now intended for use with mu-plugins installation method.
* manual-force-activation.php is deprecated.
* Significant docs update for new (un)install.

= 1.2.0 =
* We now show a banner in wp-admin and wp-admin/network when the plugin is active. This will help keep webmasters in the loop if this is installed by their web host.

= 1.1.0 =
* Significant improvements to quick activator script.

= 1.0.0 =
* Initial release.
