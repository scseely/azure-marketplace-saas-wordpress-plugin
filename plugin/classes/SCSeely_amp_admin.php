<?php
if(!class_exists('SCSeely_amp_admin')) {
    class SCSeely_amp_admin
    {
        public static function add_display_options()
        {
            //section name, display name, callback to print description of section, page to which section is attached.
            add_settings_section("header_section", "SaaS Application Configuration", "SCSeely_amp_admin::display_header_options_content", "scseely-azure-marketplace");

            add_settings_field("scseely_amp_tenant_id", "Tenant ID", "SCSeely_amp_admin::display_tenant_id_element", "scseely-azure-marketplace", "header_section");
            add_settings_field("scseely_amp_client_id", "User authentication Client ID", "SCSeely_amp_admin::display_client_id_element", "scseely-azure-marketplace", "header_section");
            add_settings_field("scseely_amp_marketplace_client_id", "Marketplace authentication Client ID", "SCSeely_amp_admin::display_marketplace_client_id_element", "scseely-azure-marketplace", "header_section");
            add_settings_field("scseely_amp_marketplace_client_secret", "Marketplace authentication Client ID", "SCSeely_amp_admin::display_marketplace_client_secret_element", "scseely-azure-marketplace", "header_section");
            add_settings_field("scseely_amp_marketplace_api_version", "Marketplace API Version", "SCSeely_amp_admin::display_marketplace_api_version_element", "scseely-azure-marketplace", "header_section");
            //section name, form element name, callback for sanitization
            $guid_zero = '00000000-0000-0000-0000-000000000000';
            register_setting("header_section", "scseely_amp_tenant_id", array('default' => $guid_zero));
            register_setting("header_section", "scseely_amp_client_id", array('default' => $guid_zero));
            register_setting("header_section", "scseely_amp_marketplace_client_id", array('default' => $guid_zero));
            register_setting("header_section", "scseely_amp_marketplace_client_secret");
            register_setting("header_section", "scseely_amp_marketplace_api_version", array('default' => '2018-09-15'));
        }

        //public static function scseely_amp_menu(){
        public static function display_page(){
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

        public static function display_header_options_content(){echo "Values to integrate from Azure Marketplace SaaS Offer";}

        public static function display_password_field($name){
            ?>
            <input type="password" maxlength="100" size="40" name="<?= $name ?>" id="<?= $name ?>" value="<?php echo get_option($name); ?>" />
            <?php
        }

        public static function display_guid_field($name){
            ?>
            <input type="text" maxlength="36" size="40" name="<?= $name ?>" id="<?= $name ?>" value="<?php echo get_option($name); ?>" />
            <?php
        }

        public static function display_marketplace_api_version_element(){

            $api_version = get_option('scseely_amp_marketplace_api_version');
            ?>
            <select type="text" name="marketplace_api_version" id="marketplace_api_version" selected>
                <option value="2018-08-31" <?php if ('2018-08-31' == $api_version) {echo 'selected';} ?>>2018-08-31 (Production)</option>
                <option value="2018-09-15" <?php if ('2018-09-15' == $api_version) {echo 'selected';} ?>>2018-09-15 (Mock)</option>
            </select>
            <?php
        }

        public static function display_tenant_id_element()
        {
            SCSeely_amp_admin::display_guid_field('scseely_amp_tenant_id');
        }

        public static function display_client_id_element()
        {
            SCSeely_amp_admin::display_guid_field('scseely_amp_client_id');
        }

        public static function display_marketplace_client_id_element()
        {
            SCSeely_amp_admin::display_guid_field('scseely_amp_marketplace_client_id');
        }

        public static function display_marketplace_client_secret_element()
        {
            SCSeely_amp_admin::display_password_field('scseely_amp_marketplace_client_secret');
        }
    }
}