<?php

if(isset($_POST['add'])) {
	$product_name = $_POST['product_name'];
	$product_id = $_POST['product_id'];
	$product_price = $_POST['product_price'];
	$product_quantity = $_POST['product_quantity'];
	$supplier_id = $_SESSION['supplier_id'];

	$sql = "INSERT INTO products (name, price, quantity, supplier_id) VALUES ('$product_name', '$product_price', '$product_quantity', '$supplier_id')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
        header("location: ../supplier_products.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}