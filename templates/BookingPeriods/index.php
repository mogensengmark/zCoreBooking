<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\BookingPeriod> $bookingPeriods
 */
?>
<div class="bookingPeriods index content">
    <?= $this->Html->link(__('New Booking Period'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Booking Periods') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('booking_period_id') ?></th>
                    <th><?= $this->Paginator->sort('booking_period_name') ?></th>
                    <th><?= $this->Paginator->sort('booking_period_order') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bookingPeriods as $bookingPeriod): ?>
                <tr>
                    <td><?= $this->Number->format($bookingPeriod->booking_period_id) ?></td>
                    <td><?= h($bookingPeriod->booking_period_name) ?></td>
                    <td><?= $bookingPeriod->booking_period_order === null ? '' : $this->Number->format($bookingPeriod->booking_period_order) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bookingPeriod->booking_period_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookingPeriod->booking_period_id]) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $bookingPeriod->booking_period_id],
                            [
                                'method' => 'delete',
                                'confirm' => __('Are you sure you want to delete # {0}?', $bookingPeriod->booking_period_id),
                            ]
                        ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>