<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER FORM</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>Sistem Informasi Mahasiswa</h1>
        </div>
        <style>

        body{
            margin:0;
        }
        header {
        background-color: #2c3e50;
        color: #fff;
        text-align: center;
        padding: 20px 0;
        
        }

        header h1 {
            margin: 0;
        }

        nav {
            background-color: #7f8c8d;
            height : 25px
        }

        .container {
            width: 90%;
            margin: 0 auto;
            overflow: hidden;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        li {
            display: inline;
            margin-right: 20px;
        }

        a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #f0f0f0;
        }
        h2{
            text-align: center;
        }
        form {
            width: 50%;
            margin: 20px auto;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: auto;
            margin-right: auto;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 8px 15px;
            text-decoration: none;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        </style>
    </header>
    
    <nav>
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Mahasiswa</a></li>
            </ul>
        </div>
    </nav>

        <h2>Form Data Mahasiswa</h2>
        
    </form>
    <table>
       <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>

       </tr> 

       <?php
        include 'koneksi.php';
        $mahasiswa = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
        $no=1;
        foreach ($mahasiswa as $row){
            $jenis_kelamin = $row['jenis_kelamin']=='p'?'Perempuan':'Laki-Laki';
            echo "<tr>
            <td>$no</td>
            <td>".$row['nim']."</td>
            <td>".$row['nama']."</td>
            <td>".$jenis_kelamin."</td>
            <td>".$row['jurusan']."</td>
            <td>".$row['alamat']."</td>
           
            </tr>";
            $no++;
        }
       ?>
    </table>
    <!-- <p></p>
    <button class="btn">
        <a href="form-input.php">Masukkan Data Lainnya</a>
    </button> -->
</body>
</html>