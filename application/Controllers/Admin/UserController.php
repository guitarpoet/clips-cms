<?php namespace Clips\Cms\Controllers\Admin; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * The main controller for all the user operations
 *
 * @author Jack
 * @date Tue Feb 24 16:07:01 2015
 *
 * @Clips\Widget({"html", "lang", "bootstrap"})
 */
class UserController extends Controller {

	/**
	 * @Clips\Widgets\DataTable("admin/user_home")
	 */
	public function index() {
		return $this->render('admin/user/home');
	}

	/**
	 * @Clips\Form('admin/user_create')
	 */
	public function create() {
		return $this->render('admin/user/create');
	}

	/**
	 * @Clips\Model("user")
	 * @Clips\Form('admin/user_create')
	 */
	public function create_form() {
		$this->user->insert($this->user->cleanFields('users', $this->post()));
		return $this->redirect(\Clips\site_url('admin/user'));
	}
}
