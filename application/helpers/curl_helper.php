<?php
function curl_post($url, $fields = array())
{
    $postvars = http_build_query($fields);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);                //0 for a get request
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $response = curl_exec($ch);
    curl_close($ch);
    return response_parser($response);
}

function curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 0);                //0 for a get request
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $response = curl_exec($ch);
    curl_close($ch);
    return response_parser($response);
}

function response_parser($response)
{
    $res = json_decode($response);
    return [
        $res->error,
        $res->message,
        $res->status,
        $res->data,
    ];
}
