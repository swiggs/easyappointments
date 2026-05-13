<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Easy!Appointments - Online Appointment Scheduler
 *
 * @package     EasyAppointments
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * ---------------------------------------------------------------------------- */

if (!function_exists('design_consultation_checkout_url')) {
    /**
     * Build the connected website checkout URL (e.g. Craft commerce) with appointment context.
     *
     * Query parameters use camelCase for parity with existing `appointmentId` usage.
     *
     * @param int $appointment_id Internal appointment primary key.
     * @param string $associate_first_name Provider (associate) given name; omitted from the query when empty.
     * @param string $associate_last_name Provider (associate) family name; omitted from the query when empty.
     */
    function design_consultation_checkout_url(
        int $appointment_id,
        string $associate_first_name = '',
        string $associate_last_name = '',
    ): string {
        $base =
            rtrim((string) config('connected_website_url'), '/') .
            (string) config('connected_website_design_consultation_path');

        $params = [
            'appointmentId' => (string) $appointment_id,
        ];

        if ($associate_first_name !== '') {
            $params['associateFirstName'] = $associate_first_name;
        }

        if ($associate_last_name !== '') {
            $params['associateLastName'] = $associate_last_name;
        }

        return $base . '?' . http_build_query($params, '', '&', PHP_QUERY_RFC3986);
    }
}
