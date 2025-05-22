<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BookingPeriod $bookingPeriod
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Booking Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bookingPeriods form content">
            <?= $this->Form->create($bookingPeriod) ?>
            <fieldset>
                <legend><?= __('Add Booking Period') ?></legend>
                <?php
                    echo $this->Form->control('booking_period_name');
                    echo $this->Form->control('booking_period_order');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
