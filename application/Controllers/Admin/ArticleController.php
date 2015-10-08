<?php namespace Clips\Cms\Controllers\Admin; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * The main controller for all the article operations
 *
 * @author Jack
 * @date Thu Oct  8 13:26:40 2015
 *
 * @Clips\Widget({"lang", "grid", "scaffold"})
 * @Clips\Model({"article", "user", "category"})
 */
class ArticleController extends Controller {
	/**
	 * @Clips\Widgets\DataTable("article")
	 * @Clips\Actions("admin/article")
	 */
	public function index() {
		$this->title('Article Mangement', true);
		return $this->render('admin/article/home');
	}

	/**
	 * @Clips\Form('article_create')
	 */
	public function create() {
		$this->title('Create Article', true);
		return $this->render('admin/article/create', array('categories' => 
			$this->category->get(), 'users' => $this->user->get()));
	}

	/**
	 * @Clips\Form('article_create')
	 */
	public function create_form() {
		var_dump($this->post());
		exit;
		$this->article->insert($this->category->cleanFields('articles', $this->post()));
		return $this->redirect(\Clips\site_url('admin/article'));
	}
}
