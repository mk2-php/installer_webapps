<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * Admin\MainController
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller\Admin;

class MainController extends Controller{

	/**
	 * handleBefore
	 */
	public function handleBefore(){
		parent::handleBefore();

		// handle before area
	}

	/**
	 * handleAfter
	 * @param $input
	 */
	public function handleAfter($input){
		parent::handleAfter($input);
		
		// handle after area
	}

	/**
	 * index
	 */
	public function index(){

		// Send title to render (View, Template, ViewPart)
		$this->Response->setData("title","Welcome Administ Page! | Mark2 PHP Freamwork");
	}
}