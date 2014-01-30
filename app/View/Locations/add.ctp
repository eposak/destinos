<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Add Location'); ?></legend>
	<?php
		echo $this->Form->input('title', array('label' => 'Nombre del destino'));
		echo $this->Form->input('description');
		echo $this->Form->input('longdesc');
		echo $this->Form->input('address');
		echo $this->Form->input('country');
		echo $this->Form->input('state');
		echo $this->Form->input('slug');
		echo $this->Form->input('picture');
		echo $this->Form->input('latude');
		echo $this->Form->input('longitude');
		echo $this->Form->input('map');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?></li>
	</ul>
</div>