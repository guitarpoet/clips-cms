<?php namespace Clips\Cms\Controllers; in_array(__FILE__, get_included_files()) or exit("No direct sript access allowed");

use Clips\Controller;

/**
 * @Clips\Widget({"html", "lang"})
 */
class HomeController extends Controller {

	public function index() {
		$this->title('Clips CMS');
		return $this->render('home', array('header' => 'Home'));
	}

	/**
	 * @Clips\Widget({"image", "grid"})
	 */
	public function picture() {
		return $this->render('picture');
	}

	/**
	 * @Clips\Widget({"image", "grid", "jquery", "rules"})
	 * @Clips\Js("application/static/js/layout")
	 * @Clips\Scss("application/static/scss/layout")
	 */
	public function layout() {
		return $this->render('layout');
	}

	public function red() {
		return $this->redirect('/', true);
	}

	/**
	 * @Clips\Library("qrcode")
	 */
	public function qr() {
		$img = $this->qrcode->setText("http://bestpay.pinet.co")
		->setSize(400)
		->setPadding(20)
		->setErrorCorrection('high')
		->setForegroundColor(array('r' => 0, 'g' => 0, 'b' => 0, 'a' => 0))
		->setBackgroundColor(array('r' => 255, 'g' => 255, 'b' => 255, 'a' => 0))
		->setLabel('Pinet')
		->setLabelFontSize(16)
		->show();
		return $this->image($img, 'png');
	}
}
