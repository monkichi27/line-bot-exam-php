<?php


$access_token = 'J0fDzIgCNNgs8vjTSFf8BxfOSxsPV7vM2Al0H8DkS4kao5gAwHmeYs6GcYUWb265vPX/Ypk5dxhrIeQkJSf2UNTWeBJlWoZVlDHH1u0IsYSpMKzVdQs6RFcHjZzpjPsScMIsL1kiqxuGchbtfjNW7wdB04t89/1O/w1cDnyilFU=';

$userId = 'U05b3b20438c14c80248eb9dc5b321505';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

