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


add_filter('the_content','thanks');

function thanks($content){
   return $content . '<p><strong>Obrigado</strong></p>'; 
}