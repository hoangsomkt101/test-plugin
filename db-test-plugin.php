<?php
/**
 * Plugin Name: Hello World Simple
 * Plugin URI: https://github.com/USERNAME/hello-world-simple
 * Description: Plugin WordPress đơn giản hiển thị Hello World.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://github.com/USERNAME
 * License: GPL v2 or later
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Hiển thị Hello World ở frontend
 */
function hws_show_hello_world() {
    return '<h2 style="color:green">Hello World 👋</h2>';
}
add_shortcode('hello_world', 'hws_show_hello_world');
