<h2>Editar Mesero</h2>
<?php echo $this->Form->create('Mesero'); ?>
<?php echo $this->Form->input('dni'); ?>
<?php echo $this->Form->input('name'); ?>
<?php echo $this->Form->input('surname'); ?>
<?php echo $this->Form->input('phone'); ?>
<?php echo $this->Form->end('Editar Mesero'); ?>
<?php echo $this->Html->link('Volver a lista de meseros', array('controller' => 'meseros', 'action' => 'index')) ?>