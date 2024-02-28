
<?php
include 'connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = " SELECT * From users WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    if($row){
        $f_name = $row['f_name'];
        $m_name = $row['m_name'];
    }else{
        echo "Student record not found.";
        exit;
    }
}else{
    echo "Invalid student id";
    exit;
}
    mysqli_close($connection);
    ?>
   <html>
    <head>
        <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form method="POST" action="">
        <label for="f_name">First_name:</label>
        <input type="text"name="f_name" value="<?php echo $f_name;?>"><br><br>
        <label for="m_name">Middle Name:</label>
        <input type="text" name="m_name"value="<?php echo $m_name;?>"><br><br>
        <input type="submit" name="submit" value="update">
</form>
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $new_f_name = $_POST['f_name'];
    $new_m_name = $_POST['m_name'];
    $query = "UPDATE users SET f_name = '$new_f_name', m_name = '$new_m_name' WHERE id = '$id'";
    $result = mysqli_query($connection, $query);
    if($result){
        //echo "Student record updated successfully";
        header("Location: student_list.php");
    }else{
        echo "Error updating students record:";
    }

}
mysqli_close($connection);
?>