<?php
/* @var $this View */
/* @var $this->Html HtmlHelper */
/* @var $this->Form FormHelper */
?>


<h1>Crear destino</h1>

<?php echo $this->Form->create('Location'); ?>

<?php echo $this->Form->input('title', array('label' => 'Nombre del destino')); ?>
<?php echo $this->Form->input('description', array('label' => 'Descripcion')); ?>

<?php echo $this->Form->submit('Aceptar');?>

<?php echo $this->Form->end(); ?>