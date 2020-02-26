<?php
session_start();

header('location:index.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'product');

$name=$_POST['item-namedel'];

$s = " select * from products where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($name == "admin")
{
    echo "cant delete admin !";
}
else{
$reg="DELETE FROM products WHERE name = '$name'";
mysqli_query($con, $reg);
echo "Deletion complete";
header('location:index.php#userdel');
}
?>