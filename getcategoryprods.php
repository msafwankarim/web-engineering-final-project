
<?php
require 'Connection.php';

$q = $_GET['q'];
$conn = new Connection();
$conn = $conn->get_connection();
$result = mysqli_query($conn, "SELECT product_name FROM product WHERE LOWER(category) = LOWER('{$q}');");
$products = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // $product = Product::makeProductFromRow($row);
        array_push($products, $row["product_name"]);
    }
} else {
    echo "<option value=''>- No products found -</option>";
}
foreach ($products as $product) {
    echo '<option value="' . strtolower($product) . '">' . $product . '</option>';
}
?>