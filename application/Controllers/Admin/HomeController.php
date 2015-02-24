<?php namespace Clips\Cms\Controllers\Admin; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * @Clips\Widget({"html", "lang"})
 */
class HomeController extends Controller {

	public function index() {
		\Clips\html_title('Clips CMS Admin');
		return $this->render('home', array('header' => 'Admin Home'));
	}
}
