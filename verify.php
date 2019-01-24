<?php
$access_token = 'cW0QYL1nzIK6w2lOvSLOo/zxDE7mcnxFxtf2/CP8Gh6pbrwlz5ZEcm3hToqBCHOrEuMCO++UY4v9XSA/x6Q2MfDA5tn4Ra56S3S4AfYnfM9ubThh/lL9jhgFeao3BgN1RI/RD2u0aqfNq1VxloqELwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
