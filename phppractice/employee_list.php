<?php
include 'connection.php';
$query = "SELECT * FROM employee_table";
$result = mysqli_query($connection, $query);
?>

<html>
<head>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Department</th>
                <th>Location</th>
                <th>Project</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['employee_id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['department'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "<td>" . $row['project'] . "</td>";
                    echo "<td>
                        <a href='employee_edit.php?id=" . $row['employee_id'] . "'>Edit</a>
                        <a href='employee_delete.php?id=" . $row['employee_id'] . "'>Delete</a>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>No data found</td></tr>";
            }
            mysqli_close($connection);
            ?>
        </tbody>
    </table>
</body>
</html>