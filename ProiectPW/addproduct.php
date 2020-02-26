<?php
session_start();

header('location:index.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'product');

$name=$_POST['item-name'];
$price=$_POST['item-price'];
$img=$_POST['item-img'];
$cat=$_POST['item-cat'];

$s = " select * from products where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num==1){
    echo "Product already in database!";
}
else{
    $reg="insert into products (name,price,img,cat) values ('$name', '$price','$img','$cat')";
    mysqli_query($con, $reg);
    echo "Added Successfully";
    header('location:index.php#item-namedel');
}
?>