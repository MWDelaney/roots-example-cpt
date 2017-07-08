<?php
/*
Plugin Name: Custom Post Type: Example
Plugin URI:
Description: Example custom post type. Don't actually use this.
Version: 1.0
Author: Michael W. Delaney
Author URI:
License: MIT
*/

namespace MWD\ExampleCPT;


//Set up autoloader
require __DIR__ . '/vendor/autoload.php';

//Define Constants
define( 'EXAMPLECPT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EXAMPLECPT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Autoload the Init class
$example_init = new Init();
