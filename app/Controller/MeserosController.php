<?php
class MeserosController extends AppController
{
    public $helpers = array('Html','Form');
    
    public function index(){
        $this->set('meseros',$this->Mesero->find('all'))
    }
}
?>