<?php

require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

// Your Account SID and Auth Token from twilio.com/console
$account_sid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXX';
$auth_token = '59XXXXXXXXXXXXXXXXXXXXXXXXXXXX';
// In production, these should be environment variables. E.g.:
// $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

// A Twilio number you own with SMS capabilities
$twilio_number = "+12053194134";

$client = new Client($account_sid, $auth_token);
$message = $client->messages->create(
    // Where to send a text message (your cell phone?)
    '+2348085124966', 
    array(
        'from' => $twilio_number,
        'body' => 'Emperor emzy sent this message!',
        "provideFeedback" => True
    )
);
print($message);
?>