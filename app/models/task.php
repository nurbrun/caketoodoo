<?php
class Task extends AppModel {
	var $name = 'Task';
	var $validate = array(
		'title' => array(
			'rule' =>  'notEmpty',
			'message' => 'Title of a task cannot be empty'
			)
		);
}
?>