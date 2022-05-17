<h2>Lista de Meseros</h2>
<?php echo $this->Html->link(
    'Crear Mesero',
    array(
        'controller' => 'meseros',
        'action' => 'add'
    )
); ?>
<table>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Acciones</td>
    </tr>
    <?php foreach ($meseros as $mesero) : ?>
    <tr>
        <td><?php echo $mesero['Mesero']['id']; ?></td>
        <td><?php echo $mesero['Mesero']['name']; ?></td>
        <td><?php echo $mesero['Mesero']['surname']; ?></td>
        <td><?php echo $this->Html->link(
                    'Detalle',
                    array(
                        'controller' => 'meseros',
                        'action' => 'view',
                        $mesero['Mesero']['id']
                    )
                ); ?>

            <?php echo $this->Html->link(
                    'Editar',
                    array(
                        'controller' => 'meseros',
                        'action' => 'edit',
                        $mesero['Mesero']['id']
                    )
                ); ?>
            <?php echo $this->Form->postLink(
                    'Eliminar',
                    array(
                        'action' => 'delete',
                        $mesero['Mesero']['id']
                    ),
                    array(
                        'confirm' => 'Eliminar a ' . $mesero['Mesero']['name'] . '?'
                    )
                ); ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>