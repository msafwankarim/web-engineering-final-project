<?php
$captcha_res = $_POST["g-recaptcha-response"];

$curlx = curl_init();

curl_setopt($curlx, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($curlx, CURLOPT_HEADER, 0);
curl_setopt($curlx, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($curlx, CURLOPT_POST, 1);

$post_data = [
    'secret' => '6LeB-hoeAAAAAAeE_YBrxDCsvqx2gLYbh4OWV_3a',
    'response' => $captcha_res

];

curl_setopt($curlx, CURLOPT_POSTFIELDS, $post_data);
$resp = json_decode(curl_exec($curlx));

curl_close($curlx);

if (!$resp->success) 
{
    http_response_code(403);
    die("Captcha verification failed");
    //success!
}
