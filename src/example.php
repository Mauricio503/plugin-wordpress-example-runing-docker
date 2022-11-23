<?php
/** 
 * @link            https://github.com/Mauricio503/plugin-wordpress-example-runing-docker
 * @since           1.0.0
 * @package         Example
 * 
 * 
 * 
 * @wordpress-plugin
 * Plugin Name:     Example
 * Plugin URI:      https://github.com/Mauricio503/plugin-wordpress-example-runing-docker
 * Description:     Plugin Example
 * Version:         1.0.0
 * Author:          Maurício Spagnol
 * Author URI:      https://criasystem.tech
 * License:         GPLv3 or later
 * License URI:     https://gnu.org/licenses/gpl-3.0.html
 * Text Domain:     example
 * Domain Path:     /languages/ 
 * */ 

if( ! defined('WPINC')){
    wp_die();
}
//Plugin Version
if( ! defined('EXAMPLE_VERSION')){
    define('EXAMPLE_VERSION','1.0.0');
}

//Plugin Name
if( ! defined('EXAMPLE_NAME')){
    define('EXAMPLE_NAME', 'Example');
}

//Plugin Slug
if( ! defined('EXAMPLE_PLUGIN_SLUG')){
    define('EXAMPLE_PLUGIN_SLUG', 'example');
}

// Plugin Basename
if( ! defined('EXAMPLE_BASENAME')){
    define('EXAMPLE_BASENAME', plugin_basename(__FILE__));
}

// Plugin Folder
if( ! defined('EXAMPLE_PLUGIN_DIR')){
    define('EXAMPLE_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
}

// JSON File Name
if( ! defined('EXAMPLE_JSON_FILENAME')){
    define('EXAMPLE_JSON_FILENAME', 'example.json');
}

load_plugin_textdomain( EXAMPLE_PLUGIN_SLUG, false, EXAMPLE_PLUGIN_SLUG.'/languages/' );


require_once EXAMPLE_PLUGIN_DIR . 'includes/class-example.php';
require_once EXAMPLE_PLUGIN_DIR . 'includes/class-example-json.php';
require_once EXAMPLE_PLUGIN_DIR . 'includes/class-example-widget.php';
require_once EXAMPLE_PLUGIN_DIR . 'includes/class-example-admin.php';
require_once EXAMPLE_PLUGIN_DIR . 'includes/class-example-shortcode.php';
if( is_admin())
    require_once EXAMPLE_PLUGIN_DIR . 'includes/class-example-widget.php';


// Plugin Instance
$my_yt_rec_plugin = new Example();

$channel_id = $my_yt_rec_plugin->options['channel_id'];
if ( $channel_id != "" ){
    $expiration = $my_yt_rec_plugin->options['cache_expiration'];
    $my_yt_rec_json = new Example_Json( 
        $channel_id, 
        $expiration, 
        EXAMPLE_PLUGIN_SLUG, 
        EXAMPLE_JSON_FILENAME 
    );
  
}

// Widget Instance
$my_yt_rec_widget = new Example_Widget();

// Shortcode Instance
$my_yt_rec_shortcode = new Example_Shortcode();

// Admin Instance
if( is_admin() ) {
    $my_yt_rec_admin_page = new Example_Admin(
        EXAMPLE_BASENAME, 
        EXAMPLE_PLUGIN_SLUG, 
        EXAMPLE_JSON_FILENAME
    );
}