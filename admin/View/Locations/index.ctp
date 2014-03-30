<div class="locations index">
    <h2><?php echo __('Lista de Destinos'); ?></h2>
    <div class="actions"><?php echo $this->Html->link('Nuevo', array('action' => 'add'));?></div>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th> <?php echo $this->Paginator->sort('title', 'Nombre'); ?></th>
            <th><?php echo $this->Paginator->sort('description', 'Descripción'); ?></th>
            <th><?php echo $this->Paginator->sort('created', 'Fecha de creación'); ?></th>
            <th><?php echo $this->Paginator->sort('modified', 'Fecha modificación'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($locations as $location): ?>
            <tr>
                <td><?php echo h($location['Location']['title']); ?>&nbsp;</td>
                <td><?php echo h($location['Location']['description']); ?>&nbsp;</td>
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
    <?php echo $this->element('menu'); ?>
</div>
