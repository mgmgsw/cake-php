<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Poststest> $poststest
 */
?>
<div class="poststest index content">
    <?= $this->Html->link(__('New Poststest'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Poststest') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('published') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($poststest as $poststest): ?>
                <tr>
                    <td><?= $this->Number->format($poststest->id) ?></td>
                    <td><?= h($poststest->title) ?></td>
                    <td><?= h($poststest->published) ?></td>
                    <td><?= h($poststest->created) ?></td>
                    <td><?= h($poststest->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $poststest->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $poststest->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $poststest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poststest->id)]) ?>
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
