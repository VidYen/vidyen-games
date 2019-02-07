<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
 * exit uninstall if not called by WP
 */

if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
{
    exit();
}
