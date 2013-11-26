WP-Comment-Killer
=================

A very simple WordPress plugin. Install to stop all comments and pingbacks. Uninstall to revert to normal settings.

=== WP Comment Killer ===
Contributors: ScottSwezey
Tags: Comments, Spam
Requires at least: 3.5
Tested up to: 3.7
Stable tag: trunk
License: MIT
License URI: http://choosealicense.com/licenses/mit/

Install to stop all comments and pingbacks. Uninstall to revert to normal.

== Description ==
Designed for use when a site is under attack by comment spam bots. Installing this plugin automatically disables all comments and pingbacks. There are no settings to configure.

This plugin doesn't modify your database in any way. Disable or remove it to revert your site to normal comment functionality.

== Installation ==
1. Install via WordPress admin area.
1. Or install manually by putting the files in the right place (plugin dir), then calling the manual-force-activation.php script over the web or via CLI with user level permissions.

== Frequently Asked Questions ==
= Why? =
This is only intended for when a site is under attack by comment spam. No more comments will be accepted with the installed and active.

= What if I never want to get comments? =
You should configure your site correctly. This can help until you do that.

= Help? =
See https://github.com/scottswezey/WP-Comment-Killer -- Open an issue.

= WP Network installs? =
Testing on single site and network configurations seem to work without issue. Please open an issue on github if you see differently.

= I didn't install this =
Your web host may have. Check with them, and contact them for support. That said, this is easy to disable and remove if you've fixed your spam bot issue.

== Changelog ==

= 1.1.0 =
* Significant improvements to quick activator script.

= 1.0.0 =
* Initial release.