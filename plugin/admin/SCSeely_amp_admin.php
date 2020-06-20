<?php

require (__DIR__ . '/../classes/SCSeely_amp_constants.php');

if(!class_exists('SCSeely_amp_admin')) {
    class SCSeely_amp_admin
    {
        public static function add_display_options()
        {
            //section name, display name, callback to print description of section, page to which section is attached.
            add_settings_section(SCSeely_amp_constants::HeaderSection, "SaaS Application Configuration", "SCSeely_amp_admin::display_header_options_content", SCSeely_amp_constants::AmpId);

            add_settings_field(SCSeely_amp_constants::TenantIdSetting, "Tenant ID", "SCSeely_amp_admin::display_tenant_id_element", SCSeely_amp_constants::AmpId, SCSeely_amp_constants::HeaderSection);
            add_settings_field(SCSeely_amp_constants::ClientIdSetting, "User authentication Client ID", "SCSeely_amp_admin::display_client_id_element", SCSeely_amp_constants::AmpId, SCSeely_amp_constants::HeaderSection);
            add_settings_field(SCSeely_amp_constants::MarketplaceClientIdSetting, "Marketplace authentication Client ID", "SCSeely_amp_admin::display_marketplace_client_id_element", SCSeely_amp_constants::AmpId, SCSeely_amp_constants::HeaderSection);
            add_settings_field(SCSeely_amp_constants::MarketplaceClientSecretSetting, "Marketplace authentication client secret", "SCSeely_amp_admin::display_marketplace_client_secret_element", SCSeely_amp_constants::AmpId, SCSeely_amp_constants::HeaderSection);
            add_settings_field(SCSeely_amp_constants::MarketplaceApiVersionSetting, "Marketplace API Version", "SCSeely_amp_admin::display_marketplace_api_version_element", SCSeely_amp_constants::AmpId, SCSeely_amp_constants::HeaderSection);
            //section name, form element name, callback for sanitization
            $guid_zero = '00000000-0000-0000-0000-000000000000';
            register_setting(SCSeely_amp_constants::HeaderSection, SCSeely_amp_constants::TenantIdSetting, array('default' => $guid_zero));
            register_setting(SCSeely_amp_constants::HeaderSection, SCSeely_amp_constants::ClientIdSetting, array('default' => $guid_zero));
            register_setting(SCSeely_amp_constants::HeaderSection, SCSeely_amp_constants::MarketplaceClientIdSetting, array('default' => $guid_zero));
            register_setting(SCSeely_amp_constants::HeaderSection, SCSeely_amp_constants::MarketplaceClientSecretSetting);
            register_setting(SCSeely_amp_constants::HeaderSection, SCSeely_amp_constants::MarketplaceApiVersionSetting, array('default' => SCSeely_amp_constants::AmpMockVersion));
        }

        public static function add_admin_actions(){
            add_menu_page('Azure Marketplace SaaS Offer',
                'Azure Marketplace',
                'manage_options',
                SCSeely_amp_constants::AmpId,
                'SCSeely_amp_admin::display_page',
                '',
                100);
        }

        public static function display_page(){
            ?>
            <div class="wrap">
                <div id="icon-options-general" class="icon32"></div>
                <h1>Azure Marketplace</h1>
                <form method="post" action="options.php">
                    <?php

                    settings_fields(SCSeely_amp_constants::HeaderSection);

                    // all the add_settings_field callbacks is displayed here
                    do_settings_sections(SCSeely_amp_constants::AmpId);

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

        public static function add_option_to_select($value, $display, $selected){
            ?>
            <option value="<?=$value?>" <?php if ($value == $selected) {echo 'selected';} ?>><?= $display ?></option>
            <?php
        }

        public static function display_marketplace_api_version_element(){
            $api_version = get_option(SCSeely_amp_constants::MarketplaceApiVersionSetting);

            ?>
            <select type="text" name="<?= SCSeely_amp_constants::MarketplaceApiVersionSetting ?>" id="<?= SCSeely_amp_constants::MarketplaceApiVersionSetting ?>" >
                <?php
                SCSeely_amp_admin::add_option_to_select(SCSeely_amp_constants::AmpProdVersion, SCSeely_amp_constants::AmpProdVersion . ' (Production)', $api_version);
                SCSeely_amp_admin::add_option_to_select(SCSeely_amp_constants::AmpMockVersion, SCSeely_amp_constants::AmpMockVersion . ' (Mock)', $api_version);
                ?>
            </select>
            <?php
        }

        public static function display_tenant_id_element()
        {
            SCSeely_amp_admin::display_guid_field(SCSeely_amp_constants::TenantIdSetting);
        }

        public static function display_client_id_element()
        {
            SCSeely_amp_admin::display_guid_field(SCSeely_amp_constants::ClientIdSetting);
        }

        public static function display_marketplace_client_id_element()
        {
            SCSeely_amp_admin::display_guid_field(SCSeely_amp_constants::MarketplaceClientIdSetting);
        }

        public static function display_marketplace_client_secret_element()
        {
            SCSeely_amp_admin::display_password_field(SCSeely_amp_constants::MarketplaceClientSecretSetting);
        }
    }
}