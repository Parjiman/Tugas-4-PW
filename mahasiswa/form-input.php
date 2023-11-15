<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #f4f4f4;
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
        input[type="text"], select {
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
        h2{
            text-align : center;
        }
    </style>
</head>
<body>
    <form method="post" action="simpan.php">
        <h2>Form Input Data Mahasiswa</h2>
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nim" required></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" required>Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="P" required>Perempuan
                </td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td>
                    <select name="jurusan" id="" required>
                        <option value="" disabled selected>Pilih Jurusan</option>
                        <option value="TEKNIK INFORMATIKA">TEKNIK INFORMATIKA</option>
                        <option value="TEKNIK MESIN">TEKNIK MESIN</option>
                        <option value="TEKNIK KIMIA">TEKNIK KIMIA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat" id="" required></td>
            </tr>
            <tr>
                <td colspan="2"><button type="submit">SIMPAN</button></td>
            </tr>    
        </table>
    </form>
</body>
</html>
