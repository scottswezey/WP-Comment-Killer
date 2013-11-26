<?PHP
  // Execute via the web or CLI to forcibly install this plugin. This installer tested on 3.7, and more likely to break as time goes on.

  // Setup enviroment for plugin installation
  require( dirname(__FILE__) . '/../../../wp-load.php' );
  require( dirname(__FILE__) . '/../../../wp-admin/includes/plugin.php' );

  // Actually activate the plugin
  if ( is_multisite() ) {
    activate_plugin('wp-comment-killer/wp-comment-killer.php', '', true); //multi-sites
  } else {
    activate_plugin('wp-comment-killer/wp-comment-killer.php', '', false); //single sites
  }

  //Show that it worked
  wp_die('If you see this, installation should have worked and be complete.');
?>