<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Nuevo Destino'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Nombre del destino'));
		echo $this->Form->input('description', array('label' => 'Descripcion'));
		echo $this->Form->input('picture', array('label' => 'Foto'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<?php echo $this->element('menu'); ?>
</div>
