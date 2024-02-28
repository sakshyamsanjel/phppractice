<?php
include 'connection.php';

if (!$connection) {
    echo "No connection with the database";
} else {
    if (isset($_POST['submit'])) {
        $Name = $_POST['name'];
        $department = $_POST['department'];
        $location = $_POST['location'];
        $project = $_POST['project'];

        $query = "INSERT INTO employee_table(name, department, location, project) VALUES ('$Name', '$department', '$location', '$project')";
        $res = mysqli_query($connection, $query);

        if ($res) {
            echo "Data inserted";
        } else {
            echo "Error in data insert";
        }
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <h1>Add New Employee</h1>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="department">Department</label>
        <input type="text" name="department" id="department">
        <label for="location">Location</label>
        <input type="text" name="location" id="location">
        <label for="project">Project</label>
        <input type="text" name="project" id="project">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>






