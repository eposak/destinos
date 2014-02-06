<div class="lenders view">
<h2><?php echo __('Lender'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Document'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['document']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Balance'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['balance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bio'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['bio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Picture'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['picture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Employee'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['employee']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Uid'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['facebook_uid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Username'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['facebook_username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Facebook Access Token'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['facebook_access_token']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reference Id'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['reference_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($lender['Lender']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lender'), array('action' => 'edit', $lender['Lender']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lender'), array('action' => 'delete', $lender['Lender']['id']), null, __('Are you sure you want to delete # %s?', $lender['Lender']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lenders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lender'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($lender['Booking'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Firstname'); ?></th>
		<th><?php echo __('Lastname'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Guests'); ?></th>
		<th><?php echo __('Comments'); ?></th>
		<th><?php echo __('Lender Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lender['Booking'] as $booking): ?>
		<tr>
			<td><?php echo $booking['id']; ?></td>
			<td><?php echo $booking['firstname']; ?></td>
			<td><?php echo $booking['lastname']; ?></td>
			<td><?php echo $booking['phone']; ?></td>
			<td><?php echo $booking['email']; ?></td>
			<td><?php echo $booking['guests']; ?></td>
			<td><?php echo $booking['comments']; ?></td>
			<td><?php echo $booking['lender_id']; ?></td>
			<td><?php echo $booking['created']; ?></td>
			<td><?php echo $booking['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bookings', 'action' => 'view', $booking['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bookings', 'action' => 'edit', $booking['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bookings', 'action' => 'delete', $booking['id']), null, __('Are you sure you want to delete # %s?', $booking['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Booking'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
