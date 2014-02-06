<div class="bookings view">
<h2><?php echo __('Booking'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Firstname'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['firstname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lastname'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['lastname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guests'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['guests']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lender'); ?></dt>
		<dd>
			<?php echo $this->Html->link($booking['Lender']['firstname'], array('controller' => 'lenders', 'action' => 'view', $booking['Lender']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($booking['Booking']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Booking'), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Booking'), array('action' => 'delete', $booking['Booking']['id']), null, __('Are you sure you want to delete # %s?', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bookings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Booking'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lenders'), array('controller' => 'lenders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lender'), array('controller' => 'lenders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Experiences'), array('controller' => 'experiences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Events'); ?></h3>
	<?php if (!empty($booking['Event'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Booking Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($booking['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['type']; ?></td>
			<td><?php echo $event['description']; ?></td>
			<td><?php echo $event['booking_id']; ?></td>
			<td><?php echo $event['created']; ?></td>
			<td><?php echo $event['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), null, __('Are you sure you want to delete # %s?', $event['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Experiences'); ?></h3>
	<?php if (!empty($booking['Experience'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Days'); ?></th>
		<th><?php echo __('Nights'); ?></th>
		<th><?php echo __('Departure'); ?></th>
		<th><?php echo __('Arrival'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Entrepreneur Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($booking['Experience'] as $experience): ?>
		<tr>
			<td><?php echo $experience['id']; ?></td>
			<td><?php echo $experience['title']; ?></td>
			<td><?php echo $experience['description']; ?></td>
			<td><?php echo $experience['picture']; ?></td>
			<td><?php echo $experience['days']; ?></td>
			<td><?php echo $experience['nights']; ?></td>
			<td><?php echo $experience['departure']; ?></td>
			<td><?php echo $experience['arrival']; ?></td>
			<td><?php echo $experience['location_id']; ?></td>
			<td><?php echo $experience['entrepreneur_id']; ?></td>
			<td><?php echo $experience['created']; ?></td>
			<td><?php echo $experience['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'experiences', 'action' => 'view', $experience['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'experiences', 'action' => 'edit', $experience['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'experiences', 'action' => 'delete', $experience['id']), null, __('Are you sure you want to delete # %s?', $experience['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Experience'), array('controller' => 'experiences', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
