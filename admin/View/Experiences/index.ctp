<div class="experiences index">
    <h2><?php echo __('Experiencias'); ?></h2>
    <table cellpadding="0" cellspacing="0" >
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('title','Titulo'); ?></th>
            <th><?php echo $this->Paginator->sort('description','Descripcion'); ?></th>
            <th><?php echo $this->Paginator->sort('picture','Foto'); ?></th>
            <th><?php echo $this->Paginator->sort('days','Dias'); ?></th>
            <th><?php echo $this->Paginator->sort('nights','Noches'); ?></th>
            <th><?php echo $this->Paginator->sort('departure','Salida'); ?></th>
            <th><?php echo $this->Paginator->sort('arrival','Llegada'); ?></th>
            <th><?php echo $this->Paginator->sort('location_id','Destino'); ?></th>
            <th><?php echo $this->Paginator->sort('entrepreneur_id','Emprendedor'); ?></th>
            <th><?php echo $this->Paginator->sort('created','Creado'); ?></th>
            <th><?php echo $this->Paginator->sort('modified','Modifidicado'); ?></th>
            <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        <?php foreach ($experiences as $experience): ?>
            <tr>
                <td><?php echo h($experience['Experience']['id']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['title']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['description']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['picture']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['days']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['nights']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['departure']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['arrival']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($experience['Location']['title'], array('controller' => 'locations', 'action' => 'view', $experience['Location']['id'])); ?>
                </td>
                <td>
                    <?php echo $this->Html->link($experience['Entrepreneur']['firstname'], array('controller' => 'entrepreneurs', 'action' => 'view', $experience['Entrepreneur']['id'])); ?>
                </td>
                <td><?php echo h($experience['Experience']['created']); ?>&nbsp;</td>
                <td><?php echo h($experience['Experience']['modified']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Ver'), array('action' => 'view', $experience['Experience']['id'])); ?>
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $experience['Experience']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $experience['Experience']['id']), null, __('Are you sure you want to delete # %s?', $experience['Experience']['id'])); ?>
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
