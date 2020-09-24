<?php
include 'koneksi.php';  

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query("select * from tb_datamahasiswa where nim='$username' and no_telepon='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    session_start();
    $_SESSION['nim'] = $username;
    $_SESSION['status'] = "login";

    header("location:/pemira/pemilihan.html");
} else {
    header("location:/pemira/login.php");
}
?>