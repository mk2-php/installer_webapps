<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * Admin\ErrorController
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller\Admin;

class ErrorController extends Controller{

	/**
	 * index
	 * @param $exception
	 */
	public function index($exception){

		// Pass exception to View.
		$this->Response->setData("exception",$exception);

	}
}