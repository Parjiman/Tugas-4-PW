<?php
    //variabel untuk menampung data dari index.html
    $sticker = $_POST['sticker'];
    $kaos = $_POST['kaos'];
    $jacket =$_POST['jacket'];

    //harga masing"produk
    define('HARGA_STICKER',7500);
    define('HARGA_KAOS',35000);
    define('HARGA_JACKET',55000);

    //total harga
    $total = (HARGA_STICKER * $sticker) + (HARGA_KAOS * $kaos) + (HARGA_JACKET * $kaos);

    $diskon = 0;
    // $pesan_diskon = '0%';

    //cek total untuk menentukan diskon
    if ($total >= 50000 && $total < 75000){
        $diskon = 0.05; //diskon 5%
        $pesan_diskon = '5%';
    }elseif ($total >= 75000 && $total <100000) {
        $diskon = 0.1; //diskon 10%
        $pesan_diskon = '10%';
    }elseif ($total > 100000) {
        $diskon = 0.15; //diskon 15%
        $pesan_diskon = '15%';
    }

    // switch($total) {
    //     case $total >= 50000 && $total < 75000 :
    //         $diskon = 0.05;
    //         $pesan_diskon = '5%';
    //     break;
    //     case $total >= 75000 && $total < 100000 :
    //         $diskon = 0.1;
    //         $pesan_diskon = '10%';
    //     break;
    //     case $total >= 100000 :
    //         $diskon = 0.15;
    //         $pesan_diskon = '15%';
    //     break;
    // }

    $subtotal = $total - ($total * $diskon);

    $fp = fopen('faktur.txt','a');
    $isi_file = "$sticker Sticker -#-".(HARGA_STICKER * $sticker)."-#-".
                "$kaos Kaos -#-".(HARGA_KAOS * $kaos)."-#-".
                "$jacket Jacket -#-".(HARGA_JACKET * $jacket)."-#-".
                "$total -#- $pesan_diskon -#- $subtotal\n";
    fwrite($fp,$isi_file);
    fclose($fp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Online</title>
        <style type="text/css">
            .tanda {background-color : #cfcfcf;}
        </style>
</head>
<body>
            <strong>EDDIE ONLINE STORE DATA PEMBELIAN</strong></br>
<table border="1">
                <tr class="tanda">
                    <th>Barang</th> <th>Jumlah</th> <th>Total</th>
                </tr>

                <tr>
                    <td>Sticker</td>
                        <td><?php echo $sticker?></td>
                        <td><?php echo ($sticker * HARGA_STICKER)?></td>
                </tr>

                <tr>
                    <td>Kaos</td>
                        <td><?php echo $kaos?></td>
                        <td><?php echo ($kaos * HARGA_KAOS)?></td>
                </tr>

                <tr>
                    <td>Jacket</td>
                        <td><?php echo $jacket?></td>
                        <td><?php echo ($jacket * HARGA_JACKET)?></td>
                </tr>

                <tr class="tanda">
                    <td colspan = "2">TOTAL</td>
                    <td><?php echo $total?></td>
                </tr>

                <tr class = "tanda">
                    <td colspan = "2">DISKON</td>
                    <td><?php echo $pesan_diskon?></td>
                </tr>

                <tr class = "tanda">
                    <td colspan = "2">SUBTOTAL</td>
                    <td><?php echo $subtotal?></td>
                </tr>
</table>
<p><a href="faktur.php">Lihat Faktur</a></p>
</body>
</html>