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
	}
}
