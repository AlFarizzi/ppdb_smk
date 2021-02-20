<?php

$conn = mysqli_connect("localhost", "root", "root", "ppdb_smk");
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $insert = "INSERT INTO terima VALUES ('', '$nama', '$jurusan' )";
    mysqli_query($conn, $insert);
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
    <input type="text" name="nama" id="">
    <input type="text" name="jurusan" id="">
    <button type="submit" name="kirim">kirim</button>
</form>

</body>
</html>