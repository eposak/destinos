<div class="locations index">
	<h2><?php echo __('Locations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('longdesc'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			<th><?php echo $this->Paginator->sort('picture'); ?></th>
			<th><?php echo $this->Paginator->sort('latude'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('map'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($locations as $location): ?>
	<tr>
		<td><?php echo h($location['Location']['id']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['title']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['description']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['longdesc']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['address']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['country']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['state']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['slug']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['picture']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['latude']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['map']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['created']); ?>&nbsp;</td>
		<td><?php echo h($location['Location']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $location['Location']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $location['Location']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?></li>
	</ul>
</div>
