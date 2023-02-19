<?php

function cURL($url, $method, $data, $encoding) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    if ($method == 'POST') {
        curl_setopt($ch, CURLOPT_POST, 1);
    } else if ($method == 'GET') {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    }
    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    }
    if ($encoding) {
        curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate");
    }
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

// $url = "https://google.com";
// $method = "GET";
// $data = null;
// $encoding = true;
// $response = cURL($url, $method, $data, $encoding);
