<?php
include 'connection.php';
$query = "SELECT * FROM stdsmgmt";
$result = mysqli_query($connection, $query);
?>

<html>
<head>
    <title>Student ID</title>
<link rel="stylesheet" type="text/css" href="data.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th> ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
                <th>Faculty</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <h1>Student ID</h1>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['f_name'] . "</td>";
                    echo "<td>" . $row['l_name'] . "</td>";
                    echo "<td>" . $row['Username'] . "</td>";
                    echo "<td>" . $row['faculty'] . "</td>";
                    echo "<td>" . $row['address'] . "</td>";
                    echo "<td>
                        <a href='edit.php?id=" . $row['id'] . "'>Edit</a>
                        <a href='delete.php?id=" . $row['id'] . "'>Delete</a>
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