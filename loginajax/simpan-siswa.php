<?php
//include koneksi database
include('koneksi.php');

//get data dari form 
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat = $_POST['alamat'];

//====cara 1=====
//query insert data ke dalam database
// $query = mysqli_query($connection, "INSERT INTO tbl_siswa (id_siswa, nisn, nama_lengkap, alamat) VALUES ('', '$nisn', '$nama_lengkap', '$alamat')");
// // echo $query;
// // die();

// //kondisi pengecekan apakah data berhasil
// if($query==true) {
//     //redirect ke halaman index.php 
//     header("location: index.php");

// } else {
//     //pesan error gagal insert data
//     echo "data gagal disimpan!";

// }

$query = "INSERT INTO tbl_siswa (nisn, nama_lengkap, alamat) VALUES ('$nisn', '$nama_lengkap', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>