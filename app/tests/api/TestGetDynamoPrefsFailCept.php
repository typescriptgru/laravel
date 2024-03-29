<?php

// Prepare URL and params to send
$get_url = "/api/v1/dynamo/dyn_prefs";

$data = [
	'user_hash'=>'some_bad_user_hash',
	'uid'=>'3'
];

// Call API
$I = new ApiGuy($scenario);
$I->wantTo('Call Get Dynamo Preference API Fail');
$I->sendGet($get_url,$data);

// See if response is OK
$I->seeResponseCodeIs(200);
$I->seeResponseIsJSON();

$success_response = [
	"status"=>0,
	"msg"=>"Wrong user hash key"
];

$I->seeResponseContainsJSON($success_response);
