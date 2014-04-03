<div class="locations form">
<?php echo $this->Form->create('Location'); ?>
	<fieldset>
		<legend><?php echo __('Editar Destino'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array('label' => 'Título'));
		echo $this->Form->input('description', array('label' => 'Descripción'));
		echo $this->Form->input('longdesc', array('label' => 'Comentarios'));
		echo $this->Form->input('address', array('label' => 'Dirección'));
		echo $this->Form->input('country', array('label' => 'Pais'));
		echo $this->Form->input('state', array('label' => 'Estado'));
		echo $this->Form->input('slug');
		echo $this->Form->input('picture', array('label' => 'Foto'));
		echo $this->Form->input('latude', array('label' => 'Latitud'));
		echo $this->Form->input('longitude', array('label' => 'Longitud'));
		echo $this->Form->input('map', array('label' => 'Mapa'));
		echo $this->Form->input('Photo', array('label' => 'Foto'));
		echo $this->Form->input('Video', array('label' => 'Video'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Aceptar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Location.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Location.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Lista Destinos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Lista Experiencia'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Experiencia'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Foto'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Foto'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>
