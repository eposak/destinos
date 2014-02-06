<div class="lenders index">
	<h2><?php echo __('Lenders'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('document'); ?></th>
			<th><?php echo $this->Paginator->sort('balance'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('bio'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th><?php echo $this->Paginator->sort('employee'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_uid'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_username'); ?></th>
			<th><?php echo $this->Paginator->sort('facebook_access_token'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('reference_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lenders as $lender): ?>
	<tr>
		<td><?php echo h($lender['Lender']['id']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['email']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['document']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['balance']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['phone']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['bio']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['picture']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['employee']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['facebook_uid']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['facebook_username']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['facebook_access_token']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['status']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['password']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['code']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['reference_id']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['created']); ?>&nbsp;</td>
		<td><?php echo h($lender['Lender']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lender['Lender']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lender['Lender']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lender['Lender']['id']), null, __('Are you sure you want to delete # %s?', $lender['Lender']['id'])); ?>
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
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lender'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
