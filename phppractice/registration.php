<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .registration-container {
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .registration-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .registration-container label {
            display: block;
            margin-bottom: 10px;
        }
        .registration-container input[type="text"],
        .registration-container input[type="password"],
        .registration-container input[type="email"],
        .registration-container select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .registration-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .registration-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .registration-container .login-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="registration-container">
    <h2>Registration</h2>
    <form action="conn.php" method="POST">
        <label for="Name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="Name">Username:</label>
        <input type="text" name="username" id="username" required><br><br>
        
        <label for="department">Department:</label>
        <input type="text" name="department" id="department" required><br><br>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" required><br><br>

        <label for="project">Project:</label>
        <input type="text" name="project" id="project" required><br><br>

        <label for="Name">Password:</label>
        <input type="text" name="password" id="password" required><br><br>

        <input type="submit" name="submit"value="Register">
    </form>
    <div class="login-link">
            Already have an account? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>
