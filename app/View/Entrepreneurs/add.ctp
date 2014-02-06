<div class="entrepreneurs form">
<?php echo $this->Form->create('Entrepreneur'); ?>
	<fieldset>
		<legend><?php echo __('Add Entrepreneur'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('gender');
		echo $this->Form->input('picture');
		echo $this->Form->input('slug');
		echo $this->Form->input('description');
		echo $this->Form->input('phone1');
		echo $this->Form->input('phone2');
		echo $this->Form->input('email');
		echo $this->Form->input('website');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Entrepreneurs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
