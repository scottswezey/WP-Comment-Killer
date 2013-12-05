<?PHP
  // Execute via the web or CLI to forcibly install this plugin. This installer tested on 3.7, and more likely to break as time goes on.
  
  /*  The MIT License (MIT)
	    Copyright (c) 2013 Scott Swezey

  	  Permission is hereby granted, free of charge, to any person obtaining a copy
  	  of this software and associated documentation files (the "Software"), to deal
  	  in the Software without restriction, including without limitation the rights
  	  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
  	  copies of the Software, and to permit persons to whom the Software is
  	  furnished to do so, subject to the following conditions:

  	  The above copyright notice and this permission notice shall be included in all
  	  copies or substantial portions of the Software.

  	  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
  	  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
  	  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
  	  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
  	  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
  	  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
  	  SOFTWARE.
  */
  
  die('Use of this script is deprecated. Please us mu-plugins install method.');

  // Setup enviroment for plugin installation
  require( dirname(__FILE__) . '/../../../wp-load.php' );
  require( dirname(__FILE__) . '/../../../wp-admin/includes/plugin.php' );

  // Actually activate the plugin
  if ( is_multisite() ) {
    wp_die('This appears to be a multisite/network install. Remove or comment out the line after #'.__LINE__.' if you wish to proceed.');
    activate_plugin('wp-comment-killer/wp-comment-killer.php', '', true);
  } else {
    activate_plugin('wp-comment-killer/wp-comment-killer.php', '', false);
  }

  //Show that it worked
  wp_die('If you see this, installation should have worked and be complete.');
?>