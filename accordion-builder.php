<?php

/**
 * 
 */
/*
Plugin Name:Accordion Builder
Plugin URI: http://wordpress.org/plugins/accordion-builder/
Description: The Accordion Builder plugin is create awesome accordion for your website
Author: Sameer
Version: 1.7.2
Text Domain:accordion-builder
Author URI: https://github.com/SameerDev3023
*/

if(!defined('ABSPATH')){
    exit;
}

if (!defined('WPAB_PLUGIN_DIR_URL')) {
    define('WPAB_PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
}
if (!defined('WPAB_PLUGIN_DIR_PATH')) {
    define('WPAB_PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
}
final class Accordion_Builder{


    public static $instance = null;

    public static function get_instance(){
        if(!isset(self::$instance)){
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function __construct(){
        add_action('plugin_loaded',array($this,'WPAB_Plugin_loaded'));
    }
    public function WPAB_Plugin_loaded(){
        require_once WPAB_PLUGIN_DIR_PATH.'includes/WPAB_admin_menu.php';
        require_once WPAB_PLUGIN_DIR_PATH.'includes/WPAB_shortcode.php';

        require_once WPAB_PLUGIN_DIR_PATH . 'admin/cmb2/init.php';
        require_once WPAB_PLUGIN_DIR_PATH . 'admin/cmb2/cmb2-conditionals.php';
            if (!class_exists('PW_CMB2_Field_Select2')) {
                require_once WPAB_PLUGIN_DIR_PATH . 'admin/cmb2/cmb-field-select2/cmb-field-select2.php';
            }
    }
    
       

    
}
Accordion_Builder::get_instance();
?>