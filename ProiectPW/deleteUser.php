<?php 
    $name = $_GET['name'];
    $link = mysqli_connect("localhost", "root", "", "userregistration");

    $sql = "DELETE FROM usertable WHERE name = $name"; 

    if ($link->query($sql) === TRUE) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error deleting record: " . $link->error;
    }
?>