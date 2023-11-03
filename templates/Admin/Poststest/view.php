<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poststest $poststest
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Poststest'), ['action' => 'edit', $poststest->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Poststest'), ['action' => 'delete', $poststest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poststest->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Poststest'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Poststest'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="poststest view content">
            <h3><?= h($poststest->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($poststest->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($poststest->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($poststest->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($poststest->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Published') ?></th>
                    <td><?= $poststest->published ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($poststest->description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Doby') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($poststest->doby)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
