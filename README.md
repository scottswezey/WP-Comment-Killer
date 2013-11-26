# WP-Comment-Killer in a nutshell
WP-Comment-Killer is a WordPress plugin that was built for when a site is under attack by comment spam bots. Installing and activating the plugin will ensure there are no more comments or pingbacks accepted by WordPress. It was originally designed for web hosting companies trying to combat so called "spam havens," or abandoned websites that are being overrun with bots posting spam. The plugin is great for this specific use case, but shaky for most others. Everything this plugin does can be achieved with WordPress itself.

# Installing
1. Download the zip archive from [scottswezey/WP-Comment-Killer on GitHub](https://github.com/scottswezey/WP-Comment-Killer)
1. Log into wp-admin, proceed to install a plugin as normal. Click the upload link. Upload the zip archive. Activate when done.

## Manually
1. Download the zip archive from [scottswezey/WP-Comment-Killer on GitHub](https://github.com/scottswezey/WP-Comment-Killer)
1. Extract the archive under wp-content/plugins
1. Activate the plugin via wp-admin, or manually by visiting the manual-force-activation.php script over the web. _**Warning:**_ **This script will enable the plugin on all network sites for network installs.**

# Uninstalling
The script can only be deactivated through wp-admin. That said, it makes no changes to the DB, and can be safely renamed before removing it entirely.

# Etc

## Authors and Contributors
@ScottSwezey of MDDHosting.com

## Support or Contact
Please open a ticket on the GitHub issue tracker: https://github.com/scottswezey/WP-Comment-Killer
