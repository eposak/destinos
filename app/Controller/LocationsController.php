<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LocationsController
 *
 * @author TMI
 */

/**
 * Locations Controller
 *
 * @property Location $Location
 *  
 */


class LocationsController extends AppController {
    
    var $name = 'Locations';
    
    public function index() {
        
        $locations = $this->Location->find('all');
        $this->set('destinos', $locations);
    }
    
    public function add() {
        
        if ($this->request->is('post')) {
            $this->Location->create();
            $this->Location->save($this->request->data);
            $this->redirect(array('action' => 'index'));
        }
    }
}
