<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => '',
		'secret' => '',
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => '',
	],
	'github' => [
	    'client_id' => 'b60bf9091be8622f0496',
	    'client_secret' => '10ca6968824a7ca88da2b1c92152d4556844e01f',
	    'redirect' => 'http://attendthatclass-codeuniven.c9users.io/account/github',
    ],
    'google' => [
        'client_id' =>  '373849075072-78lmcpgg6r5035g9c6j90g0f217lqnjs.apps.googleusercontent.com',
        'client_secret' => '0BmjcYfQF-AImzSBCDu8B46r',
        'redirect' =>  'http://attendthatclass-codeuniven.c9users.io/account/google',
    ],
];
