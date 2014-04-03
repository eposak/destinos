<div class="entrepreneurs view">
<h2><?php echo __('Emprendedor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['picture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tlf'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['phone1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tlf'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['phone2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($entrepreneur['Entrepreneur']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Emprendedor'), array('action' => 'edit', $entrepreneur['Entrepreneur']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Emprendedor'), array('action' => 'delete', $entrepreneur['Entrepreneur']['id']), null, __('Are you sure you want to delete # %s?', $entrepreneur['Entrepreneur']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Emprendedor'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Emprendedor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Experiencia'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Experiencia'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
