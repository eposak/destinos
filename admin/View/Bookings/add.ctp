<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Nueva Reserva'); ?></legend>
	<?php
		echo $this->Form->input('firstname', array('label' => 'Nombre'));
		echo $this->Form->input('lastname', array('label' => 'Apellido'));
		echo $this->Form->input('phone', array('label' => 'Telefono'));
		echo $this->Form->input('email', array('label' => 'Correo'));
		echo $this->Form->input('guests', array('label' => 'Nro. Pers.'));
		echo $this->Form->input('comments', array('label' => 'Comentario'));
		echo $this->Form->input('lender_id');
		echo $this->Form->input('Experience', array('label' => 'Experiencia'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
    <?php echo $this->element('menu'); ?>
</div>
