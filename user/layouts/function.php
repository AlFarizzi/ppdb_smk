<?php
$conn = mysqli_connect("localhost", "root", "", "ppdb_smk");
date_default_timezone_get();

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

    function daftar($data) {
        global $conn;
        
        $nama = $data['nama_lengkap'];
        $sekolah_lama = $data['sekolah_asal'];
        $nisn = $data['nisn'];
        $nilai = $data['nilai_akhir'];
        $jurusan_1 =strtolower($data['jurusan_1']);
        $jurusan_2 = strtolower($data['jurusan_2']);
        $id_user = $_SESSION['id_user'];
        $nisn_user = $_SESSION['nisn'];
        $nama_user = $_SESSION['nama'];
        $tgl_daftar = date('Y-m-d H:m:s');

        // Cek Nilai
        if ($nilai > 100) {
            echo "<script>
                  alert('Nilai Tidak Valid !!');
                  document.location.href = 'index.php';
                 </script>";
            exit;
        }

        // Cek data kosong
        if (empty($nama) || empty($sekolah_lama) || empty($nisn) || empty($nilai)) {
            echo "<script>
                  alert('Isi Semua Data !!');
                  document.location.href = 'index.php';
                 </script>";
            exit;
            
        }

        // Cek Data Valid 
        if ($nisn !== $nisn_user || $nama !== $nama_user ) {
            echo "<script>
                    alert('Data Tidak Valid');
                    document.location.href = 'index.php';
                </script>";
                exit();
        }
        // Cek Sudah Terdaftar / Belum ?
        $ada = "SELECT nama_lengkap, nisn FROM pendaftar WHERE nama_lengkap = '$nama' || nisn = '$nisn' ";
        $q_ada = mysqli_query($conn,$ada);
        if (mysqli_num_rows($q_ada) > 0) {
            return false;
            header("Location:index.php");
            exit();
        }

        // Cek Nilai
        if ($nilai >= 85 && $nilai <= 100) {
            if ($jurusan_1 == $jurusan_2) {
                $jr = $jurusan_1;
            }

            elseif($jurusan_1 === 'rekayasa perangkat lunak' && $jurusan_2 === 'multimedia' || $jurusan_1 === 'multimedia' && $jurusan_2 === 'rekayasa perangkat lunak') {
                $jr = 'rekayasa perangkat lunak';
            }

            elseif($jurusan_1 === 'rekayasa perangkat lunak' && $jurusan_2 === 'teknik komputer & jaringan' || $jurusan_1 === 'teknik komputer & jaringan' && $jurusan_2 === 'rekayasa perangkat lunak' ) {
                $jr = 'rekayasa perangkat lunak';
            }

            elseif ($jurusan_1 === 'multimedia' && $jurusan_2 === 'teknik komputer & jaringan' || $jurusan_1 === 'teknik komputer & jaringan' && $jurusan_2 === 'multimedia') {
                $jr = 'teknik komputer & jaringan';
            }

            $stat = 'Menunggu Keputusan';
        }

        elseif ($nilai >= 80 && $nilai <= 84) {
            if ($jurusan_1 == $jurusan_2) {
                $jr = $jurusan_1;
            }

            elseif($jurusan_1 === 'rekayasa perangkat lunak' && $jurusan_2 === 'multimedia' || $jurusan_1 === 'multimedia' && $jurusan_2 === 'rekayasa perangkat lunak') {
                $jr = 'rekayasa perangkat lunak';
            }

            elseif($jurusan_1 === 'rekayasa perangkat lunak' && $jurusan_2 === 'teknik komputer & jaringan' || $jurusan_1 === 'teknik komputer & jaringan' && $jurusan_2 === 'rekayasa perangkat lunak' ) {
                $jr = 'teknik komputer & jaringan';
            }

           elseif ($jurusan_1 === 'multimedia' && $jurusan_2 === 'teknik komputer & jaringan' || $jurusan_1 === 'teknik komputer & jaringan' && $jurusan_2 === 'multimedia') {
                $jr = 'teknik komputer & jaringan';
            }

            $stat = 'Menunggu Keputusan';
        }

        elseif ($nilai >= 60 && $nilai <= 79) {
            if ($jurusan_1 == $jurusan_2) {
                $jr = $jurusan_1;
            }

            elseif($jurusan_1 === 'rekayasa perangkat lunak' && $jurusan_2 === 'multimedia' || $jurusan_1 === 'multimedia' && $jurusan_2 === 'rekayasa perangkat lunak') {
                $jr = 'multimedia';
            }

            elseif($jurusan_1 === 'rekayasa perangkat lunak' && $jurusan_2 === 'teknik komputer & jaringan' || $jurusan_1 === 'teknik komputer & jaringan' && $jurusan_2 === 'rekayasa perangkat lunak' ) {
                $jr = 'teknik komputer & jaringan';
            }

            elseif ($jurusan_1 === 'multimedia' && $jurusan_2 === 'teknik komputer & jaringan' || $jurusan_1 === 'teknik komputer & jaringan' && $jurusan_2 === 'multimedia') {
                $jr = 'multimedia';
            }

            $stat = 'Menunggu Keputusan';
        }


        elseif($nilai < 60) {
            $jr = null;
            $stat = "Ditolak";
        }

        // Input --> DB
        $jurusan_1 = strtolower($data['jurusan_1']); 
        $jurusan_2 = strtolower($data['jurusan_2']);
        $q_insert = "INSERT INTO pendaftar VALUES ('', '$id_user', '$nama', '$sekolah_lama', '$nisn', '$nilai', '$jurusan_1', '$jurusan_2', '$jr', '$stat', '$tgl_daftar') ";
        $insert = mysqli_query($conn, $q_insert);

        return mysqli_affected_rows($conn);

    }



?>