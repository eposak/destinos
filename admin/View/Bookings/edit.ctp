<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Editar Reservas'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('firstname', array('label' => 'Nombre'));
		echo $this->Form->input('lastname', array('label' => 'Apellido'));
		echo $this->Form->input('phone', array('label' => 'Telefono'));
		echo $this->Form->input('email', array('label' => 'Correo'));
		echo $this->Form->input('guests', array('label' => 'Acompañantes'));
		echo $this->Form->input('comments', array('label' => 'Comentarios'));
		echo $this->Form->input('lender_id', array('label' => 'lender_id'));
		echo $this->Form->input('Experience', array('label' => 'Experiencia'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Booking.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Booking.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Reservas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Lenders'), array('controller' => 'lenders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Lender'), array('controller' => 'lenders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Eventos'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Evento'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Experiencia'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Experiencia'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
