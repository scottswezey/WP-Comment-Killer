<?php
/**
* Plugin Name: WP Comment Killer
* Plugin URI: https://github.com/scottswezey/WP-Comment-Killer
* Description: Install to stop all comments and pingbacks. Uninstall to revert to normal settings.
* Version: 2.0.0
* Author: Scott Swezey
* License: MIT
*/
 
/* The MIT License (MIT)

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
 
 
  // Stop all comments and pings
  function ss_wpck_return_false() {
         return false;
  }
  add_filter('comments_open', 'ss_wpck_return_false', 0);
  add_filter('pings_open', 'ss_wpck_return_false', 0);

  add_filter('comments_open', 'ss_wpck_return_false', 1000);
  add_filter('pings_open', 'ss_wpck_return_false', 1000);

  function ss_wpck_comments_disabled_notice() {
   printf('<div class="updated"><p>All commenting has been disabled by the WP-Comment-Killer plugin in mu-plugins.</p></div>');
  }
  add_action('admin_notices', 'ss_wpck_comments_disabled_notice');
  add_action('network_admin_notices', 'ss_wpck_comments_disabled_notice');
?>