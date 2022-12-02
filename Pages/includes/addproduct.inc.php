<?php
session_start();

if(isset($_POST['add'])) {
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_quantity = $_POST['product_quantity'];
	$product_detail = $_POST['product_detail'];
	$supplier_id = $_SESSION['supplier_id'];

	echo $product_name;
	echo $product_price;
	echo $product_detail;
	echo $product_quantity;
	echo $supplier_id;

	require_once 'dbConfig.inc.php';

	$sql = "INSERT INTO products (product_name, price, quantity, detail, supplier_id) VALUES ('$product_name', '$product_price', '$product_quantity', '$product_detail', '$supplier_id')";

	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
        header("location: ../supplier_products.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	// I was just trying something different

	// $sql = "INSERT INTO products (product_name, price, quantity, detail, supplier_id) VALUES (?, ?, ?, ?, ?);";
    // $stmt = mysqli_stmt_init($conn);

    // if (!mysqli_stmt_prepare($stmt, $sql)) {
    //     header("location: ../supplier_products.php?error=stmtfailed");
    //     exit();
    // }

    // mysqli_stmt_bind_param($stmt, "sssss", $product_name, $product_price, $product_quantity, $product_detail, $supplier_id);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_close($stmt);

	// echo $product_name;
	// echo $product_price;
	// echo $product_detail;
	// echo $product_quantity;
	// echo $supplier_id;

	// This is commented to just see the variables with "echo"
    // header("location: ../supplier_products.php?error=none");
    // exit();
}