<?php

return [

	// The default gateway to use
	'default' => 'paypal',

	// Add in each gateway here
	'gateways' => [
		'paypal' => [
			'driver'  => 'PayPal_Express',
			'options' => [
            'username'  => 'sb-7xfsm783201_api1.business.example.com',
            'password'  => '6K35WADR55F2W966',
            'signature' => 'AKXC4bQnuTISIzVHVlufd7p0usA9AxW4pxZl7Tt8R6dnX9NeVRC7iasm',
            'solutionType' => '',
            'landingPage'    => '',
            'headerImageUrl' => '',
            'brandName' =>  'Teste Video',
            'testMode' => true
			]
		]
	]

];
