<?php

App::uses('AppModel', 'Model');

/**
 * Video Model
 *
 * @property Location $Location
 */
class Video extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'title';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Location' => array(
            'className' => 'Location',
            'joinTable' => 'locations_videos',
            'foreignKey' => 'video_id',
            'associationForeignKey' => 'location_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

}
