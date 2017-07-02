<?php
/*
Plugin Name: پنل کاربری (آزمایشی)
Plugin URI: #
Description: My WordPress Admin Theme - Upload and Activate.
Author: hadi-a
Version: 1.0
Author URI: #
*/





define('MY_PANEL_DB_VERSION',1);

defined('ABSPATH') || exit('No Direct Access.');

define('MY_PANEL_DIR',  plugin_dir_path(__FILE__));

define('MY_PANEL_URL', plugin_dir_URL(__FILE__));

define('MY_PANEL_CSS_URL',trailingslashit(MY_PANEL_URL.'assets/css'));

define('MY_PANEL_JS_URL',trailingslashit(MY_PANEL_URL.'assets/js'));

define('MY_PANEL_IMG_URL',trailingslashit(MY_PANEL_URL.'assets/img'));

//define('MY_PANEL_EXC_URL',trailingslashit(MY_PANEL_URL.'assets/excel'));

define('MY_PANEL_INC_DIR',  trailingslashit(MY_PANEL_DIR.'include'));

define('MY_PANEL_ADMIN_DIR',  trailingslashit(MY_PANEL_DIR.'admin'));

define('MY_PANEL_TPL_DIR',  trailingslashit(MY_PANEL_DIR.'template'));

define('MY_PANEL_TPL_URL',trailingslashit(MY_PANEL_URL.'template/panel'));





 include MY_PANEL_INC_DIR.'shortcodes.php';

 include MY_PANEL_INC_DIR.'frontend.php';






if(is_admin()){


    require MY_PANEL_ADMIN_DIR.'page.php';
    require MY_PANEL_ADMIN_DIR.'menu.php';







    function load_custom_wp_admin_style() {
        wp_register_style( 'custom_wp_admin_css', MY_PANEL_CSS_URL.'style2.css', false, '1.0.0' );
        wp_enqueue_style( 'custom_wp_admin_css' );
    }
    add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );




add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts' );


}
