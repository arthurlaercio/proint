<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Perfis'), ['controller' => 'Perfis', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfi'), ['controller' => 'Perfis', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Atividades'), ['controller' => 'Atividades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Atividade'), ['controller' => 'Atividades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login') ?></th>
            <td><?= h($user->login) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($user->senha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($user->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $user->has('curso') ? $this->Html->link($user->curso->id, ['controller' => 'Cursos', 'action' => 'view', $user->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Perfi') ?></th>
            <td><?= $user->has('perfi') ? $this->Html->link($user->perfi->id, ['controller' => 'Perfis', 'action' => 'view', $user->perfi->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($user->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado Por') ?></th>
            <td><?= $this->Number->format($user->modificado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data Nascimento') ?></th>
            <td><?= h($user->data_nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Atividades') ?></h4>
        <?php if (!empty($user->atividades)): ?>
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
            <?php foreach ($user->atividades as $atividades): ?>
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
