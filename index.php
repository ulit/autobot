<?php

require_once('./vendor/autoload.php');
// Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
$channel_token = 's2YsG6Cf/nk3Yxuc+hNhlFzPx1ok9XEcIAY5eZdCLzVQUJr87DHxI/qBlzwiXP9dhNj+ujLeu0J/ClG21vs8xplEjvJ3BwVxc0+T0Po8IIXaRA0GqM6Bbij9G6SUdhEQb18iLwFuiPyHWw8Eja+fEwdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'a5c0adcfff271a2f3235f7a50033de3e';

//Get message from Line API
$content = file_get_contents('php://input');
$events=json_decode($content, true);
echo "Test 001";
if (!is_null($events['events'])) {
    echo "Test 002";
    foreach($events['events']as $event){
        echo "Test 003";
        // Line API send a lot of event type, we interested in message only.
        if ($event['type'] == 'message') {
            echo "Test 004";
        }
    }
}

echo "Test end";
?>