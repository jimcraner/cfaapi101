<?php
/*
 *      mktapi.php
 *     
 *      Extracts data from the Marketplace API and saves as a CSV file.
 * 
 * 		The Marketplace API is RESTful, access via URL as in the example below:
 * 
 * 		http://marketplace.civiccommons.org/api/v1/node.json?page=3
 * 
 * 			URI/api/v1/method.format?key=value
 *      
 */
 
$baseUrl = 'http://marketplace.civiccommons.org/api/v1/';

/* 		Authentication -- let's introduce ourselves
 * 
 * 		We submit the username and password, get a cookie in return.
 * 
 * 		email: jim+mktapi@codeforamerica.org
 * 		username: brigadeapi
 * 		password: 3afbc95bab3bf8cd05835deac609db87
 */

$authUser = 'brigadeapi';
$authPass = '3afbc95bab3bf8cd05835deac609db87';

$authUrl = $baseUrl . 'user/login';

echo "Authentication URL used is..." . "\n";
echo $authUrl . "\n";

$authData = '{"username":"' . $authUser . '","password":"';
$authData .= $authPass . '"}';

echo "\n" . 'The $authData string is...' . "\n";
echo $authData . "\n";

$authHeader = array("Content-Type:application/json");

$curlAuth = curl_init($authUrl);

curl_setopt($curlAuth, CURLOPT_HTTPHEADER, $authHeader);
curl_setopt($curlAuth, CURLOPT_POST, 1);
curl_setopt($curlAuth, CURLOPT_POSTFIELDS, $authData);
curl_setopt($curlAuth, CURLOPT_HEADER, 0);
curl_setopt($curlAuth, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlAuth, CURLOPT_FAILONERROR, 1);
curl_setopt($curlAuth, CURLINFO_HEADER_OUT, 1);

$authObject = curl_exec($curlAuth);

echo $authObject;

$curlAuthInfo = curl_getinfo($curlAuth);

echo "\n";
print_r($curlAuthInfo);
echo "\n";

curl_close($curlAuth);

//convert the response from JSON to an array
$authArray = json_decode($authObject);
echo "\n";
print_r($authArray);
echo "\n";


?>
