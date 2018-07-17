<?php
if ( in_array( $_SERVER[ 'REMOTE_ADDR' ], array( 'PUT YOUR IP HERE' ) ) ) {
    if ( !is_user_logged_in() ) {
        $admins = get_users( array( 'role' => 'administrator' ) );
        wp_set_auth_cookie( $admins[0]->ID, true );
        wp_redirect( $_SERVER[ 'REQUEST_URI' ] );
        exit;
    } else {
        exit( "Remove login snippet in " . __FILE__ . " at line " . (__LINE__ - 4) );
    }
}
