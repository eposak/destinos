<div class="experiences view">
<h2><?php echo __('Experiencia'); ?></h2>
	<dl>
            <dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['picture']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dias'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Noches'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['nights']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salida'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['departure']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Llegada'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['arrival']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Destino'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Location']['title'], array('controller' => 'locations', 'action' => 'view', $experience['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emprendedor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($experience['Entrepreneur']['firstname'], array('controller' => 'entrepreneurs', 'action' => 'view', $experience['Entrepreneur']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($experience['Experience']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Menú'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Experiencia'), array('action' => 'edit', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Experiencia'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Experiencias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Experiencia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Destino'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Destino'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Emprendedor'), array('controller' => 'entrepreneurs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Emprendedor'), array('controller' => 'entrepreneurs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Itinerarios'), array('controller' => 'itineraries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nuevo Itinerario'), array('controller' => 'itineraries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Reservas'), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Reserva'), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Lista Fotos'), array('controller' => 'photos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Foto'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Itineraries'); ?></h3>
	<?php if (!empty($experience['Itinerary'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Picture'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Stage'); ?></th>
		<th><?php echo __('Experience Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($experience['Itinerary'] as $itinerary): ?>
		<tr>
			<td><?php echo $itinerary['id']; ?></td>
			<td><?php echo $itinerary['title']; ?></td>
			<td><?php echo $itinerary['description']; ?></td>
			<td><?php echo $itinerary['picture']; ?></td>
			<td><?php echo $itinerary['type']; ?></td>
			<td><?php echo $itinerary['stage']; ?></td>
			<td><?php echo $itinerary['experience_id']; ?></td>
			<td><?php echo $itinerary['created']; ?></td>
			<td><?php echo $itinerary['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'itineraries', 'action' => 'view', $itinerary['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'itineraries', 'action' => 'edit', $itinerary['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'itineraries', 'action' => 'delete', $itinerary['id']), null, __('Are you sure you want to delete # %s?', $itinerary['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Itinerary'), array('controller' => 'itineraries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Bookings'); ?></h3>
	<?php if (!empty($experience['Booking'])): ?>
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
	<?php foreach ($experience['Booking'] as $booking): ?>
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
<div class="related">
	<h3><?php echo __('Related Photos'); ?></h3>
	<?php if (!empty($experience['Photo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Filename'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($experience['Photo'] as $photo): ?>
		<tr>
			<td><?php echo $photo['id']; ?></td>
			<td><?php echo $photo['filename']; ?></td>
			<td><?php echo $photo['description']; ?></td>
			<td><?php echo $photo['created']; ?></td>
			<td><?php echo $photo['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'photos', 'action' => 'view', $photo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'photos', 'action' => 'edit', $photo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'photos', 'action' => 'delete', $photo['id']), null, __('Are you sure you want to delete # %s?', $photo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Photo'), array('controller' => 'photos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
