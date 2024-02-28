<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['userName'];
        $password = $_POST['password'];

        $auth = "SELECT Username, Password FROM employee_table WHERE Username = '$username' and Password = '$password'";
        $result = mysqli_query($conn, $auth);

        if ($result == false) {
            echo '<a href="Login.php">Error: cannot execute query</a>';
            exit;
        }

        $num_rows = mysqli_num_rows($result);
        if($num_rows == 1) {
            $_SESSION["login"] = "OK";
            $_SESSION["username"] = $username;
            $redirect = "dashboard.php";
        }
        else{
        $redirect = "Login.php";
        $error = "Invalid username or password.";
        }
      
        mysqli_free_result($result);
        mysqli_close($conn);

        header("Location: $redirect");
      exit();
      session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"]; 

            $_SESSION["username"] = $username;

            header("Location: dashboard.php");
            exit();
        }
    }
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .login-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container label {
            display: block;
            margin-bottom: 10px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container input[type="submit"],
        .login-container .signup-btn {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover,
        .login-container .signup-btn:hover {
            background-color: #45a049;
        }
        .login-container .signup-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
  <div class="login-container">
    <h1>Login</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="username">User Name</label>
        <input type="text" name="userName" required><br>
        <label for="password">Password</label>
        <input type="password" name="password" required><br>
        <input type="submit" name="submit" value="Login">
    </form>
    <div class="signup-link">
            Don't have an account? <a href="employee_form.php">Register</a>
        </div>
    </div>
</body>
</html>