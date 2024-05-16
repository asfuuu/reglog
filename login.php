<?php
require 'config.php';

if (isset($_POST["submit"])) {
    // Get input values
    $usernameemail = $_POST["usernameemail"];
    $password = $_POST["password"];
    
    // Validation
    if (empty($usernameemail) || empty($password)) {
        echo "<script>alert('Both username/email and password are required');</script>";
    } else {
        // Check if username or email exists
        $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$usernameemail' OR email='$usernameemail'");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            // Check if the password matches
            if ($password == $row["password"]) {
                $_SESSION["login"] = "true";
                $_SESSION["user_id"] = $row["id"];
                header("location: index.php");
                exit(); // Important to prevent further execution
            } else {
                echo "<script>alert('Wrong Password');</script>";
            }
        } else {
            echo "<script>alert('User not Registered');</script>";
        }
    }
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
    <h2>Login</h2>
    <form class="" action="" method="post" autocomplete="off">
        <label for="usernameemail">Username or Email:</label>
        <input type="text" name="usernameemail" id="usernameemail" required value=""><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required value=""><br>
        <button type="submit" name="submit">Login</button>
    </form>
    <br>
    <a href="registration.php">Registration</a>
</body>

</html>