<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Settings for Raudhahpay for WooCommerce.
 */
return array(
    'enabled' => array(
        'title' => __('Enable/Disable', 'raudhahpay'),
        'type' => 'checkbox',
        'label' => __('Enable Raudhah Pay', 'raudhahpay'),
        'default' => 'yes'
    ),
    'title' => array(
        'title' => __('Title', 'raudhahpay'),
        'type' => 'text',
        'description' => __('This controls the title which the user sees during checkout.', 'raudhahpay'),
        'default' => __('Raudhah Pay Internet Banking', 'raudhahpay')
    ),
    'description' => array(
        'title' => __('Description', 'raudhahpay'),
        'type' => 'textarea',
        'description' => __('This controls the description which the user sees during checkout.', 'raudhahpay'),
        'default' => __('Pay with Maybank2u, CIMB Clicks, Bank Islam, RHB, Hong Leong Bank, Bank Muamalat, Public Bank, Alliance Bank, Affin Bank, AmBank, Bank Rakyat, UOB, Standard Chartered.', 'raudhahpay')
    ),
    'web_service_url' => array(
        'title' => __('Service URL', 'raudhahpay'),
        'type' => 'text',
        'placeholder' => 'Example : http://servicedomain.com',
        'description' => __('Please enter Raudhah Pay web service URL.', 'raudhahpay'),
        'default' => ''
    ),
    'access_token' => array(
        'title' => __('API Access Token', 'raudhahpay'),
        'type' => 'text',
        'placeholder' => 'Example : cQOeP3qICmcV_EwHQ6OPnUo4tepiLSJK',
        'description' => __('Please enter your Raudhah Pay API Access Token.', 'raudhahpay') . ' ' . sprintf(__('Get Your API Access Token: %Raudhahpay%s.', 'raudhahpay'), '<a href="https://stg.raudhahpay.com/management/api" target="_blank">', '</a>'),
        'default' => ''
    ),
    'signature_key' => array(
        'title' => __('API Signature Key', 'raudhahpay'),
        'type' => 'text',
        'placeholder' => 'Example : cQOeP3qICmcV_EwHQ6OPnUo4tepiLSJK',
        'description' => __('Please enter your Raudhah Pay API Signature Key.', 'raudhahpay') . ' ' . sprintf(__('Get Your API Signature Key: %Raudhahpay%s.', 'raudhahpay'), '<a href="https://stg.raudhahpay.com/management/api" target="_blank">', '</a>'),
        'default' => ''
    ),
    'collection_id' => array(
        'title' => __('Collection ID', 'raudhahpay'),
        'type' => 'text',
        'placeholder' => 'Example : 7KAGsSXe',
        'description' => __('Please enter your Raudhah Collection ID. ', 'raudhahpay'),
        'default' => ''
    ),
    'reference_1_label' => array(
        'title' => __('Raudhah Pay Reference Label', 'raudhahpay'),
        'type' => 'text',
        'default' => ''
    ),
    'reference_1' => array(
        'title' => __('Raudhah Pay Reference Value', 'raudhahpay'),
        'type' => 'text',
        'default' => ''
    ),
    'checkout_label' => array(
        'title' => __('Checkout Label', 'raudhahpay'),
        'type' => 'text',
        'placeholder' => 'Example: Pay with Raudhah Pay',
        'description' => __('Button label on checkout.', 'raudhahpay'),
        'default' => 'Pay with Raudhah Pay'
    ),
    'clearcart' => array(
        'title' => __('Clear Cart Session', 'raudhahpay'),
        'type' => 'checkbox',
        'label' => __('Tick to clear cart session on checkout', 'raudhahpay'),
        'default' => 'no'
    ),
    'debug' => array(
        'title' => __('Debug Log', 'raudhahpay'),
        'type' => 'checkbox',
        'label' => __('Enable logging', 'raudhahpay'),
        'default' => 'no',
        'description' => sprintf(__('Log Raudhah Pay events, such as IPN requests, inside <code>%s</code>', 'raudhahpay'), wc_get_log_file_path('raudhahpay'))
    ),
    'instructions' => array(
        'title' => __('Instructions', 'raudhahpay'),
        'type' => 'textarea',
        'description' => __('Instructions that will be added to the thank you page and emails.', 'raudhahpay'),
        'default' => '',
        'desc_tip' => true,
    ),
    'custom_error' => array(
        'title' => __('Custom Error', 'raudhahpay'),
        'type' => 'textarea',
        'description' => __('Custom error message for unsuccessful order payment.', 'raudhahpay'),
        'default' => '',
        'desc_tip' => true,
    ),
);
