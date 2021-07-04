<?php

/**
 * ===================================================
 * 
 * PHP Framework "Mk2"
 *
 * Api\Controller
 * 
 * URL : https://www.mk2-php.com/
 * 
 * Copylight : Nakajima-Satoru 2021.
 *           : Sakaguchiya Co. Ltd. (https://www.teastalk.jp/)
 * 
 * ===================================================
 */

namespace App\Controller\Api;

// The inheritance based on "Controller"(As BaseController) use.
use Mk2\Libraries\Controller As BaseController;

class Controller extends BaseController{

	public function handleBefore(){
		// handle before area
	}
	
	public function handleAfter($input){
		// handle after area

		// Set Content-Type to jSON type.
		header("Content-Type: application/json");

		if(!$input){
			$input=[];
		}

		// Output JSON.
		echo json_encode($input,JSON_UNESCAPED_UNICODE);
	}

}