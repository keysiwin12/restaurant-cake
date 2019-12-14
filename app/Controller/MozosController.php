<?php

    class MozosController extends AppController {
        public $helpers = array('Html','Form');
        public $components = array('Session');
        public function index() {
            $this->set('mozos',$this->Mozo->find('all'));

        }

        public function ver($id = null) {
            if (!$id) {
                throw new NotFoundException("Datos invalidos");
            }

            $mozo = $this->Mozo->findById($id);
            if(!$mozo) {
                throw new NotFoundException("El mozo no existe");
            }

            $this->set('mozo',$mozo);         
        }

        public function agregar() {
            if($this->request->is('post')) {
                $this->Mozo->create();
                if($this->Mozo->save($this->request->data)) {
                    $this->Session->setFlash('nuevo mozo creado','default',array('class'=>
                'success'));
                    $this->redirect(array('action'=> 'index'));
                }
                $this->Session->setFlash('no se puedo crear mozo');
            }
        }

    }



?>