<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="localhost";
    $user ="id2079982_root";
    $pass = "immortalblood";
    $dbName = "id2079982_db_buku";

    $konek = mysqli_connect($host,$user,$pass);
    if(!$konek)
        die("Gagal koneksi...");

    $hasil = mysqli_select_db($konek,$dbName);
