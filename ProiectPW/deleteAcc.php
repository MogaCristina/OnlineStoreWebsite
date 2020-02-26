<?php
session_start();

header('location:index.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con,'userregistration');

$name=$_POST['userdel'];

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);
if($name == "admin")
{
    echo "Can't delete admin";
}
else{
$reg="DELETE FROM usertable WHERE name = '$name'";
mysqli_query($con, $reg);
echo "Deletion complete";
header('location:index.php#userdel');
}
?>