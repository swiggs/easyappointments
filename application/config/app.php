<?php defined('BASEPATH') or exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| App Configuration
|--------------------------------------------------------------------------
|
| Declare some of the global config values of Easy!Appointments.
|
*/

$config['version'] = '1.5.2'; // This must be changed manually.

$config['url'] = Config::BASE_URL;

$config['connected_website_url'] = rtrim(Config::CONNECTED_WEBSITE_URL, '/');

$config['connected_website_design_consultation_path'] = '/shop/services/design-consultation/';

$config['debug'] = Config::DEBUG_MODE;

$config['email_attach_ics_invite'] = Config::EMAIL_ATTACH_ICS_INVITE;

$config['cache_busting_token'] = '20260204';
