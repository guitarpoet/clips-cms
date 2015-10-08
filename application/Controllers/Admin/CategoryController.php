<?php namespace Clips\Cms\Controllers\Admin; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * The main controller for all the user operations
 *
 * @author Jack
 * @date Tue Feb 24 16:07:01 2015
 *
 * @Clips\Widget({"lang", "grid", "scaffold"})
 * @Clips\Model({"category"})
 */
class CategoryController extends Controller {
	/**
	 * @Clips\Widgets\DataTable("category")
	 * @Clips\Actions("admin/category")
	 */
	public function index() {
		$this->title('Category Mangement', true);
		return $this->render('admin/category/home');
	}

	/**
	 * @Clips\Form("category_edit")
	 * @Clips\Actions("admin/category")
	 */
	public function show($id) {
		$data = $this->user->load($id);
		$this->title("Category Details for [{$data->name}]", true);
		$this->formData("category_edit", $data);
		$args = array('categories' => $this->category->get());
		$args['data'] = $data;
		$args['id'] = $id;
		return $this->render('admin/category/show', $args);
	}

	/**
	 * @Clips\Form('category_create')
	 */
	public function create() {
		$this->title('Create Category', true);
		return $this->render('admin/category/create', array('categories' => 
			$this->category->get()));
	}

	/**
	 * @Clips\Form('category_create')
	 */
	public function create_form() {
		$this->category->insert($this->category->cleanFields('categories', $this->post()));
		return $this->redirect(\Clips\site_url('admin/category'));
	}

	public function delete($id = null) {
		if($id) {
			$this->category->delete($id);
		}
		else {
			 $this->category->delete($this->post('ids'));
		}
		return $this->redirect(\Clips\site_url('admin/category'));
	}
	
}
