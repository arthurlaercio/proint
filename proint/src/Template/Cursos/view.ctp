<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Categorias'), ['controller' => 'Categorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Categoria'), ['controller' => 'Categorias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cursos Categorias'), ['controller' => 'CursosCategorias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cursos Categoria'), ['controller' => 'CursosCategorias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cursos view large-9 medium-8 columns content">
    <h3><?= h($curso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($curso->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($curso->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Periodo') ?></th>
            <td><?= $this->Number->format($curso->quantidade_periodo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade Hora Complementar') ?></th>
            <td><?= $this->Number->format($curso->quantidade_hora_complementar) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Criado Por') ?></th>
            <td><?= $this->Number->format($curso->criado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modificado Por') ?></th>
            <td><?= $this->Number->format($curso->modificado_por) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($curso->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($curso->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Categorias') ?></h4>
        <?php if (!empty($curso->categorias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Quantidad Hora Minima') ?></th>
                <th scope="col"><?= __('Quantidad Hora Maxima') ?></th>
                <th scope="col"><?= __('Criado Por') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modificado Por') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->categorias as $categorias): ?>
            <tr>
                <td><?= h($categorias->id) ?></td>
                <td><?= h($categorias->nome) ?></td>
                <td><?= h($categorias->descricao) ?></td>
                <td><?= h($categorias->quantidad_hora_minima) ?></td>
                <td><?= h($categorias->quantidad_hora_maxima) ?></td>
                <td><?= h($categorias->criado_por) ?></td>
                <td><?= h($categorias->created) ?></td>
                <td><?= h($categorias->modificado_por) ?></td>
                <td><?= h($categorias->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categorias', 'action' => 'view', $categorias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categorias', 'action' => 'edit', $categorias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categorias', 'action' => 'delete', $categorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($curso->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Login') ?></th>
                <th scope="col"><?= __('Senha') ?></th>
                <th scope="col"><?= __('Cpf') ?></th>
                <th scope="col"><?= __('Curso Id') ?></th>
                <th scope="col"><?= __('Perfil Id') ?></th>
                <th scope="col"><?= __('Data Nascimento') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Criado Por') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modificado Por') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->nome) ?></td>
                <td><?= h($users->login) ?></td>
                <td><?= h($users->senha) ?></td>
                <td><?= h($users->cpf) ?></td>
                <td><?= h($users->curso_id) ?></td>
                <td><?= h($users->perfil_id) ?></td>
                <td><?= h($users->data_nascimento) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->criado_por) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modificado_por) ?></td>
                <td><?= h($users->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cursos Categorias') ?></h4>
        <?php if (!empty($curso->cursos_categorias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Curso Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->cursos_categorias as $cursosCategorias): ?>
            <tr>
                <td><?= h($cursosCategorias->id) ?></td>
                <td><?= h($cursosCategorias->curso_id) ?></td>
                <td><?= h($cursosCategorias->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CursosCategorias', 'action' => 'view', $cursosCategorias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CursosCategorias', 'action' => 'edit', $cursosCategorias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CursosCategorias', 'action' => 'delete', $cursosCategorias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cursosCategorias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
