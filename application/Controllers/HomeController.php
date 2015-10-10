<?php namespace Clips\Cms\Controllers; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * @Clips\Widget({"html", "grid", "scaffold", "lang"})
 */
class HomeController extends Controller {

	public function index() {
		$this->title('Clips CMS');
		return $this->render('home');
	}

	public function browser() {
		if($this->request->isMobile()) {
			echo 'Mobile';
		}
		else {
			echo 'PC';
		}
	}
}
