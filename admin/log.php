<?php

include 'koneksiadm.php';  

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tb_admin where username ='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($cek);

    $_SESSION['username'] = $username;
    $_SESSION['nama'] = $data['nama'];

    header("location:/pemira/admin/admin.php");
} else {
    header("location:/pemira/admin/index.php?pesan=gagal login");
}
?>