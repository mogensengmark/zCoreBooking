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
            <?= $this->Html->link(__('Edit Booking Period'), ['action' => 'edit', $bookingPeriod->booking_period_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Booking Period'), ['action' => 'delete', $bookingPeriod->booking_period_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookingPeriod->booking_period_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Booking Periods'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Booking Period'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bookingPeriods view content">
            <h3><?= h($bookingPeriod->booking_period_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Booking Period Name') ?></th>
                    <td><?= h($bookingPeriod->booking_period_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booking Period Id') ?></th>
                    <td><?= $this->Number->format($bookingPeriod->booking_period_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Booking Period Order') ?></th>
                    <td><?= $bookingPeriod->booking_period_order === null ? '' : $this->Number->format($bookingPeriod->booking_period_order) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>