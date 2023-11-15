<?
    include 'koneksi.php';
    //menyimpan data  ke dalam variable
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    //query untuk insert data
    $query = "UPDATE mahasiswa SET nim = '$nim',nama = '$nama',jurusan = '$jurusan',jenis_kelamin = '$jenis_kelamin',alamat = '$alamat' where id_mahasiswa = '$id_mahasiswa'";
    mysqli_query ($koneksi,$query);
    //mengalihkana ke halaman index.php
    header("location:admin.php");
?>