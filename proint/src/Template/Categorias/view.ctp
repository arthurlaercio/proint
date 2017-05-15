<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categorias view large-9 medium-8 columns content">
    <h3><?= h($categoria->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($categoria->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($categoria->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $categoria->has('curso') ? $this->Html->link($categoria->curso->id, ['controller' => 'Cursos', 'action' => 'view', $categoria->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoria->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidad Hora Minima') ?></th>
            <td><?= $this->Number->format($categoria->quantidad_hora_minima) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidad Hora Maxima') ?></th>
            <td><?= $this->Number->format($categoria->quantidad_hora_maxima) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($categoria->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado Por') ?></th>
            <td><?= $this->Number->format($categoria->modificado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($categoria->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($categoria->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Atividades') ?></h4>
        <?php if (!empty($categoria->atividades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Upload') ?></th>
                <th scope="col"><?= __('Criado Por') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modificado Por') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoria->atividades as $atividades): ?>
            <tr>
                <td><?= h($atividades->id) ?></td>
                <td><?= h($atividades->nome) ?></td>
                <td><?= h($atividades->descricao) ?></td>
                <td><?= h($atividades->categoria_id) ?></td>
                <td><?= h($atividades->user_id) ?></td>
                <td><?= h($atividades->upload) ?></td>
                <td><?= h($atividades->criado_por) ?></td>
                <td><?= h($atividades->created) ?></td>
                <td><?= h($atividades->modificado_por) ?></td>
                <td><?= h($atividades->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Atividades', 'action' => 'view', $atividades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Atividades', 'action' => 'edit', $atividades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Atividades', 'action' => 'delete', $atividades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $atividades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
