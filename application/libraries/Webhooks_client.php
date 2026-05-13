<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.4.0
 * ---------------------------------------------------------------------------- */

use GuzzleHttp\Client;

/**
 * Webhooks client library.
 *
 * Handles the webhook HTTP related functionality.
 *
 * @package Libraries
 */
class Webhooks_client
{
    /**
     * @var EA_Controller|CI_Controller
     */
    protected EA_Controller|CI_Controller $CI;

    /**
     * Webhook client constructor.
     */
    public function __construct()
    {
        $this->CI = &get_instance();

        $this->CI->load->model('providers_model');
        $this->CI->load->model('secretaries_model');
        $this->CI->load->model('secretaries_model');
        $this->CI->load->model('admins_model');
        $this->CI->load->model('appointments_model');
        $this->CI->load->model('settings_model');
        $this->CI->load->model('webhooks_model');
    }

    /**
     * Trigger the registered webhooks for the provided action.
     *
     * @param string $action Webhook action.
     * @param array $payload Payload data.
     *
     * @return void|null
     */
    public function trigger(string $action, array $payload)
    {
        $payload = $this->enrich_appointment_webhook_payload($action, $payload);

        $webhooks = $this->CI->webhooks_model->get();

        foreach ($webhooks as $webhook) {
            if (str_contains($webhook['actions'], $action)) {
                $this->call($webhook, $action, $payload);
            }
        }
    }

    /**
     * Add associate (provider) display names for appointment webhooks consumed by external systems.
     *
     * @param string $action
     * @param array $payload
     *
     * @return array
     */
    private function enrich_appointment_webhook_payload(string $action, array $payload): array
    {
        if ($action !== WEBHOOK_APPOINTMENT_SAVE && $action !== WEBHOOK_APPOINTMENT_DELETE) {
            return $payload;
        }

        $provider_id = isset($payload['id_users_provider']) ? (int) $payload['id_users_provider'] : 0;

        if ($provider_id <= 0) {
            return $payload;
        }

        try {
            $provider = $this->CI->providers_model->find($provider_id);
        } catch (Throwable) {
            return $payload;
        }

        $payload['associate'] = [
            'first_name' => (string) ($provider['first_name'] ?? ''),
            'last_name' => (string) ($provider['last_name'] ?? ''),
        ];

        return $payload;
    }

    /**
     * Call the provided webhook.
     *
     * @param array $webhook
     * @param string $action
     * @param array $payload
     */
    private function call(array $webhook, string $action, array $payload): void
    {
        try {
            $client = new Client();

            $headers = [];

            if (!empty($webhook['secret_header']) && !empty($webhook['secret_token'])) {
                $headers[$webhook['secret_header']] = $webhook['secret_token'];
            }

            $response = $client->post($webhook['url'], [
                'verify' => $webhook['is_ssl_verified'],
                'headers' => $headers,
                'json' => [
                    'action' => $action,
                    'payload' => $payload,
                ],
            ]);

            // echo $response->getBody()->getContents(); // Use this for quick debugging
        } catch (Throwable $e) {
            log_message(
                'error',
                'Webhooks Client - The webhook (' .
                    ($webhook['id'] ?? null) .
                    ') request received an unexpected exception: ' .
                    $e->getMessage(),
            );
            log_message('error', $e->getTraceAsString());
        }
    }
}
