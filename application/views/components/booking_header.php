<?php
/**
 * Local variables.
 *
 * @var string $company_name
 */
?>

<div id="header">
    <div id="company-logo">
      <a href="<?= setting('company_link') ?>"><img src="<?= vars('company_logo') ?: base_url('assets/img/logo.png') ?>" alt="logo"></a>
    </div>
    <div  class="d-flex flex-column flex-sm-row justify-content-center justify-content-sm-between align-items-center">
        <div id="company-name">
          <span class="display-booking-selection">
              <?= lang('service') ?> │ <?= lang('provider') ?>
          </span>
        </div>
    
        <div id="steps" class="d-flex flex-row justify-content-end">
            <div id="step-1" class="book-step active-step"
                data-tippy-content="<?= lang('service_and_provider') ?>">
                <strong>1</strong>
            </div>
    
            <div id="step-2" class="book-step" data-bs-toggle="tooltip"
                data-tippy-content="<?= lang('appointment_date_and_time') ?>">
                <strong>2</strong>
            </div>
            <div id="step-3" class="book-step" data-bs-toggle="tooltip"
                data-tippy-content="<?= lang('customer_information') ?>">
                <strong>3</strong>
            </div>
            <div id="step-4" class="book-step" data-bs-toggle="tooltip"
                data-tippy-content="<?= lang('appointment_confirmation') ?>">
                <strong>4</strong>
            </div>
        </div>
    </div>
</div>
