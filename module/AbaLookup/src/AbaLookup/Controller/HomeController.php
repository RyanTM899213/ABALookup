<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AbaLookup\Controller;

use
	AbaLookup\AbaLookupController,
	Zend\View\Model\ViewModel
;

class HomeController extends AbaLookupController {
	public function indexAction() {
		$this->layout('layout/home');
		return new ViewModel();
	}
	public function aboutUsAction() {
		$this->layout('layout/home');
		return new ViewModel();
	}
	public function privacyPolicyAction() {
		$this->layout('layout/home');
		return new ViewModel();
	}
	public function termsOfUseAction() {
		$this->layout('layout/home');
		return new ViewModel();
	}
}
