<?php namespace Clips\Cms\Models; in_array(__FILE__, get_included_files()) or exit("No direct script access allowed");

use Clips\Libraries\DBModelV2;

/**
 * Model to manipulate table categories
 *
 * @author Jack
 * @version 1.0
 * @date Wed Oct  7 12:59:39 2015
 *
 * @Clips\Model(table="categories")
 */
class CategoryModel extends DBModelV2 {
	public function insert($data) {
		$data['id'] = parent::insert($data);
		$data['path'] = $this->getPath($data);
		$this->update((object) $data);
		return $data['id'];
	}

	/**
	 * Get the path for the data, if the data is already has the path
	 * will return the data's path, and if the data don't have any path field
	 * will getting the data's path using its parent.
	 */
	public function getPath($data) {
		$data = (object) $data;
		if(isset($data->path)) {
			return $data->path;
		}

		if(isset($data->parent_id)) {
			$parent = $this->load($data->parent_id);
			return $this->getPath($parent).'/'.$data->id;
		}
		else {
			return '';
		}
	}
}
