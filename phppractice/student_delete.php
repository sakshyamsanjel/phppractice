
<?php
include 'connection.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "DELETE From users WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    if($result){
        echo"Student record deleted successfully.";
    }else{
        echo "Error deleting student record:" .mysqli_error($connection);
    }
}else{
    echo "Invalid student id";
    exit;
}
    mysqli_close($connection);
    ?>