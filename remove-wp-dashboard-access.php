<?php
/*
Plugin Name: Remove Dashboard Access for Non-Admins
Plugin URI: http://www.werdswords.com
Description: 
Version: 0.1
Author: DrewAPicture
Author URI: http://www.werdswords.com
License: GPLv2
*/

add_action('admin_init', 'no_mo_dashboard');
function no_mo_dashboard() {
  if (!current_user_can('delete_themes') && $_SERVER['PHP_SELF'] != '/wp-admin/admin-ajax.php') {
    if( preg_match('#wp-admin/?(index.php)?$#', $_SERVER['REQUEST_URI']) && ('index.php' != $menu[$page][2]) )
    wp_redirect(get_bloginfo('url'));
        }
    }

?>