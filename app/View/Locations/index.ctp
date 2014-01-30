<?php
/* @var $this View */
/* @var $this->Html HtmlHelper */
/* @var $this->Form FormHelper */
?>

<?php echo $this->Html->link('Nuevo destino', array('controller' => 'locations', 'action' => 'add')); ?>

<table>
    
    <th>
        Nombre
    </th>
    <th>
        Desc
    </th>

<?php foreach($destinos as $d) { ?>
    <tr>
        <td><?php echo $d['Location']['title'];?></td>
        <td><?php echo $d['Location']['description'];?></td>
    </tr>
<?php } ?>

    
    </table>
