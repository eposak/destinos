<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('user'); ?>
    <fieldset>
        <legend>
            <?php echo __('Ingrese su nombre de usuario y password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Entrar')); ?>
</div>