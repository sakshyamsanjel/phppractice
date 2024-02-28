<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dass.css">
    <title>Document</title>
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT f_name FROM stdsmgmt";
$result = $connection->query($sql);

session_start(); 

if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo  "username".$username;
    echo $_SESSION["login"];
} else {
    $username = "Guest";
    // echo $username;
    // echo $_SESSION["login"];
}
?>
<header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo">
        </div>
        <div class="buttons">
            <a href="./login.php"> <button class="button1">Log Out</button></a>
            
          </div>
    </header>
    <div class="container1">
        <nav class="row">
            <ul class="van">
                <li>Home</li>
                <li>About Us</li>
                <li>Contact Us</li>
                <a href="./data.php" class="data"><li>Data</li></a>
            </ul>
        </nav>
    </div>
    <banner>
    <div class="description">
        <h1>Student Management System </h1>
        <p>Schools and Universities are the foundation of knowledge and an educational body on which students rely upon. Therefore, they need to maintain a proper database of its students to keep all the updated records and easily share information with students.

            Most schools and Universities count on an advanced software tool knows as 'Student Information System (SIS)' to keep all their student records and administrative operations including, examinations, attendance, and other activities.</p>
    </div>
</banner>

<banner1>

</banner1>
</body>
</html>