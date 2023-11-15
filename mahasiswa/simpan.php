<?php
 include 'koneksi.php';
 $nim = $_POST['nim'];
 $nama = $_POST['nama'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $jurusan = $_POST['jurusan'];
 $alamat = $_POST['alamat'];

 $query = "INSERT INTO mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
 mysqli_query($koneksi,$query);
 header("location:index.php");

?>