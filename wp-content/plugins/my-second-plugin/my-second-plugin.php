<?php
/**
 * @package MyFirstPlugin
 */
/**
 * Plugin Name: My Second Plugin ()
 * Plugin URI: localhost/wordpress/plugin
 * Description: TBD
 * Version: 1.0.2
 * Author: Me
 * Author URI: localhost/wordpress
 * License: GPLv2 or later
 * Text Domain: my-first-plugin
 */


// Below is 3 methods of checking if plugin is accessed outside of 
// WP and killing access if so
// Method 1:
/*
if( ! defined( 'ABSPATH' )) {
    die;
}
*/

// Method 2:
defined( 'ABSPATH' ) or die( 'Access denied.' );


// Method 3:
/*
if( ! function_exists( 'add_action' )) {
    echo 'Access denied';
    exit();
}
*/

// Practicing PHP OOP
class MySecondPlugin {
    // note: these methods can be "non-unique" since they are local to class
    function activate() { 
        echo 'test1';
    }

    function deactivate() {
        echo 'test2';
    }

    function uninstall() {

    }
}

// Precautionary check to ensure class exists
if ( class_exists( 'MySecondPlugin' ) ) {
    $mySecondPlugin = new MySecondPlugin(); 
}


// Hooks that triggers automatically utilized during plugin's use:

// 1. activation
register_activation_hook( __FILE__, array( $mySecondPlugin, 'activate' ) ); 
// note: __FILE__ ensures only local functionality is implemented
// using array() ensures use of function defined by object instance

// 2. deactivation
register_deactivation_hook( __FILE__, array( $mySecondPlugin, 'deactivate' ) ); 

// 3. uninstall