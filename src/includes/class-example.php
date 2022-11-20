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
    defined('EXAMPLE_VERSION','1.0.0');
}

//Plugin Name
if( ! defined('EXAMPLE_NAME')){
    defined('EXAMPLE_NAME', 'Example');
}

//Plugin Slug
if( ! defined('EXAMPLE_PLUGIN_SLUG')){
    defined('EXAMPLE_PLUGIN_SLUG', 'example');
}

// Plugin Basename
if( ! defined('EXAMPLE_PLUGIN_BASENAME')){
    defined('EXAMPLE_PLUGIN_BASENAME', plugin_basename(__FILE__));
}

// Plugin Folder
if( ! defined('EXAMPLE_PLUGIN_DIR')){
    defined('EXAMPLE_PLUGIN_DIR', plugin_basename(__FILE__));
}

// JSON File Name
if( ! defined('EXAMPLE_PLUGIN_JSON_FILENAME')){
    defined('EXAMPLE_PLUGIN_JSON_FILENAME', 'example.json');
}

 defined('EXAMPLE','1.0.0');