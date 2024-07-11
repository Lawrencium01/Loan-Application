<?php

// API endpoint
$api_endpoint = 'https://api.flutterwave.com/v3/accounts/resolve';

// Secret key
$secret_key = 'FLWSECK-62387b4d4957378f6db6b7dc7d6f49ce-18d30241ddcvt-X';

// Data to be sent in the request body
$data = array(
    'account_number' => $_GET['account_number'],
    'account_bank' => $_GET['account_bank'],
);

// Convert data to JSON format
$post_data = json_encode($data);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $api_endpoint);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $secret_key,
    'Content-Type: application/json'
));

// Execute the cURL request
$response = curl_exec($ch);

// Check for errors
if(curl_errno($ch)){
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Output the response
echo json_decode($response, true)['data']['account_name'];

?>
