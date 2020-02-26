<?php
session_start();

header('location:index.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');
$oldusr = $_POST['olduser'];
$oldpass = $_POST['oldpassword'];

$name=$_POST['userupdate'];
$password=$_POST['userupdate2'];
$id = $_POST['usrid'];

$s = " select * from usertable where name = '$oldus' && password='$oldpass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);


$reg="UPDATE usertable SET name = '$name', password = '$password' WHERE name = '$oldusr'";
mysqli_query($con, $reg);
echo "edit complete";
header('location:index.php#userupdate2');
?>