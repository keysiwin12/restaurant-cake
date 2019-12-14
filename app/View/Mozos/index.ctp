<h2>Lista de  Mozos</h2>
<?= $this->Html->link('Crear Mozo',array('controller' =>'Mozos',
    'action'=>'agregar'));
?>
<table>
    <thead>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Apellidos</td>
            <td>Acciones</td>
        </tr>
    </thead>

    <tbody>
        <?php foreach($mozos as $mozo): ?>
        <tr>
            <td><?= $mozo['Mozo']['id'] ?></td>
            <td><?= $mozo['Mozo']['nombre'] ?></td>
            <td><?= $mozo['Mozo']['apellido'] ?></td>
            <td><?= $this->Html->link('Detalle',array( 'controller'=>'mozos',
                    'action'=> 'ver',$mozo['Mozo']['id'] )); ?>  </td>
        </tr>
    </tbody>
    <?php endforeach ?>
</table>