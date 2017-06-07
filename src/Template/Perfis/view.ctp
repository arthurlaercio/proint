<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfi'), ['action' => 'edit', $perfi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfi'), ['action' => 'delete', $perfi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfis view large-9 medium-8 columns content">
    <h3><?= h($perfi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($perfi->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($perfi->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perfi->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($perfi->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado Por') ?></th>
            <td><?= $this->Number->format($perfi->modificado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($perfi->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($perfi->modified) ?></td>
        </tr>
    </table>
</div>
