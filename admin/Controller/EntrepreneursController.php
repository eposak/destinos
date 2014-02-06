<?php
App::uses('AppController', 'Controller');
/**
 * Entrepreneurs Controller
 *
 * @property Entrepreneur $Entrepreneur
 * @property PaginatorComponent $Paginator
 */
class EntrepreneursController extends AppController {

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
		$this->Entrepreneur->recursive = 0;
		$this->set('entrepreneurs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Entrepreneur->exists($id)) {
			throw new NotFoundException(__('Invalid entrepreneur'));
		}
		$options = array('conditions' => array('Entrepreneur.' . $this->Entrepreneur->primaryKey => $id));
		$this->set('entrepreneur', $this->Entrepreneur->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Entrepreneur->create();
			if ($this->Entrepreneur->save($this->request->data)) {
				$this->Session->setFlash(__('The entrepreneur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entrepreneur could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Entrepreneur->exists($id)) {
			throw new NotFoundException(__('Invalid entrepreneur'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Entrepreneur->save($this->request->data)) {
				$this->Session->setFlash(__('The entrepreneur has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The entrepreneur could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Entrepreneur.' . $this->Entrepreneur->primaryKey => $id));
			$this->request->data = $this->Entrepreneur->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Entrepreneur->id = $id;
		if (!$this->Entrepreneur->exists()) {
			throw new NotFoundException(__('Invalid entrepreneur'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Entrepreneur->delete()) {
			$this->Session->setFlash(__('The entrepreneur has been deleted.'));
		} else {
			$this->Session->setFlash(__('The entrepreneur could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
