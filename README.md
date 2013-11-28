# WP-Comment-Killer in a nutshell
WP-Comment-Killer is a WordPress plugin that was built for when a site is under attack by comment spam bots. Installing and activating the plugin will ensure there are no more comments or pingbacks accepted by WordPress. It was originally designed for web hosting companies trying to combat so called "spam havens," or abandoned websites that are being overrun with bots posting spam. The plugin is great for this specific use case, but shaky for most others. Everything this plugin does can be achieved with WordPress itself.

# Installing
1. Download the zip archive from [scottswezey/WP-Comment-Killer on GitHub](https://raw.github.com/scottswezey/WP-Comment-Killer/master/wp-comment-killer.zip)
1. Log into wp-admin, proceed to install a plugin as normal. Click the upload link. Upload the zip archive. Activate when done.

## Manually
1. Download the zip archive from [scottswezey/WP-Comment-Killer on GitHub](https://raw.github.com/scottswezey/WP-Comment-Killer/master/wp-comment-killer.zip)
1. Extract the archive under wp-content/plugins
1. Activate the plugin via wp-admin, or manually by visiting the manual-force-activation.php script over the web. _**Warning:**_ The activator script will not activate on network/multisite installs. It will display an error with instructions if you encounter this situation and wish to proceed.

# Uninstalling
The script can only be deactivated through wp-admin. That said, it makes no changes to the DB, and can be safely renamed before removing it entirely.

## Didn't install this on your site?
Your web host may have. Check with them, and contact them for support. That said, this is very easy to disable and remove if you've fixed your spam bot issue.

# Etc

## License
Short version: MIT license
Long version: See LICENSE file

## Authors and Contributors
@ScottSwezey of MDDHosting.com

## Support or Contact
Please open a ticket on the GitHub issue tracker: https://github.com/scottswezey/WP-Comment-Killer
