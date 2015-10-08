<?php namespace Clips\Cms\Controllers\Admin; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * The main controller for all the user operations
 *
 * @author Jack
 * @date Tue Feb 24 16:07:01 2015
 *
 * @Clips\Widget({"lang", "grid", "scaffold"})
 * @Clips\Model({"user", "group"})
 */
class UserController extends Controller {

	/**
	 * @Clips\Form("user_edit")
	 * @Clips\Actions("admin/user")
	 */
	public function show($id) {
		$data = $this->user->load($id);
		$this->title("User Details for [{$data->username}]", true);
		$this->formData("user_edit", $data);
		$args = array('groups' => $this->group->get());
		$args['data'] = $data;
		$args['id'] = $id;
		return $this->render('admin/user/show', $args);
	}

	/**
	 * @Clips\Form("user_edit")
	 * @Clips\Actions("admin/user")
	 */
	public function edit($id) {
		$data = $this->user->load($id);
		$this->title("Edit User for [{$data->username}]", true);
		$this->formData("user_edit", $data);
		return $this->render('admin/user/edit', array('groups' => $this->group->get()));
	}

	/**
	 * @Clips\Form("user_edit")
	 */
	public function edit_form() {
		$data = $this->user->cleanFields('users', $this->post());
		$result = $this->user->update((Object)$data);
		if ($result) {
			return $this->redirect(\Clips\site_url("admin/user"));
		} else {
			$this->error('Error in updating user.', 'update');
		}
	}

	public function delete($id = null) {
		if($id) {
			$this->user->delete($id);
		}
		else {
			 $this->user->delete($this->post('ids'));
		}
		return $this->redirect(\Clips\site_url('admin/user'));
	}
	

	/**
	 * @Clips\Widgets\DataTable("user")
	 * @Clips\Actions("admin/user")
	 */
	public function index() {
		$this->title('User Mangement', true);
		return $this->render('admin/user/home');
	}

	/**
	 * @Clips\Model("group")
	 * @Clips\Form('user_create')
	 */
	public function create() {
		$this->title('Create User', true);
		return $this->render('admin/user/create', array('groups' => 
			$this->group->get()));
	}

	/**
	 * @Clips\Form('user_create')
	 */
	public function create_form() {
		$this->user->insert($this->user->cleanFields('users', $this->post()));
		return $this->redirect(\Clips\site_url('admin/user'));
	}
}
