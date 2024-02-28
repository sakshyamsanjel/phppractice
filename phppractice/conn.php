<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Employee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['submit']))
{
    $Name=$_POST['name'];
    $Username=$_POST['username'];
    $Department=$_POST['department'];
    $Location=$_POST['location'];
    $Project=$_POST['project'];
    $Password=$_POST['password'];
        $sql="INSERT INTO employee_table(Name,Username,Department,Location,Project,Password)values('$Name','$Username','$Department','$Location','$Project','$Password')";
    if ($conn->query($sql) === TRUE)
    {
      echo "Registration successful!";
      header("Location: login.php");
    } 
    else 
    {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>