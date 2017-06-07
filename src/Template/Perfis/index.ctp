<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Perfi'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perfis index large-9 medium-8 columns content">
    <h3><?= __('Perfis') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('criado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modificado_por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perfis as $perfi): ?>
            <tr>
                <td><?= $this->Number->format($perfi->id) ?></td>
                <td><?= h($perfi->nome) ?></td>
                <td><?= h($perfi->alias) ?></td>
                <td><?= $this->Number->format($perfi->criado_por) ?></td>
                <td><?= h($perfi->created) ?></td>
                <td><?= $this->Number->format($perfi->modificado_por) ?></td>
                <td><?= h($perfi->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perfi->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perfi->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perfi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfi->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>