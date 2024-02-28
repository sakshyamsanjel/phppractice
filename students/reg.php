<?php
include 'connection.php';
if (!$connection) {
    echo "No connection with database";
} else {
    if (isset($_POST['submit'])) {
        // Data validation
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $faculty = $_POST['faculty'];

        if (empty($f_name) || empty($l_name) || empty($username) || empty($password) || empty($address) || empty($faculty)) {
            echo "Please fill in all the fields.";
        } 

            // Insert the data into the database using the hashed password
            $query = "INSERT INTO stdsmgmt (f_name, l_name, Username, faculty, address, Password) 
                      VALUES ('$f_name', '$l_name', '$username', '$faculty', '$address', '$Password')";

            $res = mysqli_query($connection, $query);

            if ($res) {
                echo "Data inserted"; 
                header("Location: login.php");
                exit();
            } else {
                echo "Error in data insert";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="POST" action="">
            <p id="heading">Registration Form</p>
            <div class="field">
                <input autocomplete="off" placeholder="First Name" class="input-field" type="Name" name="f_name">
            </div>
    
            <div class="field">
                <input autocomplete="off" placeholder="Last Name" class="input-field" type="Name" name="l_name" required>
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="Username" class="input-field" type="text" name="username" required>
            </div>
    
               <div class="field">
                <input autocomplete="off" placeholder="Faculty" class="input-field" type="Name" name="faculty" required>
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="Address" class="input-field" type="Name" name="address" required>
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="Password" class="input-field" type="password" name="password" required>
            </div>
            <div class="btn">
                <button type="submit" class="button1" name="submit">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
