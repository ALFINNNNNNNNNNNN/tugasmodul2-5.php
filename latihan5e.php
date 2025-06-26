<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username dan password
    if ($username == "admin" && $password == "password") {
        header("Location: admin.php");
        exit();
    } else {
        echo "Username atau password salah.";
    }
}
?>

</body>
</html>
