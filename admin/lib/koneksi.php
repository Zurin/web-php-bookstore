<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="sql12.freesqldatabase.com";
    $user ="sql12202559";
    $pass = "Xs7Ukr88H9";
    $dbName = "sql12202559";

    $konek = mysqli_connect($host,$user,$pass);
    if(!$konek)
        die("Gagal koneksi...");

    $hasil = mysqli_select_db($konek,$dbName);
