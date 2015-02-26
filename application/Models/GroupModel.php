<?php namespace Clips\Cms\Models; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Libraries\DBModel;

/**
 * The Model for group operations
 *
 * @author Jack
 * @date Thu Feb 26 09:37:45 2015
 *
 * @Clips\Model
 */
class GroupModel extends DBModel {
	public function getAll() {
		return $this->select('*')->from('groups')->result();
	}
}
