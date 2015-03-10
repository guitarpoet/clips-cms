<?php namespace Clips\Cms\Controllers; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * The controller for view articles
 *
 * @author Jack
 * @date Mon Mar  9 15:16:22 2015
 *
 * @Clips\Library("article")
 */
class ArticleController extends Controller {
	public function index() {
	}

	public function show($id = null) {
		if($id) {
		}
		else {
			// If no argument is set, just return the index view
			return $this->forward('index');
		}
	}
}
