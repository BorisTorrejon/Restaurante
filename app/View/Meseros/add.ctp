<h2>Crear Mesero</h2>
<?php
echo $this->Form->create('Mesero');
echo $this->Form->input('dni');
echo $this->Form->input('name');
echo $this->Form->input('surname');
echo $this->Form->input('phone');
echo $this->Form->end('Crear Mesero');
echo $this->Html->link('Volver a lista de meseros', array('controller' => 'meseros', 'action' => 'index'));
?>