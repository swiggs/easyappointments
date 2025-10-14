<?php extend('layouts/message_layout'); ?>

<?php section('content'); ?>

<div class="mb-5 text-start">
    <h3 class="mb-5"><?= lang('appointment_registered') ?></h3>

    <p>
        <?= lang('appointment_details_was_sent_to_you') ?>
    </p>

    <p class="mb-5 text-muted"><?= lang('check_spam_folder') ?></p>

    <div class="d-flex align-items-center gap-2">
        <a href="<?= vars('add_to_google_url') ?>" id="add-to-google-calendar" class="btn btn-primary" target="_blank">
            <?= lang('add_to_google_calendar') ?>
        </a>
        <a href="<?= site_url() ?>">
            <?= lang('go_to_booking_page') ?>
        </a>
    </div>
</div>

<?php end_section('content'); ?>

<?php section('scripts'); ?>

<?php component('google_analytics_script', ['google_analytics_code' => vars('google_analytics_code')]); ?>
<?php component('matomo_analytics_script', [
    'matomo_analytics_url' => vars('matomo_analytics_url'),
    'matomo_analytics_site_id' => vars('matomo_analytics_site_id'),
]); ?>

<?php end_section('scripts'); ?>
