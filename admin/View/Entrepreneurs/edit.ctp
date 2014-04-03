<div class="entrepreneurs form">
<?php echo $this->Form->create('Entrepreneur'); ?>
	<fieldset>
		<legend><?php echo __('Editar Emprendedor'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('firstname', array('label' => 'Nombre'));
		echo $this->Form->input('lastname', array('label' => ''));
		echo $this->Form->input('gender', array('label' => 'Genero'));
		echo $this->Form->input('picture', array('label' => 'Foto'));
		echo $this->Form->input('slug', array('label' => ''));
		echo $this->Form->input('description', array('label' => 'Descripción'));
		echo $this->Form->input('phone1', array('label' => 'Telefono 1'));
		echo $this->Form->input('phone2', array('label' => 'Telefono 2'));
		echo $this->Form->input('email', array('label' => 'Correo'));
		echo $this->Form->input('website');
		echo $this->Form->input('address', array('label' => 'Dirección'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Entrepreneur.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Entrepreneur.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Emprededor'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Experiencia'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Experiencia'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>

