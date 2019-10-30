<?php



require "vendor/autoload.php";

$access_token = 'J0fDzIgCNNgs8vjTSFf8BxfOSxsPV7vM2Al0H8DkS4kao5gAwHmeYs6GcYUWb265vPX/Ypk5dxhrIeQkJSf2UNTWeBJlWoZVlDHH1u0IsYSpMKzVdQs6RFcHjZzpjPsScMIsL1kiqxuGchbtfjNW7wdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'a828b7d2a2e3b709a4d616040fd041e8';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







