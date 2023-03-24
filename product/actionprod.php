<?php
include_once("../connect.php");

if (isset($_POST['submit_products'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT into products (name, quantity, price) VALUES
    ('$name', '$quantity', '$price')";

    $query = $conn->query($sql) or die($conn->error);

    $_SESSION['success']= "Product successfully added";
    header("location: ../product.php");
}

?>