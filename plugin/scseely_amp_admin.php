<?php

global $tenantId;
global $loginClientId;
global $marketplaceClientId;
global $marketplaceClientSecret;
global $useMarketplaceProductionApi;

function scseely_amp_save_settings() {
    global $wpdb;
    global $tenantId;
    global $loginClientId;
    global $marketplaceClientId;
    global $marketplaceClientSecret;
    global $useMarketplaceProductionApi;

    $table = $wpdb->prefix."scseely_amp_settings";
    $tenantId = $_POST['tenantId'];
    $loginClientId = $_POST['loginClientId'];
    $marketplaceClientId = $_POST['marketplaceClientId'];
    $marketplaceClientSecret = $_POST['marketplaceClientSecret'];
    $useMarketplaceProductionApi = 'false';
    if ( 'on' == ($_POST['useMarketplaceProductionApi'])  ) {
        $useMarketplaceProductionApi = 'true';
    }

    $settings = "UPDATE $table SET value = '$tenantId'
                 WHERE setting='tenantId'";
    $wpdb->query($settings);
    $settings = "UPDATE $table SET value = '$loginClientId'
                 WHERE setting='loginClientId'";
    $wpdb->query($settings);
    $settings = "UPDATE $table SET value = '$marketplaceClientId'
                 WHERE setting='marketplaceClientId'";
    $wpdb->query($settings);
    $settings = "UPDATE $table SET value = '$marketplaceClientSecret'
                 WHERE setting='marketplaceClientSecret'";
    $wpdb->query($settings);
    $settings = "UPDATE $table SET value = '$useMarketplaceProductionApi'
                 WHERE setting='useMarketplaceProductionApi'";
    $wpdb->query($settings);
    ?>
    <div id="setting-error-settings_updated" class="notice notice-success settings-error is-dismissible">
        <p><strong>Settings saved.</strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
    <?php
}

function scseely_amp_return_single_item($setting) {
    global $wpdb;
    $table = $wpdb->prefix."scseely_amp_settings";
    $query = "select value from  $table
                 WHERE setting='$setting'";
    $results = $wpdb->get_row($query);

    if ($results == null) {
        return null;
    }

    return $results->value;
}

function scseely_amp_load_settings() {
    global $tenantId;
    global $loginClientId;
    global $marketplaceClientId;
    global $marketplaceClientSecret;
    global $useMarketplaceProductionApi;

    $tenantId = scseely_amp_return_single_item('tenantId');
    $loginClientId = scseely_amp_return_single_item('loginClientId');
    $marketplaceClientId = scseely_amp_return_single_item('marketplaceClientId');
    $marketplaceClientSecret = scseely_amp_return_single_item('marketplaceClientSecret');
    $useMarketplaceProductionApi= scseely_amp_return_single_item('useMarketplaceProductionApi');
}

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        scseely_amp_save_settings();
    } else {
        scseely_amp_load_settings();
    }
?>

<h1>Azure Marketplace Settings</h1>
<form method="post">
    <table class="form-table" role="presentation">
        <tbody>
            <tr>
                <th scope="row">
                    <label for="">Azure AD Marketplace Tenant ID</label>
                </th>
                <td>
                    <input id="tenantId" class="regular-text" name="tenantId" type="text" value="<?= $tenantId ?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="">Interactive Azure AD Login Client ID</label>
                </th>
                <td>
                    <input id="loginClientId" class="regular-text" name="loginClientId" type="text" value="<?= $loginClientId ?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="">Azure AD Marketplace API Login Client ID</label>
                </th>
                <td>
                    <input id="marketplaceClientId" class="regular-text" name="marketplaceClientId" type="text" value="<?= $marketplaceClientId ?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="">Azure AD Marketplace API Login Client Secret</label>
                </th>
                <td>
                    <input id="marketplaceClientSecret" class="regular-text" name="marketplaceClientSecret" type="password" value="<?= $marketplaceClientSecret ?>" />
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label for="">Use Azure Marketplace production API</label>
                </th>
                <td>
                    <input id="useMarketplaceProductionApi" class="regular-text" name="useMarketplaceProductionApi" type="checkbox" <?php if ('true' == $useMarketplaceProductionApi) { echo 'checked'; } ?> />
                </td>
            </tr>
        </tbody>
    </table>
    <p class="submit">
        <input id="submit" class="button button-primary" type="submit" name="submit" value="Save Changes" />
    </p>
</form>
