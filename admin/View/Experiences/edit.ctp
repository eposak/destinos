<div class="experiences form">
<?php echo $this->Form->create('Experience'); ?>
	<fieldset>
		<legend><?php echo __('Editar Experienia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array('label' => 'Título'));
		echo $this->Form->input('description', array('label' => 'Descripción'));
		echo $this->Form->input('picture', array('label' => 'Foto'));
		echo $this->Form->input('days', array('label' => 'Días'));
		echo $this->Form->input('nights', array('label' => 'Noches'));
		echo $this->Form->input('departure', array('label' => 'Salida'));
		echo $this->Form->input('arrival', array('label' => 'Llegada'));
		echo $this->Form->input('location_id', array('label' => 'Destino'));
		echo $this->Form->input('entrepreneur_id', array('label' => 'Emprendedor'));
		echo $this->Form->input('Booking', array('label' => 'Reserva'));
		echo $this->Form->input('Photo', array('label' => 'Foto'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Experience.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Experience.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Experiencia'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Destino'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Destino'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Emprendedor'), array('controller' => 'entrepreneurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Emprrendedor'), array('controller' => 'entrepreneurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Itinerarios'), array('controller' => 'itineraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Itinerario'), array('controller' => 'itineraries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Reservas'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Reservas'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Fotos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Foto'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
