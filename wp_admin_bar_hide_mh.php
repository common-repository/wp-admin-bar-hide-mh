<?php
/* 
Plugin Name: WP Admin Bar Hide MH
Description: WP Admin Bar Hide plugin hide the frontend admin bar in WordPress 3.1+, credits to <a href="http://yoast.com/disable-wp-admin-bar/">Yoast</a>, and <a href="https://systmweb.com">Shelby Denike</a>. If you want to use the wordpress hide admin bar plugin and love it hungout with me, <a href="https://www.softgudam.com/">contact in softgudam</a>.
Version: 0.3.9.9
Author: MH Arif
Author URI: https://www.softgudam.com
Text Domain: WP Admin Bar Hide MH
*/ 
add_action( 'admin_print_scripts-profile.php', 'wp_admin_bar_hide_mh_pref' );
function wp_admin_bar_hide_mh_pref(){ ?>
	<style type="text/css">
	.show-admin-bar {display: none;}
</style>
<?php 
}
add_filter('show_admin_bar', '__return_false');
?>