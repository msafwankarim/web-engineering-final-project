<?php session_start();

require 'Connection.php';
require 'Product.php';
include 'sendsms.php';

if(!isset($_POST["name"], $_POST["phnum"], $_POST["address"], $_SESSION["prod_id"], $_SESSION["quantity"], $_POST["g-recaptcha-response"])) {
    http_response_code(403);
    die("Variable not set");
}
include 'captcha.php';

$customer_name = $_POST["name"];
$phnum = $_POST["phnum"];
$address = $_POST["address"];
$msg = $_POST["msg"];

$prod_id = $_SESSION["prod_id"];
$quantity = $_SESSION["quantity"];
// if(!isValid($phnum)) {
//     http_response_code(404);
//     die("Mobile Number Validation Failed");
// } 
$phnum = "92".$phnum;

$conn = new Connection();
$conn = $conn->get_connection();
$sql = "SELECT * FROM products WHERE id='{$prod_id}'";
$rs = mysqli_query($conn, $sql);
if (mysqli_num_rows($rs) > 0) {
    while ($row = mysqli_fetch_assoc($rs)) {
        $product = Product::makeProductFromRow($row);
    }
} else {
    http_response_code(404);
    die();
}
$order_id = date("YmdHis",time());
$order_time = date('Y-m-d H:i:s');
$total_price = $product->price * (int)$quantity;
$sql = "INSERT INTO orders VALUES('{$order_id}', '{$customer_name}', '{$phnum}', '{$address}', '{$msg}', '{$prod_id}', '{$quantity}', '{$total_price}', '{$order_time}')";
if(mysqli_query($conn, $sql)) {
    echo $order_id;
    // sendSMS($phnum, $order_id, $customer_name, $quantity,  $product);
    exit();
} else {
    http_response_code(500);
    exit();
}
?>