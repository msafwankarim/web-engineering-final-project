
<?php
require 'Connection.php';
require 'Product.php';

$q = $_GET['q'];
$conn = new Connection();
$conn = $conn->get_connection();
$result = mysqli_query($conn, "SELECT * FROM products WHERE LOWER(category) = LOWER('{$q}');");
$products = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $product = Product::makeProductFromRow($row);
        array_push($products, $product);
    }
} else {
    echo "<option value=''>- No products found -</option>";
}
foreach ($products as $product) {
    echo '<option value="' . $product->id . '">' . $product->name . '</option>';
}
?>