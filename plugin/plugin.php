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
}

function scseely_amp_menu(){
?>
    <div class="wrap">
    <div id="icon-options-general" class="icon32"></div>
    <h1>Azure Marketplace</h1>
    <form method="post" action="options.php">
        <?php

        settings_fields("header_section");

        // all the add_settings_field callbacks is displayed here
        do_settings_sections("scseely-azure-marketplace");

        // Add the submit button to serialize the options
        submit_button();

        ?>
    </form>
    </div>
<?php
        }

function scseely_amp_admin_actions(){
    add_menu_page('Azure Marketplace SaaS Offer',
                  'Azure Marketplace',
                  'manage_options',
                  'scseely-azure-marketplace',
                  'scseely_amp_menu',
                  '',
                  100);
}

function display_options()
{
    //section name, display name, callback to print description of section, page to which section is attached.
    add_settings_section("header_section", "SaaS Application Configuration", "display_header_options_content", "scseely-azure-marketplace");

    add_settings_field("scseely_amp_tenant_id", "Tenant ID", "display_tenant_id_element", "scseely-azure-marketplace", "header_section");
    add_settings_field("scseely_amp_client_id", "User authentication Client ID", "display_client_id_element", "scseely-azure-marketplace", "header_section");
    add_settings_field("scseely_amp_marketplace_client_id", "Marketplace authentication Client ID", "display_marketplace_client_id_element", "scseely-azure-marketplace", "header_section");
    add_settings_field("scseely_amp_marketplace_client_secret", "Marketplace authentication Client ID", "display_marketplace_client_secret_element", "scseely-azure-marketplace", "header_section");
    add_settings_field("scseely_amp_marketplace_api_version", "Marketplace API Version", "display_marketplace_api_version_element", "scseely-azure-marketplace", "header_section");
    //section name, form element name, callback for sanitization
    $guid_zero = '00000000-0000-0000-0000-000000000000';
    register_setting("header_section", "scseely_amp_tenant_id", array('default' => $guid_zero));
    register_setting("header_section", "scseely_amp_client_id", array('default' => $guid_zero));
    register_setting("header_section", "scseely_amp_marketplace_client_id", array('default' => $guid_zero));
    register_setting("header_section", "scseely_amp_marketplace_client_secret");
    register_setting("header_section", "scseely_amp_marketplace_api_version", array('default' => '2018-09-15'));
}

function display_header_options_content(){echo "Values to integrate from Azure Marketplace SaaS Offer";}

function display_password_field($name){
    ?>
    <input type="password" maxlength="100" size="40" name="<?= $name ?>" id="<?= $name ?>" value="<?php echo get_option($name); ?>" />
    <?php
}

function display_guid_field($name){
    ?>
    <input type="text" maxlength="36" size="40" name="<?= $name ?>" id="<?= $name ?>" value="<?php echo get_option($name); ?>" />
    <?php
}

function display_marketplace_api_version_element(){

    $api_version = get_option('scseely_amp_marketplace_api_version');
    ?>
    <select type="text" name="marketplace_api_version" id="marketplace_api_version" selected>
        <option value="2018-08-31" <?php if ('2018-08-31' == $api_version) {echo 'selected';} ?>>2018-08-31 (Production)</option>
        <option value="2018-09-15" <?php if ('2018-09-15' == $api_version) {echo 'selected';} ?>>2018-09-15 (Mock)</option>
    </select>
    <?php
}

function display_tenant_id_element()
{
    display_guid_field('scseely_amp_tenant_id');
}

function display_client_id_element()
{
    display_guid_field('scseely_amp_client_id');
}

function display_marketplace_client_id_element()
{
    display_guid_field('scseely_amp_marketplace_client_id');
}

function display_marketplace_client_secret_element()
{
    display_password_field('scseely_amp_marketplace_client_secret');
}

register_activation_hook( __FILE__, 'scseely_amp_install' );
register_deactivation_hook(__FILE__, 'scseely_amp_uninstall');
add_action('admin_menu', 'scseely_amp_admin_actions');
add_action('admin_init', 'display_options');
