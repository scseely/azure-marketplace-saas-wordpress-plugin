<?php

/*
Plugin Name: Azure Marketplace SaaS Offer Plugin
Plugin URI: https://github.com/scseely/azure-marketplace-saas-wordpress-plugin
Description: A brief description of the Plugin.
Version: 1.0
Author: scottseely
Author URI: https://github.com/scseely/
License: MIT
*/


function scseely_amp_install(){
    global $wpdb;

    // Setup settings table
    $table = $wpdb->prefix."scseely_amp_settings";
    $structure = "CREATE TABLE $table (
        setting varchar(100) NOT NULL,
        value varchar(255),
        UNIQUE KEY setting (setting)
        );";
    $wpdb->query($structure);

    $uuidZero = '00000000-0000-0000-0000-000000000000';
    $settings = "INSERT INTO $table (setting, value)
                 VALUES ('tenantId', '$uuidZero');";
    $wpdb->query($settings);
    $settings = "INSERT INTO $table (setting, value)
                 VALUES ('loginClientId', '$uuidZero');";
    $wpdb->query($settings);
    $settings = "INSERT INTO $table (setting, value)
                 VALUES ('marketplaceClientId', '$uuidZero');";
    $wpdb->query($settings);
    $settings = "INSERT INTO $table (setting, value)
                 VALUES ('marketplaceClientSecret', '');";
    $wpdb->query($settings);
    $settings = "INSERT INTO $table (setting, value)
                 VALUES ('useMarketplaceProductionApi', 'false');";
    $wpdb->query($settings);
    // Setup subscriptions table
    $table = $wpdb->prefix."scseely_amp_subscriptions";

    $structure = "CREATE TABLE $table (
        id varchar(36) NOT NULL,
        status varchar(20) NOT NULL,
        name varchar(100) NOT NULL,
        tenant varchar(36) NOT NULL,
        contact varchar(100) NOT NULL,
        startdate DATETIME NOT NULL,
        UNIQUE KEY id (id)
        );";
    $wpdb->query($structure);
}

function scseely_amp_uninstall(){
    global $wpdb;

    $table = $wpdb->prefix."scseely_amp_subscriptions";
    $structure = "DROP TABLE $table;";
    $wpdb->query($structure);

    $table = $wpdb->prefix."scseely_amp_settings";
    $structure = "DROP TABLE $table;";
    $wpdb->query($structure);
}

function scseely_amp_menu(){
    global $wpdb;
    include "scseely_amp_admin.php";
}

function scseely_amp_admin_actions(){
    add_options_page('Azure Marketplace SaaS Offer', 'Azure Marketplace', 'manage_options', 'scseeely-azure-marketplace', 'scseely_amp_menu');
}


register_activation_hook( __FILE__, 'scseely_amp_install' );
register_deactivation_hook(__FILE__, 'scseely_amp_uninstall');
add_action('admin_menu', 'scseely_amp_admin_actions');