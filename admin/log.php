<?php

include 'koneksiadm.php';  

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from tb_admin where username ='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    
    session_start();
    while( $ngecheck = mysqli_fetch_assoc($login) ){
        // $nama = $ngecheck['nama'];
        $_SESSION['username'] = $username;
        $_SESSION['nama'] = $ngecheck['nama'];;
    }

    // echo $_SESSION['nama'];
    // die;

    header("location:/pemira/admin/admin.php");
} else {
    header("location:/pemira/admin/index.php?pesan=gagal login");
}
?>