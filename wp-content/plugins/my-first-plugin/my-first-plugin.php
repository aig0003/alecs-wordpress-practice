<?php
/**
 * Plugin Name: My First Plugin (Remove Admin Bar)
 * Description: Removes admin bar from front end
 */

// Removes the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );