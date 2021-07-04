<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * Admin\Controller
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller\Admin;

// The inheritance based on "Controller"(As BaseController) use.
use Mk2\Libraries\Controller As BaseController;

class Controller extends BaseController{

	public $Template="administ";
	public $autoRender=true;
	
	public function handleBefore(){
		// handle before area
	}
	
	public function handleAfter($input){
		// handle after area
	}

}