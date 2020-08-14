<?php

$conn = mysqli_connect("localhost", "root", "", "ppdb_smk");

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak [] = $lemari;
    }
    return $kotak;
}

function terima($data) {
    global $conn;
    $id = $data['id_pdtr'];
    $terima_msk = $data['terima_msk'];

    for ($i=0; $i < count($id) ; $i++) {

        $data = "SELECT * FROM pendaftar WHERE id = '$id[$i]' ";
        $result = mysqli_query($conn, $data);
        $result_fix = mysqli_fetch_assoc($result);
        $nama = $result_fix['nama_lengkap'];
        $id_sah = $result_fix['id_user'];
        $nisn = $result_fix['nisn'];
        $sekolah_lama = $result_fix['sekolah_asal']; 
        $jurusan = $terima_msk[$i];   
        mysqli_query($conn, "INSERT INTO terima VALUES('', '$id_sah', '$nama', '$nisn', '$sekolah_lama', '$jurusan' )");      
        mysqli_query ($conn, "DELETE FROM pendaftar WHERE id = '$id[$i]' ");

    }

    return mysqli_affected_rows($conn);



}

?>