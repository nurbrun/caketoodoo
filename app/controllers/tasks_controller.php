<?php
class TasksController extends AppController {
	var $name = 'Tasks';
	var $helpers = array('Html', 'Form');

	function index() {
		$this -> set('tasks', $this->Task->find('all'));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Task->create();
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash('The Task has been Saved');
				$this->redirect (array('action'=>'index'), null, true);
			} else {
				$this->Sesssion->setFlash('Task not saved. Try again.');
			}
		}
	}
}
?>