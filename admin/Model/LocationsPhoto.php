<?php

App::uses('AppModel', 'Model');

/**
 * LocationsPhoto Model
 *
 * @property Location $Location
 * @property Photo $Photo
 */
class LocationsPhoto extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Location' => array(
            'className' => 'Location',
            'foreignKey' => 'location_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Photo' => array(
            'className' => 'Photo',
            'foreignKey' => 'photo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
