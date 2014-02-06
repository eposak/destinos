<?php
App::uses('AppController', 'Controller');
/**
 * Itineraries Controller
 *
 * @property Itinerary $Itinerary
 * @property PaginatorComponent $Paginator
 */
class ItinerariesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itinerary->recursive = 0;
		$this->set('itineraries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Itinerary->exists($id)) {
			throw new NotFoundException(__('Invalid itinerary'));
		}
		$options = array('conditions' => array('Itinerary.' . $this->Itinerary->primaryKey => $id));
		$this->set('itinerary', $this->Itinerary->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itinerary->create();
			if ($this->Itinerary->save($this->request->data)) {
				$this->Session->setFlash(__('The itinerary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itinerary could not be saved. Please, try again.'));
			}
		}
		$experiences = $this->Itinerary->Experience->find('list');
		$this->set(compact('experiences'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Itinerary->exists($id)) {
			throw new NotFoundException(__('Invalid itinerary'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Itinerary->save($this->request->data)) {
				$this->Session->setFlash(__('The itinerary has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itinerary could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Itinerary.' . $this->Itinerary->primaryKey => $id));
			$this->request->data = $this->Itinerary->find('first', $options);
		}
		$experiences = $this->Itinerary->Experience->find('list');
		$this->set(compact('experiences'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Itinerary->id = $id;
		if (!$this->Itinerary->exists()) {
			throw new NotFoundException(__('Invalid itinerary'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Itinerary->delete()) {
			$this->Session->setFlash(__('The itinerary has been deleted.'));
		} else {
			$this->Session->setFlash(__('The itinerary could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
