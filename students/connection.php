<?php
$connection = mysqli_connect("localhost","root","","data");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MYSQL :" . mysqli_connect_errno();
    exit();
}
?>