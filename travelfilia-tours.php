<?php
/****
/* Plugin Name: Travelfilia Tours
/* Description:   A featured product plugin
Version: 0.1.0
Author: Sunil Williams
Author URI: http://sunil.co.nz
License: GPL
 */

if (!defined('ABSPATH') ) {
    exit() ;
}

define("PLUGIN_TTOURS_URL",  plugin_dir_url(__FILE__)  ) ;

define("PLUGIN_TTOURS_DIR",  plugin_dir_path(__FILE__)) ;

/**
 * include our styles and scripts
 */
function ttours_styles(){
	wp_enqueue_style( 'blerta-app-feature-styles', PLUGIN_TTOURS_URL . "css/ttours.css"  ) ;
}
add_action('wp_enqueue_scripts', 'ttours_styles'  ) ;


/**
 * include our Custom Post Type
 */
include_once(  PLUGIN_TTOURS_DIR . "cpt/tour.php" ) ;

/**
 *  show previews of three tours
 */
function tours_three_previews()
{
	$out = include_once('loops/three_previews.php') ;
	echo $out ;
}
