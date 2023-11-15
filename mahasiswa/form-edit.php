<?php
    include 'koneksi.php';

    $id_mahasiswa = $_GET['id_mahasiswa'];
    $query = "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id_mahasiswa'";
    $mahasiswaQuery =  mysqli_query($koneksi, $query);
    $row = mysqli_fetch_array($mahasiswaQuery);
    $isLaki = $row['jenis_kelamin'] == 'L';

    function active_radio_button($value, $input){
        return $value === $input ? 'checked' : '';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
        }
        table td {
            padding: 8px;
        }
        table td:first-child {
            width: 120px;
        }
        input[type="text"],
        select {
            width: calc(100% - 6px);
            padding: 6px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="edit.php" method="post">
        <input type="hidden" value ="<?php echo $row['id_mahasiswa']?>" name="id_mahasiswa">
        <h2>Edit Data Mahasiswa</h2>
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" value="<?php echo $row['nim'] ?>" name="nim"></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" value="<?php echo $row['nama'] ?>" name="nama"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" <?php echo active_radio_button('L', $row['jenis_kelamin']) ?>>Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P" <?php echo active_radio_button('P', $row['jenis_kelamin']) ?>>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="jurusan">
                        <option value="<?php echo $row['jurusan'] ?>"><?php echo $row['jurusan'] ?></option>
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>
                    <input type="text" value="<?php echo $row['alamat'] ?>" name="alamat">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">SIMPAN</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
