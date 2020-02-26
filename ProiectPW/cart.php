<?php
	session_start();
	$name = $_POST[''];
    $price = $_POST[''];
    $quantity = $_POST[''];

    $product = array($name,$price,$quantity);

    $_SESSION[$name] = $product;

    header('location:index.php');
?>