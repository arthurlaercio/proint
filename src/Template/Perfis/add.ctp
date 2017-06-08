<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Perfis'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perfis form large-9 medium-8 columns content">
    <?= $this->Form->create($perfi) ?>
    <fieldset>
        <legend><?= __('Add Perfi') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('alias');
            echo $this->Form->control('criado_por');
            echo $this->Form->control('modificado_por');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
