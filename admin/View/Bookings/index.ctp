<div class="bookings index">
	<h2><?php echo __('Reservas'); ?></h2>     
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname','Nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname','Apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('phone','Telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email','Correo'); ?></th>
			<th><?php echo $this->Paginator->sort('guests','Personas'); ?></th>
			<th><?php echo $this->Paginator->sort('comments','Comentarios'); ?></th>
                        <th><?php echo $this->Paginator->sort('lender_id',''); ?></th>
			<th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modified','Modificado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bookings as $booking): ?>
	<tr>
		<td><?php echo h($booking['Booking']['id']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['phone']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['email']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['guests']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['comments']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($booking['Lender']['firstname'], array('controller' => 'lenders', 'action' => 'view', $booking['Lender']['id'])); ?>
		</td>
		<td><?php echo h($booking['Booking']['created']); ?>&nbsp;</td>
		<td><?php echo h($booking['Booking']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $booking['Booking']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $booking['Booking']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $booking['Booking']['id']), null, __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?>
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
    <?php echo $this->element('Menu'); ?>
</div>
<div class="actions">
    <h1><?php echo __('Sub Menú'); ?></h1>
    <h1><?php echo $this->Html->link('Nuevo', array('action' => 'add'));?></h1>
    <h1>    </h1>
    <h1><?php echo $this->Html->link('Salir', array('action' => ' '));?></h1>
</div>
