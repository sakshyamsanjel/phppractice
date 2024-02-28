<?php
include 'connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM employee_table WHERE employee_id = '$id'";
    $result = mysqli_query($connection, $query);
    if($result){
        echo "Employee record deleted successfully.";
    }else{
        echo "Error deleting employee record: " . mysqli_error($connection);
    }
}else{
    echo "Invalid employee id";
    exit;
}
mysqli_close($connection);
?>