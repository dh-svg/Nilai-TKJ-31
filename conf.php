<?php
$hostdb = "localhost";
$userdb = "root";
$passwdb = "tkjtkj";
$namedb = "31_assessment";
$connect = mysqli_connect($hostdb, $userdb, $passwdb, $namedb);

if (mysqli_connect_errno()) {
    print "Kesalahan Pada Koneksi MYSQL: " . mysqli_connect_error();
    exit();
}