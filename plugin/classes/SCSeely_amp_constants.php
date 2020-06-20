<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if(!class_exists('SCSeely_amp_constants')) {
    class SCSeely_amp_constants{
        const SubscriptionTableName = 'scseely_amp_subscriptions';
        const AmpId= 'scseely-azure-marketplace';
        const HeaderSection= 'header_section';

        const TenantIdSetting = 'scseely_amp_tenant_id';
        const ClientIdSetting = 'scseely_amp_client_id';
        const MarketplaceClientIdSetting = 'scseely_amp_marketplace_client_id';
        const MarketplaceClientSecretSetting = 'scseely_amp_marketplace_client_secret';
        const MarketplaceApiVersionSetting = 'scseely_amp_marketplace_api_version';

        const AmpMockVersion = '2018-09-15';
        const AmpProdVersion = '2018-08-31';
    }
}

