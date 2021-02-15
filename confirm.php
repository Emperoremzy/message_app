<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once './vendor/autoload.php'; // Loads the library

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;


// Lookup variable `$uniqueId` in a database to find messageSid
$messageSid = 'SM607cb1e223c1461c86c93e483a554efc';

// Your Account SID and Auth Token from twilio.com/console
$accountSid = 'ACb4d181370d58f5b583f77afc87cebf79';
$auth_token = '5952329d5badcc485e7cc67e96d1ecd8';

$client = new Client($accountSid, $auth_token);
$message = $client->messages($messageSid)->feedback->create(
    array("outcome" => "confirmed")
);

echo $message->outcome;