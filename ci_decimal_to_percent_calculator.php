<?php
/*
Plugin Name: CI Decimal to percent calculator
Plugin URI: https://www.calculator.io/decimal-to-percent-calculator/
Description: Decimal to percent calculator converts decimals to percentages and whole numbers to percentages by multiplying by 100% or shifting the decimal point.
Version: 1.0.0
Author: Decimal to Percent Calculator / www.calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_decimal_to_percent_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Decimal to Percent Calculator by www.calculator.io";

function display_calcio_ci_decimal_to_percent_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Decimal to Percent Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_decimal_to_percent_calculator_iframe"></iframe></div>';
}


add_shortcode( 'ci_decimal_to_percent_calculator', 'display_calcio_ci_decimal_to_percent_calculator' );