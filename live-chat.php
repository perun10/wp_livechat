<?php
/*
Plugin Name: Livechat
Description: Adds live chat to your wordpress page
Version: 1.0
Author: Djuradj Perunovic
*/

// Add the scripts and styles to the page
function bottom_right_window_scripts() {
    wp_enqueue_script( 'bottom-right-window-script', plugin_dir_url( __FILE__ ) . 'bottom-right-window.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_style( 'bottom-right-window-style', plugin_dir_url( __FILE__ ) . 'bottom-right-window.css' );
}
add_action( 'wp_enqueue_scripts', 'bottom_right_window_scripts' );

// Add the window to the page
function bottom_right_window_html() {
    ?>
    <div id="bottom-right-window">
        <p>This is the bottom right window!</p>
        <button id="bottom-right-window-close">Close</button>
    </div>
    <?php
}
add_action( 'wp_footer', 'bottom_right_window_html' );
