<?php

    class Mozo extends AppModel {
        public $validate = array(
            'dni'  => array (
                'rule' => 'notEmpty'
            ),
            'nombre'  => array (
                'rule' => 'notEmpty'
            ),
            'apellido'  => array (
                'rule' => 'notEmpty'
            ),
            'telefono'  => array (
                'rule' => 'notEmpty'
            ),

        );
    }


?>