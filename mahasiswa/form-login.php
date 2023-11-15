<?php
    include 'koneksi.php';
    $user = $_POST['username'];
    $password = $_POST['password'];
  
    //query untuk insert data
    $query = "SELECT * FROM user WHERE username=?";
    
    // Using prepared statements to prevent SQL injection
    $stmt = mysqli_prepare($koneksi, $query);
    mysqli_stmt_bind_param($stmt, "s", $user);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $userData = mysqli_fetch_assoc($result);
        if ($password  == $userData['password']) {
            if ($userData['status'] == "admin") {
                header("location: admin.php");
                exit();
            } else if ($userData['status'] == "user") {
                header("location: user.php");
                exit();
            }
        } else {
            echo "<script>
            alert('Password Tidak sesuai');window.location.href='index.php';
            </script>";
            exit();
        }
    } else {
        echo "<script>
        alert('Username Tidak Terdaftar');window.location.href='index.php';
        </script>";
        exit();
    }
?>
