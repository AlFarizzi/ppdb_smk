<?php
$conn = mysqli_connect("localhost", "root", "root", "ppdb_smk");

function query($query) {
    global $conn;
    $kotak = [];
    $result  = mysqli_query($conn, $query);

    while($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

function register($data) {
    global $conn;

    $nama =  htmlspecialchars(strtolower($data['nama'])); 
    $nisn = htmlspecialchars(strtolower($data['nisn']));
    $username = htmlspecialchars(strtolower($data['username']));
    $email = htmlspecialchars(strtolower($data['email']));
    $password = htmlspecialchars(strtolower($data['password']));
    $pass_confir = htmlspecialchars(strtolower($data['password_confirmation']));

    // Cek Apakah Data Diisi
    if ( empty($nama) || empty($nisn) || empty($username) || empty($email) || empty($password) || empty($pass_confir) ) {
        echo "<script>
            alert('Isi Semua Data Kamu !!');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

    // Cek apakah Nama Sudah ada Di DB
    $nama_ada = "SELECT nama, nisn, username FROM user WHERE username = '$username' || nisn = '$nisn' || nama = '$nama' ";
    $query_ada = mysqli_query($conn, $nama_ada);
    if (mysqli_num_rows($query_ada) > 0) {
        
        echo "<script>
            alert('Kamu Sudah Terdaftar');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

    // Cek Apakah Password Sama
    if ($password !== $pass_confir) {
        echo "<script>
            alert('Password Tidak Sama');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

    // Enkripsi Password
    $pw_hash = md5($password);

    // Input Data
    $q_regis = "INSERT INTO user VALUES (null, '$nama', '$nisn', '$username', '$email', '$pw_hash')";
    $q_regis2 = mysqli_query($conn, $q_regis);

    return mysqli_affected_rows($conn);

}

function login($data) {
    global $conn;

    $email = $data['email'];
    $password = md5($data['password']);

    $sama = "SELECT * FROM user WHERE email = '$email' ";
    $sama2 = mysqli_query($conn, $sama);
    $sama3 = "SELECT * FROM admin WHERE email = '$email' ";
    $sama4 = mysqli_query($conn, $sama3);

    if  (mysqli_num_rows($sama2) > 0) {
        $result = mysqli_fetch_assoc($sama2);
        if ($password === $result['password']) {
            $_SESSION['id_user'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            $_SESSION['nisn'] = $result['nisn'];
            $_SESSION['nama'] = $result['nama'];
            $_SESSION['login_user'] = true;
            return "user_login";
        }
        else {
            return false;
        }
    }

    elseif (mysqli_num_rows($sama4) > 0) {
        $result2 = mysqli_fetch_assoc($sama4);
        if ($password === $result2['password']) {
            $_SESSION['nama_admin'] = $result2['nama_admin'];
            $_SESSION['username'] = $result2['username'];
            $_SESSION['email'] = $result2['email'];
            $_SESSION['login_admin'] = true;
            return "admin_login";
        }

        else {
            return  false;
        }
    }

    else {
        echo "<script>
            alert('Kamu Belum Terdaftar');
            document.location.href = 'index.php';
        </script>";
        exit();
    }

}



?>