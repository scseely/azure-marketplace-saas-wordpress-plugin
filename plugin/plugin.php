<?php
/*
Plugin Name: Azure Marketplace SaaS Offer Plugin
Plugin URI: https://github.com/scseely/azure-marketplace-saas-wordpress-plugin
Description: A brief description of the Plugin.
Version: 1.0
Author: Scott Seely (scott@scottseely.com)
Author URI: https://github.com/scseely/
License: MIT
*/

require_once('classes/SCSeely_amp.php');
SCSeely_amp::init();

function scseely_amp_register_webhook() {
    register_rest_route( 'scseely_amp/v1', '/webhook', array(
            'methods' => 'POST',
            'callback'=> 'scseely_amp_process_webhook'
    ));
}