<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Online Appointment Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config
{
    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------

    const BASE_URL = 'http://localhost';
    const LANGUAGE = 'english';
    const DEBUG_MODE = false;

    /**
     * Public URL of the main / e-commerce site linked from this scheduler (no trailing slash).
     * Used for checkout and other deep links into the connected website.
     */
    const CONNECTED_WEBSITE_URL = 'https://example.com';

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST = 'mysql';
    const DB_NAME = 'easyappointments';
    const DB_USERNAME = 'user';
    const DB_PASSWORD = 'password';

    // ------------------------------------------------------------------------
    // EMAIL SETTINGS (application/config/email.php)
    // ------------------------------------------------------------------------

    const EMAIL_PROTOCOL = 'mail';
    const EMAIL_SMTP_AUTH = false;
    const EMAIL_SMTP_HOST = '';
    const EMAIL_SMTP_USER = '';
    const EMAIL_SMTP_PASS = '';
    const EMAIL_SMTP_PORT = 587;
    const EMAIL_FROM_NAME = 'Easy!Appointments';
    const EMAIL_FROM_EMAIL = 'no-reply@example.org';

    /**
     * When true, appointment notification emails include an invitation.ics calendar attachment.
     * Set to false to send HTML-only booking emails (no .ics file).
     */
    const EMAIL_ATTACH_ICS_INVITE = true;

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE = false; // Enter TRUE or FALSE
    const GOOGLE_CLIENT_ID = '';
    const GOOGLE_CLIENT_SECRET = '';
}
