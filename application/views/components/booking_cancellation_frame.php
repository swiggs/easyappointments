<?php
/**
 * Local variables.
 *
 * @var bool $manage_mode
 * @var array $appointment_data
 * @var bool $display_delete_personal_information
 */
?>

<?php if ($manage_mode): ?>
  <div id="cancel-appointment-frame">
      <div class="d-flex flex-column flex-sm-row gap-3 justify-content-between align-items-center booking-header-bar">
      <div><?= lang('cancel_appointment_hint') ?></div>
          <form class="" id="cancel-appointment-form" method="post"
                action="<?= site_url('booking_cancellation/of/' . $appointment_data['hash']) ?>">

              <input id="hidden-cancellation-reason" name="cancellation_reason" type="hidden">

              <button id="cancel-appointment" class="btn btn-outline-light">
                  <?= lang('cancel_appointment') ?>
              </button>
          </form>
      </div>
  </div>
  <?php if ($display_delete_personal_information): ?>
  <div id="delete-personal-info-frame">
    <div class="d-flex flex-column flex-sm-row gap-3 justify-content-between align-items-center booking-header-bar">
        <div><?= lang('delete_personal_information_hint') ?></div>
        <button id="delete-personal-information" class="btn btn-outline-primary">
            <?= lang('delete') ?>
        </button>
    </div>
  </div>
  <?php endif; ?>
<?php endif; ?>
