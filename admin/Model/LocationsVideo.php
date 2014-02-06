<?php

App::uses('AppModel', 'Model');

/**
 * LocationsVideo Model
 *
 * @property Location $Location
 * @property Video $Video
 */
class LocationsVideo extends AppModel {
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
        'Video' => array(
            'className' => 'Video',
            'foreignKey' => 'video_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
