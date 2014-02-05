<?php

App::uses('AppModel', 'Model');

/**
 * Lender Model
 *
 * @property Reference $Reference
 * @property Booking $Booking
 */
class Lender extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'firstname';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Booking' => array(
            'className' => 'Booking',
            'foreignKey' => 'lender_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

}
