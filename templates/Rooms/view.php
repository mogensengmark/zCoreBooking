<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Room $room
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Room'), ['action' => 'edit', $room->room_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Room'), ['action' => 'delete', $room->room_id], ['confirm' => __('Are you sure you want to delete # {0}?', $room->room_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rooms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Room'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="rooms view content">
            <h3><?= h($room->room_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Room Name') ?></th>
                    <td><?= h($room->room_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Room Id') ?></th>
                    <td><?= $this->Number->format($room->room_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($room->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($room->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>