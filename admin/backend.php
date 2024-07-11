<?php

	// Retrieve BVN and account number from POST request
	$bvn = $_POST['bvn'];
	$accountno = $_POST['accountno'];

	// Your Flutterwave secret key
	$secretKey = 'FLWSECK_TEST-3f4cf333eb955f601dfee2916e71440e-X';

	// Make request to Flutterwave for BVN and account number verification
	$url = 'https://api.flutterwave.com/v3/bvn/match';
	$data = [
		'bvn' => $bvn,
		'accountno' => $accountno,
	];

	$options = array(
		'http' => array(
			'header' => "Authorization: Bearer $secretKey\r\n" .
						"Content-Type: application/json\r\n",
			'method' => 'POST',
			'content' => json_encode($data),
		),
	);

	$context = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	$response = json_decode($result, true);

	// Check if the verification was successful
	if ($response['status'] == 'success') {
		echo 'BVN and account number verified successfully.';
	} else {
		echo 'Verification failed: ' . $response['message'];
	}




?>