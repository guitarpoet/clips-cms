<?php namespace Clips\Cms\Controllers\Admin; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * The main controller for all the group operations
 *
 * @author Jack
 * @date Thu Feb 26 09:02:58 2015
 *
 * @Clips\Widget({"lang", "grid"})
 */
class GroupController extends Controller {

	/**
	 * @Clips\Widgets\DataTable("admin_group_home")
	 */
	public function index() {
		return $this->render('admin/group/home');
	}

	/**
	 * @Clips\Form('admin/group_create')
	 */
	public function create() {
		return $this->render('admin/group/create');
	}

	/**
	 * @Clips\Model("group")
	 * @Clips\Form('admin/group_edit')
	 */
	public function show($id) {
		$group = $this->group->load($id);
		$this->formData('admin/group_edit', $group);
		return $this->render('admin/group/show');
	}

	/**
	 * @Clips\Model("group")
	 * @Clips\Form('admin/group_edit')
	 */
	public function show_form() {
		$this->group->update((object) $this->group->cleanFields('groups', $this->post()));
		return $this->redirect(\Clips\site_url('admin/group'));
	}

	/**
	 * @Clips\Model("group")
	 * @Clips\Form('admin/group_create')
	 */
	public function create_form() {
		$this->group->insert($this->group->cleanFields('groups', $this->post()));
		return $this->redirect(\Clips\site_url('admin/group'));
	}
}
