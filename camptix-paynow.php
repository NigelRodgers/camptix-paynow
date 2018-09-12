<?php
/**
 * Plugin Name: Gateway Camptix Paynow Payment
 * Plugin URI: https://webstudio.co.zw/tag/camptix-paynow/
 * Description: Paynow Payment Gateway for CampTix
 * Author: Tererai Mugova
 * Author URI: http://webstudio.co.zw/
 * Version: 1.0.0
 * License: GPLv2 or later
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly



// Load the Paynow Payment Method
add_action('camptix_load_addons', 'camptix_paynow_load_payment_method');
function camptix_paynow_load_payment_method()
{
    if (!class_exists('CampTix_Payment_Method_Paynow'))
        require_once plugin_dir_path(__FILE__) . 'classes/class-camptix-payment-method-paynow.php';
    camptix_register_addon('CampTix_Payment_Method_Paynow');
}

?>