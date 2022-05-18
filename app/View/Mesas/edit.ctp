<h2>Editar Mesa</h2>
<?php echo $this->Form->create('Mesa'); ?>
<?php echo $this->Form->input('serie'); ?>
<?php echo $this->Form->input('puestos'); ?>
<?php echo $this->Form->input('posicion'); ?>
<?php echo $this->Html->link(
    'Volver a la lista de Mesas',
    array(
        'action' => 'index'
    )
) ?>