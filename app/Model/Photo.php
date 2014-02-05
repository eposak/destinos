<?php

App::uses('AppModel', 'Model');

/**
 * Photo Model
 *
 * @property Experience $Experience
 * @property Location $Location
 */
class Photo extends AppModel {
    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Experience' => array(
            'className' => 'Experience',
            'joinTable' => 'experiences_photos',
            'foreignKey' => 'photo_id',
            'associationForeignKey' => 'experience_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        ),
        'Location' => array(
            'className' => 'Location',
            'joinTable' => 'locations_photos',
            'foreignKey' => 'photo_id',
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
