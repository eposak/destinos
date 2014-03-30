<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Nuevo Usuario'); ?></legend>
        <?php echo $this->Form->input('username', array('label' => 'Nombre de usuario'));
        echo $this->Form->input('password', array('label' => 'Password'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>