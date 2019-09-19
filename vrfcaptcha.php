<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Construct the Google verification API request link.
    $params = array();
    $params['secret'] = '6LdB8LgUAAAAAAExh6b5kS6BT25nEs8-8pd1JkoO'; // Secret key
    if (!empty($_POST) && isset($_POST['g-recaptcha-response'])) {
        $params['response'] = urlencode($_POST['g-recaptcha-response']);
    }
    $params['remoteip'] = $_SERVER['REMOTE_ADDR'];

    $params_string = http_build_query($params);
    $requestURL = 'https://www.google.com/recaptcha/api/siteverify?' . $params_string;

    // Get cURL resource
    $curl = curl_init();

    // Set some options
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $requestURL,
    ));

    // Send the request
    $response = curl_exec($curl);
    // Close request to clear up some resources
    curl_close($curl);
	// Devuelve la respuesta en formato JSON
	echo $response;
}