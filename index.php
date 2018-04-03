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

if (!is_null($events['events'])) {
//Loop through each event foreach($events['events']as $event){
// Line API send a lot of event type, we interested in message only. if ($event['type'] == 'message') {
    switch($event['message']['type']) {
        case 'text':
//Get replyToken
            $replyToken = $event['replyToken']; //Reply message
            $respMessage='Hello, your message is '.$event['message']['text'];
            $httpClient=newCurlHTTPClient($channel_token); $bot=newLINEBot($httpClient, array('channelSecret'=> $channel_secret)); $textMessageBuilder=newTextMessageBuilder($respMessage);
    }
}
$response=$bot->replyMessage($replyToken, $textMessageBuilder); break;
echo "OK...";