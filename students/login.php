<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if (isset($_POST['submit'])) {
    // Use mysqli real escape string or prepared statement to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Using prepared statement is a better approach
    $stmt = $conn->prepare("SELECT Username, Password FROM stdsmgmt WHERE Username = ? AND Password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION["login"] = "OK";
        $_SESSION["username"] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect back to login with an error or display it on the same page
        $error = "Invalid username or password.";
       //  Option to redirect: header("Location: login.php?error=" . urlencode($error));
    }

    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="login-container">
    <h1>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="userName">User Name</label>
        <input type="text" name="userName" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <div class="signup-link">
        Don't have an account? <a href="register.php">Register</a>
    </div>
</div>
</body>
</html>
