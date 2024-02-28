<!DOCTYPE>
<html>
    <head>
        <title>PHP form</title>
</head>
<body>
    <form method="POST"action="">
        <label for="fname">First name</label>
        <input type="text" name="fname" id="fname" required><br>
            <label for="lname">Last name</label>
            <input type="password" name="lname" id="lname" required><br>
            <input type="submit" value="submit"name="submit">
           </form>
</body>
</html>
<?php
if (isset($_GET['submit'])){
$first_name = $_GETS['fname'];
$last_name = $_GETS['lname'];
echo $first_name;
echo $last_name;
}
?>

