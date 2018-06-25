<?php

/*
Plugin Name: Admin Notice
Plugin URI: http://matthewwhitaker.me
Description: Shows a simple admin notice for testing purposes
Version: 1.0.1
Author: Matthew Whitaker
Author URI: http://matthewwhitaker.me
License: GPL2
*/

function admin_notice() {
    ?>
    <div class="notice notice-success is-dismissible">
        <p><?php _e( '"Admin Notice" shows a simple admin notice for plugin testing purposes. Disable the plugin to disable this notice.', 'text-domain' ); ?></p>
    </div>
    <?php
}
add_action( 'admin_notices', 'admin_notice' );