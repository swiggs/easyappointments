<?php extend('layouts/message_layout'); ?>

<?php section('content'); ?>


<div class="mb-5 text-start">
    <h4 class="mb-5"><?= lang('appointment_cancelled_title') ?></h4>

    <p class="mb-5">
        <?= lang('appointment_cancelled') ?>
    </p>

    <a href="<?= site_url() ?>" class="btn btn-primary btn-large">
        <?= lang('go_to_booking_page') ?>
    </a>
</div>

<?php end_section('content'); ?>

<?php section('scripts'); ?>

<?php component('google_analytics_script', ['google_analytics_code' => vars('google_analytics_code')]); ?>
<?php component('matomo_analytics_script', [
    'matomo_analytics_url' => vars('matomo_analytics_url'),
    'matomo_analytics_site_id' => vars('matomo_analytics_site_id'),
]); ?>
<?php end_section('scripts'); ?>

