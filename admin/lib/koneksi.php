<?php
    date_default_timezone_set("Asia/Jakarta");
    $host ="sql12.freemysqlhosting.net";
    $user ="sql12200915";
    $pass = "P1BrYT9hmJ";
    $dbName = "sql12200915";

    $konek = mysqli_connect($host,$user,$pass);
    if(!$konek)
        die("Gagal koneksi...");

    $hasil = mysqli_select_db($konek,$dbName);
