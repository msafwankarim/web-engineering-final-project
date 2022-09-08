<?php
class Product
{
    public $name, $id, $detail, $description, $price, $category, $img_url;

    public static function makeProductFromRow($row)
    {
        $product = new Product();
        $product->name = $row["name"];
        $product->id = $row["id"];
        $product->detail = $row["product_detail"];
        $product->description = $row["description"];
        $product->price = $row["price"];
        $product->category = $row["category"];
        $product->img_url = $row["img_url"];
        
        return $product;
    }
}
