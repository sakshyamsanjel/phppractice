<?php
include 'connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM employee_table WHERE employee_id = '$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $name = $row['name'];
    }else{
        echo "Employee record not found.";
        exit;
    }
}else{
    echo "Invalid employee id";
    exit;
}
mysqli_close($connection);
?>

<html>
<head>
    <title>Edit Employee</title>
</head>
<body>
    <h1>Edit Employee</h1>
    <form method="POST" action="employee_edit.php?id=<?php echo $id; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name;?>"><br><br>
        <label for="department">Department:</label>
        <input type="text" name="department" value="<?php echo $row['department'];?>"><br><br>
        <label for="project">Project:</label>
        <input type="text" name="project" value="<?php echo $row['project'];?>"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $new_name = $_POST['name'];
    $query = "UPDATE employee_table SET name = '$new_name' WHERE employee_id = '$id'";
    $result = mysqli_query($connection, $query);
    if($result){
        header("Location: employee_list.php");
    }else{
        echo "Error updating employee record.";
    }
}
mysqli_close($connection);
?>