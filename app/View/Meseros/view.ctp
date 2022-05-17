<h2>Detalle del mesero <?php echo $mesero['Mesero']['name'] . " " . $mesero['Mesero']['surname']; ?></h2>

<p><strong>DNI: </strong><?php echo $mesero['Mesero']['dni']; ?></p>
<p><strong>Telefono: </strong><?php echo $mesero['Mesero']['phone']; ?></p>
<p><strong>Creado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['created']); ?></p>
<p><strong>Modificado: </strong><?php echo $this->Time->format('d-m-Y ; h:i A', $mesero['Mesero']['modified']); ?></p>
<h3>Encargado de las mesas: </h3>
<?php if (empty($mesero['Mesa'])) : ?>
<p>No hay mesas asignadas</p>
<?php else : ?>
<table>
    <thead>
        <tr>
            <td>Serie</td>
            <td>Puesto</td>
            <td>Posicion</td>
            <td>Creado</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mesero['Mesa'] as $mesa) : ?>
        <tr>
            <td><?php echo $mesa['serie']; ?></td>
            <td><?php echo $mesa['puestos']; ?></td>
            <td><?php echo $mesa['posicion']; ?></td>
            <td><?php echo $mesa['created']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php endif; ?>
<?php echo $this->Html->link('Volver a lista de meseros', array('controller' => 'meseros', 'action' => 'index')) ?>