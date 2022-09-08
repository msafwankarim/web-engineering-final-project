<?php
require_once "Product.php";

function isValid($phoneNumber)
{
    $url = "http://apilayer.net/api/validate?access_key=e3e6b137adf01723b2589f0e8ba08fb3&number=$phoneNumber&country_code=PK&format=%201";
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $headers = array(
        "Accept: application/json",
    );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);


    $resp = curl_exec($curl);
    curl_close($curl);
    $resp = json_decode($resp);
    return $resp->valid;
    // return false;
}

function sendSMS($phoneNumber, $id, $name, $quantity, $product)
{

    $APIKey = '982ec05d0eeed79f43ca843d8f629f74';

    $sender = 'E-Bakers';
    $textmessage = "Hi $name! Your order for $quantity $product->name has been placed. Your order id is $id";
    $url = "https://api.veevotech.com/sendsms?hash=" . $APIKey . "&receivenum=" . $phoneNumber . "&sendernum=" . urlencode($sender) . "&textmessage=" . urlencode($textmessage);

    $ch = curl_init();
    $timeout = 30;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $response = curl_exec($ch);
    curl_close($ch);
    $response  = json_decode($response);
    return $response->status == "ACCEPTED";
    // $username = "923435594083";
    // $password = "kcprdj3ET8zYuP";
    // $mobile = "$phoneNumber";
    // $sender = "E-Bakers";
    // $message = "Hi $name! Your order for $quantity $product->name has been placed. Your order id is $id";

    // $post = "sender=" . urlencode($sender) . "&mobile=" . urlencode($mobile) . "&message=" . urlencode($message) . "";
    // $url = "https://sendpk.com/api/sms.php?username=" . $username . "&password=" . $password . "";
    // $ch = curl_init();
    // $timeout = 10; // set to zero for no timeout
    // curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)');
    // curl_setopt($ch, CURLOPT_URL, $url);
    // curl_setopt($ch, CURLOPT_POST, 1);
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    // $result = curl_exec($ch);
    // return $result == "OK";
}
