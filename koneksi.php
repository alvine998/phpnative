<?php
    //koneksi ke sql
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "pemira";
    mysqli_connect($server,$username,$password,$database) or die("gagal, db tidak ditemukan");
?>