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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $poststest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $poststest->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Poststest'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="poststest form content">
            <?= $this->Form->create($poststest) ?>
            <fieldset>
                <legend><?= __('Edit Poststest') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('description');
                    echo $this->Form->control('doby');
                    echo $this->Form->control('published');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
