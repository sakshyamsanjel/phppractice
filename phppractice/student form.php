<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form action="" method="POST">
        <label for="f_name">FIrst name</label>
        <input type="text" name="f_name" id="f_name">
        <label for="l_name">Last name</label>
        <input type="text" name="l_name" id="l_name">
        <break>
        <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
include 'connection.php';
if(!$connection){
    echo"No connection with database";
}else{

    if(isset($_POST['submit'])){
        $firstName = $_POST['f_name'];
        $lastName = $_POST['l_name'];
        $query = "INSERT INTO tbl_students (std_first_name,std_last_name)VALUES('$firstName','$lastName')";
        echo $query;
        $res = mysqli_query($connection, $query);
        echo $res;
        if($res){
            echo"data inserted";
        }else{
            echo"error in data inserted";
        }
    }
}
?>