<?php

use Clips\Libraries\AbstractMigration;

class BaseModel extends AbstractMigration {
	protected function doUp() {
		// let's insert the base category into the categories
		$model = $this->tool->model('category');
		$model->insert(array(
			'name' => 'ROOT',
			'notes' => 'The root category for all categories',
			'path' => ''
		));

		// Let's insert the basic groups
		$model = $this->tool->model('group');
		$model->insert(array(
			'name' => 'guest'
		));
		$model->insert(array(
			'name' => 'admin'
		));
	}
}
