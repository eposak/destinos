<div class="bookings form">
<?php echo $this->Form->create('Booking'); ?>
	<fieldset>
		<legend><?php echo __('Add Booking'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('guests');
		echo $this->Form->input('comments');
		echo $this->Form->input('lender_id');
		echo $this->Form->input('Experience');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <?php echo $this->element('menu'); ?>
</div>
