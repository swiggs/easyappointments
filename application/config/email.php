<?php defined('BASEPATH') or exit('No direct script access allowed');

// Add custom values by settings them to the $config array.
// Example: $config['smtp_host'] = 'smtp.gmail.com';
// @link https://codeigniter.com/user_guide/libraries/email.html

$config['useragent'] = 'Easy!Appointments';
$config['protocol'] = Config::EMAIL_PROTOCOL; // or 'smtp'
$config['mailtype'] = 'html'; // or 'text'
//$config['smtp_debug'] = '1'; // or '1'
$config['smtp_auth'] = Config::EMAIL_SMTP_AUTH; //or FALSE for anonymous relay.
$config['smtp_host'] = Config::EMAIL_SMTP_HOST;
$config['smtp_user'] = Config::EMAIL_SMTP_USER;
$config['smtp_pass'] = Config::EMAIL_SMTP_PASS;
// $config['smtp_crypto'] = 'ssl'; // or 'tls'
$config['smtp_port'] = Config::EMAIL_SMTP_PORT;
$config['from_name'] = Config::EMAIL_FROM_NAME;
$config['from_address'] = Config::EMAIL_FROM_EMAIL;
// $config['reply_to'] = '';
$config['crlf'] = "\r\n";
$config['newline'] = "\r\n";
