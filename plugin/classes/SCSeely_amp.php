<?php

require (__DIR__ . '/../admin/SCSeely_amp_admin.php');
require_once ('SCSeely_amp_constants.php');

if(!class_exists('SCSeely_amp')) {
    class SCSeely_amp {
        public static function init() {
            register_activation_hook( __FILE__, 'SCSeely_amp::activate' );
            register_deactivation_hook(__FILE__, 'SCSeely_amp::deactivate');
            add_action('admin_menu', 'SCSeely_amp_admin::add_admin_actions');
            add_action('admin_init', 'SCSeely_amp_admin::add_display_options');
            add_action('rest_api_init', 'scseely_amp_register_webhook');
        }

        public static function activate(){
            global $wpdb;

            $table = $wpdb->prefix.SCSeely_amp_constants::SubscriptionTableName;
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

        public static function deactivate() {
            global $wpdb;

            $table = $wpdb->prefix.SCSeely_amp_constants::SubscriptionTableName;
            $structure = "DROP TABLE $table;";
            $wpdb->query($structure);
        }
    }
}
