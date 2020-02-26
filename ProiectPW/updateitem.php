<?php
session_start();

//header('location:index.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'product');
$olditem = $_POST['olditem'];
$oldprice = $_POST['oldprice'];
$oldimg = $_POST['oldimg'];
$oldcat = $_POST['oldcat'];

$item=$_POST['itemname'];
$price=$_POST['itemprice'];
$img=$_POST['itemimg'];
$cat=$_POST['itemcat'];
$id = $_POST['itemid'];


$s = " select * from products where name = '$olditem' && price='$oldprice' && img='$oldimg' && cat='$oldcat'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


$reg="UPDATE products SET name = '$item', price = '$price', img = '$img', cat = '$cat' WHERE name = '$olditem'";
mysqli_query($con, $reg);
echo "edit complete";
header('location:index.php#userupdate2');
?>