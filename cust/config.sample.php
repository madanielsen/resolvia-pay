<?php

/*
 * This is a sample configuration file for ResolviaPay
 * 
 * Copy this file to config.php and fill in your own values
 */

$config['api_key'] = 'YOUR_API_KEY';
$config['app_url'] = 'http://localhost/resolvia-pay'; // URL to your ResolviaPay installation
$config['app_folder'] = '/resolvia-pay'; // If you installed ResolviaPay in a subfolder, enter the folder name here
$config['page_title'] = 'Min side | Resolvia Egeninkasso';

$config['logo'] = 'public/logo.svg'; // If you want to use a custom logo, upload it to the public folder, filename MUST be custom-logo.[svg|png|jpg]
$config['logo_link'] = 'https://resolvia.no'; // URL to your website, which will be linked to the logo

//
// Do not change anything below this line, unless you know what you are doing
//
$config['api_url'] = 'https://app.resolvia.no/api';

$config['format.date'] = 'd-m-Y';
$config['format.datetime'] = 'd.m.Y H:i:s';
$config['format.time'] = 'H:i:s';

$config['format.decimal_separator'] = ',';
$config['format.thousands_separator'] = '.';

// Take into account typical errors in the configuration file

// No trailing slash in app_url
$config['app_url'] = rtrim($config['app_url'], '/');
// No trailing slash in app_folder
$config['app_folder'] = rtrim($config['app_folder'], '/');