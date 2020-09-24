<?php
include 'koneksi.php';  

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tb_datamahasiswa where nim='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($cek);

    $_SESSION['nim'] = $username;
    $_SESSION['nama'] = $data['nama'];

    header("location:/pemira/pemilihan.html");
} else {
    header("location:/pemira/login.php?pesan=gagal login");
}
?>