<?php
include 'connection.php';

// Establish database connection
if (!$connection) {
    echo "No Connection with Database";
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Retrieve the existing information
        $query = "SELECT * FROM stdsmgmt WHERE ID = '$id'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
    }

    if (isset($_POST['submit'])) {
        // Capture edited values
        $First_Name = $_POST['f_name'];
        $Last_Name = $_POST['l_name'];
        $Username = $_POST['username'];
         $Faculty = $_POST['faculty'];
        $Address = $_POST['address'];

        // Perform the database update
        $query = "UPDATE stdsmgmt SET f_name = '$First_Name', l_name = '$Last_Name', faculty = '$Faculty', username ='$Username', address = '$Address' WHERE ID = '$id'";
        $res = mysqli_query($connection, $query);

        if ($res) {
            // Update successful
            echo "Data Edited Successfully!";
            header("Location: data.php");
            exit();
        } else {
            // Error handling for update failure
            echo "Error in data update: " . mysqli_error($connection);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Document</title>
</head>
<body>
<div class="container">
        <form method="POST" action="">
            <p id="heading">Update data</p>
            <div class="field">
                <input autocomplete="off" placeholder="First Name" class="input-field" type="Name" name="f_name" value="<?php echo $row['f_name'] ?>">
            </div>
    
            <div class="field">
                <input autocomplete="off" placeholder="Last Name" class="input-field" type="Name" name="l_name" value="<?php echo $row['l_name'] ?>">
            </div>


  


            <div class="field">
                <input autocomplete="off" placeholder="faculty" class="input-field" type="text" name="faculty" value="<?php echo $row['faculty'] ?>">
            </div>

            <div class="field">
                <input autocomplete="off" placeholder="address" class="input-field" type="text" name="address" value="<?php echo $row['address'] ?>">
            </div>
            <div class="btn">
                <button type="submit" class="button1" name="submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>