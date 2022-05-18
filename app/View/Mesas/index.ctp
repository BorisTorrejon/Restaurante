<h2>Mesas</h2>
<?php echo $this->Html->link(
    'Crear Mesa',
    array(
        'controller' => 'mesas',
        'action' => 'add'
    )
); ?>
<table>
    <thead>
        <tr>
            <td>Serie</td>
            <td>Puestos</td>
            <td>Posicion</td>
            <td>Creado</td>
            <td>Modificado</td>
            <td>Responsable</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mesas as $mesa) : ?>
        <tr>
            <td><?php echo $mesa['Mesa']['serie']; ?></td>
            <td><?php echo $mesa['Mesa']['puestos']; ?></td>
            <td><?php echo $mesa['Mesa']['posicion']; ?></td>
            <td><?php echo $this->Time->format('d-m-Y ; h:i A', $mesa['Mesa']['created']); ?></td>
            <td><?php echo $this->Time->format('d-m-Y ; h:i A', $mesa['Mesa']['modified']); ?></td>
            <td><?php echo $this->Html->link(
                        $mesa['Mesero']['surname'] . ' ' . $mesa['Mesero']['name'],
                        array(
                            'controller' => 'meseros',
                            'action' => 'view',
                            $mesa['Mesero']['id']
                        )
                    ); ?></td>
            <td><?php echo $this->Html->link(
                        'Editar',
                        array(
                            'controller' => 'mesas',
                            'action' => 'edit',
                            $mesa['Mesa']['id']
                        )
                    ) .
                        " " .
                        $this->Html->link(
                            'Delete',
                            array(
                                'controller' => 'mesas',
                                'action' => 'delete',
                                $mesa['Mesa']['id']
                            )
                        ); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<pre>
    <?php print_r($mesas[0]) ?>
</pre>