<?php

// set middlewares
$middleware=[
	"Main",
];

return [

	// pages url scope enable
	"scope"=>true,

	// pages release list
	"release"=>[
		"/"=>[
			"/"=>"Release\Main@index",
		],
		"/api"=>[
			"/"=>"Api\Main@index",
		],
		"/admin"=>[
			"/"=>"Admin\Main@index",
		],
	],

	// error url scope enable
	"errorScope"=>true,

	// error list
	"error"=>[
		"/"=>[
			"Exception"=>"Release\\Error@index",
		],
		"/api"=>[
			"Exception"=>"Api\\Error@index",
		],
		"/admin"=>[
			"Exception"=>"Admin\\Error@index",
		],
	],
	
];