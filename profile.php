<?php


$access_token = '8GnQGiUbh2ezEXZ0BK6Yr2jV3RLwskxNGP+XPo7eHvIm0knHC77PME1+SrLKeZXSvPX/Ypk5dxhrIeQkJSf2UNTWeBJlWoZVlDHH1u0IsYSwaV9QVOExk3EeP6NY0Rdx4Wi7PO6v5Tiya0BaOkbEIQdB04t89/1O/w1cDnyilFU=';

$userId = 'Uffa138efe037e6e889d0b0f4a871c005';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

