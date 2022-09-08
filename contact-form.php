<?php
include 'Connection.php';
include './captcha.php';

$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);;
$mailSubject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
$message = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);

$conn = new Connection();
$conn = $conn->get_connection();
$sql = "INSERT INTO contacts(name, email, subject, message) VALUES('{$name}', '{$email}', '{$mailSubject}', '{$message}')";
// echo $sql;
if (mysqli_query($conn, $sql)) {
    http_response_code(200);
} else {
    http_response_code(500);
}
$message = htmlspecialchars_decode($message, ENT_QUOTES);
$recievers = array("muhammad.bsse3848@iiu.edu.pk", "bilal.bsse3873@iiu.edu.pk", "huzaifa.bsse3797@iiu.edu.pk");
$headers = "From: nightwalker786@outlook.com" . "\r\n";
$messageBody = "Name: {$name}\r\nEmail: {$email}\r\nMessage: {$message}";

foreach ($recievers as $to) {
    mail($to, $mailSubject, $messageBody, $headers);
}