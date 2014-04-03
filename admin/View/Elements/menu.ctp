<h3><?php echo __('Administrar'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Destinos'), array('controller' => 'locations', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Reservas'), array('controller' => 'bookings', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Experiencias'), array('controller' => 'experiences', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Emprendedores'), array('controller' => 'entrepreneurs', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Agregar Nuevo'), array('action' => 'add'));?></li>
	</ul>