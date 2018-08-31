<?php

//CONFIG
$CODE = "SGB-CODE";
$KEY = "API-KEY";

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sgb.or.id/",
  CURLOPT_HEADER => 0,
  CURLOPT_VERBOSE => 1,
  CURLOPT_AUTOREFERER => false,
  CURLOPT_REFERER => "http://".$_SERVER['HTTP_HOST'],
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "code=".$CODE."&key=".$KEY
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
