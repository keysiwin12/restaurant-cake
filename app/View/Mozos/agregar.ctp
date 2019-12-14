<h2>Nuevo Mozo</h2>

<?php
    echo $this->Form->Create('Mozo');
    echo $this->Form->input('dni');
    echo $this->Form->input('nombre');
    echo $this->Form->input('apellido');
    echo $this->Form->input('telefono');
    echo $this->Form->end('Agregar Mozo');

?>