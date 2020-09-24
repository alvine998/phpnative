<?php
    //koneksi ke sql
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "pemira";
    
    $koneksi = mysqli_connect($host,$username,$password,$db);

    if(!$koneksi) {
		die("Koneksi gagal : ".mysql_connect_error());
	}
?>