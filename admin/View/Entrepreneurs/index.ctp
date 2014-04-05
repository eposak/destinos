<div class="entrepreneurs index">
	<h2><?php echo __('Emprendedores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname','Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('picture','Foto'); ?></th>
			<th><?php echo $this->Paginator->sort('description','Descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Correo'); ?></th>
			<th><?php echo $this->Paginator->sort('website','Pagina Web'); ?></th>
			<th><?php echo $this->Paginator->sort('address','Dirección'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($entrepreneurs as $entrepreneur): ?>
	<tr>
		<td><?php echo h($entrepreneur['Entrepreneur']['id']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['picture']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['description']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['email']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['website']); ?>&nbsp;</td>
		<td><?php echo h($entrepreneur['Entrepreneur']['address']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $entrepreneur['Entrepreneur']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $entrepreneur['Entrepreneur']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $entrepreneur['Entrepreneur']['id']), null, __('Are you sure you want to delete # %s?', $entrepreneur['Entrepreneur']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Atras'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Adelante') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
    <?php echo $this->element('menu'); ?>
 </div>
