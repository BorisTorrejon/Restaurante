<?php
class MesasController extends AppController
{

    public $helpers = array('Html', 'Form', 'Time');
    public $components = array('Session');

    public function index()
    {
        $this->set('mesas', $this->Mesa->find('all'));
    }
    public function add()
    {
        if ($this->request->is('post')) {
            $this->Mesero->create();
            if ($this->Mesero->save($this->request->data)) {
                $this->Session->setFlash('La mesa ha sido creada', 'default', array(
                    'class' => 'success'
                ));
                $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('No se pudo crear la mesa');
        }
        $meseros = $this->Mesa->Mesero->find(
            'list',
            array(
                'fields' => array(
                    'id',
                    'fullName'
                )
            )
        );
        $this->set('meseros', $meseros);
    }
    public function edit($id = null)
    {
        if (!$id) {
            throw new NotFoundException('Datos invalidos');
        }
        $mesa = $this->Mesa->findById($id);
        if (!$mesa) {
            throw new NotFoundException('La mesa no ha sido encontrada');
        }
        //here goes the code of request
        if ($this->request->is('post', 'put')) {
            $this->Mesa->id = $id;
            if ($this->Mesa->save($this->request->data)) {
                $this->Session->setFlash('La mesa ha sido modificada', $elements = 'default', $params = array('class' => 'success'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash('El registro no pudo ser modificado.');
        }
        //here goes the code of data
        if (!$this->request->data) {
            $this->request->data = $mesa;
        }
        $meseros = $this->Mesa->Mesero->find(
            'list',
            array(
                'fields' => array(
                    'id',
                    'fullName'
                )
            )
        );
        $this->set('meseros', $meseros);
    }
}