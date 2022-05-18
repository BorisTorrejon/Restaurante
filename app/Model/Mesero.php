<?php
class Mesero extends AppModel
{
    public $virtualFields = array(
        'fullName' => 'CONCAT(Mesero.surname," ",Mesero.name)'
    );
    public $validate = array(
        'dni' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'solo número'
            ),
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'este DNI ya ha sido registrado'
            )
        ),
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'surname' => array(
            'rule' => 'notEmpty'
        ),
        'phone' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'solo número'
            )
        )
    );
    public $hasMany = array(
        'Mesa' => array(
            'className' => 'Mesa',
            'foreignKey' => 'Mesero_id',
            'conditions' => '',
            'orden' => 'Mesa.serie DESC',
            'depend' => false
        )
    );
}