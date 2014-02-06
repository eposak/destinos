<div class="experiences form">
<?php echo $this->Form->create('Experience'); ?>
	<fieldset>
		<legend><?php echo __('Add Experience'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('picture');
		echo $this->Form->input('days');
		echo $this->Form->input('nights');
		echo $this->Form->input('departure');
		echo $this->Form->input('arrival');
		echo $this->Form->input('location_id');
		echo $this->Form->input('entrepreneur_id');
		echo $this->Form->input('Booking');
		echo $this->Form->input('Photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Experiences'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Entrepreneurs'), array('controller' => 'entrepreneurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Entrepreneur'), array('controller' => 'entrepreneurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Itineraries'), array('controller' => 'itineraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Itinerary'), array('controller' => 'itineraries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Photos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
