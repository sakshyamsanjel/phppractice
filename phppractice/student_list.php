<html>
    <head>
        <body>
        <table>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Password</th>
                    <th>Is active</th>
                    <th>Actions</th>
</tr>
</thead>
</body>
<?php
include 'connection.php';
$query = "SELECT *FROM users";
$result = mysqli_query($connection, $query);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id'],"</td>";
        echo "<td>".$row['f_name'],"</td>";
        echo "<td>".$row['m_name'],"</td>";
        echo "<td>".$row['address'],"</td>";
        echo "<td>".$row['gender'],"</td>";
        echo "<td>".$row['password'],"</td>";
        echo "<td>".$row['is_active'],"</td>";
        echo "<td>
        <a href ='student_edit.php?id=".$row['id']."'>Edit</a>
        <a href='student_delete.php?id=".$row['id']."'>Delete</a>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No data found</td></tr>";
}
mysqli_close($connection);
?>

    