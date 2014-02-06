<div class="lenders form">
<?php echo $this->Form->create('Lender'); ?>
	<fieldset>
		<legend><?php echo __('Add Lender'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('email');
		echo $this->Form->input('document');
		echo $this->Form->input('balance');
		echo $this->Form->input('phone');
		echo $this->Form->input('bio');
		echo $this->Form->input('picture');
		echo $this->Form->input('employee');
		echo $this->Form->input('facebook_uid');
		echo $this->Form->input('facebook_username');
		echo $this->Form->input('facebook_access_token');
		echo $this->Form->input('status');
		echo $this->Form->input('password');
		echo $this->Form->input('code');
		echo $this->Form->input('reference_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Lenders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
