<?php
$host = 'localhost';
$user = 'root';
$pass = '13421342';
$db   = 'db_laporan_fasilitas';

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $koneksi = new mysqli($host, $user, $pass, $db);
    $koneksi->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    die('Koneksi database gagal');
}
