<?php
include 'koneksi.php';
$id_mahasiswa = $_GET['id_mahasiswa'];
$query = "DELETE from mahasiswa  where id_mahasiswa='$id_mahasiswa'";
mysqli_query($koneksi,$query);
header("location:index.php");
?>