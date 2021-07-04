<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * Release\Controller
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller\Release;

// The inheritance based on "Controller"(As BaseController) use.
use Mk2\Libraries\Controller As BaseController;

class Controller extends BaseController{

	public $Template="default";
	public $autoRender=true;
	
	public function handleBefore(){
		// handle before area
	}
	
	public function handleAfter($input){
		// handle after area
	}

}