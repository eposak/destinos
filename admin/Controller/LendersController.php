<?php
App::uses('AppController', 'Controller');
/**
 * Lenders Controller
 *
 * @property Lender $Lender
 * @property PaginatorComponent $Paginator
 */
class LendersController extends AppController {

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
		$this->Lender->recursive = 0;
		$this->set('lenders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lender->exists($id)) {
			throw new NotFoundException(__('Invalid lender'));
		}
		$options = array('conditions' => array('Lender.' . $this->Lender->primaryKey => $id));
		$this->set('lender', $this->Lender->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lender->create();
			if ($this->Lender->save($this->request->data)) {
				$this->Session->setFlash(__('The lender has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lender could not be saved. Please, try again.'));
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
		if (!$this->Lender->exists($id)) {
			throw new NotFoundException(__('Invalid lender'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lender->save($this->request->data)) {
				$this->Session->setFlash(__('The lender has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lender could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lender.' . $this->Lender->primaryKey => $id));
			$this->request->data = $this->Lender->find('first', $options);
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
		$this->Lender->id = $id;
		if (!$this->Lender->exists()) {
			throw new NotFoundException(__('Invalid lender'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lender->delete()) {
			$this->Session->setFlash(__('The lender has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lender could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
