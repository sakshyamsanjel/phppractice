<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Document</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form action=" " method="POST">
        <label for="f_name">First Name</label>
        <input type="text" name="f_name" id="f_name">
        <label for="m_name">Middle Name</label>
        <input type="text" name="m_name" id="m_name">
        <label for="address">Address</label>
        <input type="text" name="address" id="address">
        <label for="gender">Gender</label>
        <input type="text" name="gender" id="gender">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <label for="is_active">Is active</label>
        <input type="checkbox" name="is_active">
        <br>    
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
<?php
include 'connection.php';
if(!$connection){
    echo "No connection with database";
}else{
    if(isset($_POST['submit'])){
        $firstName = $_POST['f_name'];
        $middleName = $_POST['m_name'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $password = $_POST['password'];
        $isactive = isset($_POST['is_active']);
        $query = "INSERT INTO users(f_name, m_name, address, gender, password, is_active) VALUES ('$firstName', '$middleName','$address','$gender','$password','$isactive')";
        echo $query;
        $res = mysqli_query($connection, $query);
        echo $res;
        if ($res){
            echo "Data inserted";
        }else {
            echo "Error in data insert";
        }
        }
    
}

?>