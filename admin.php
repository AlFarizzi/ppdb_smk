<?php
require 'function.php';
    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $query = "INSERT INTO admin VALUES ('', '$nama', '$username', '$email', '$password')";
        mysqli_query($conn, $query);

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <input type="text" name="nama" id="" placeholder="nama">
    <input type="text" name="username" id="" placeholder="username">
    <input type="email" name="email" id="" placeholder="email">
    <input type="password" name="password" id="" placeholder="passsword">
    <button type="submit" name="daftar">dftr</button>
</form>

</body>
</html>