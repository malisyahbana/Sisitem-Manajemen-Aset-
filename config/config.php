<?php
date_default_timezone_set('Asia/Jakarta');

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Konfigurasi DataBase
include_once "database.php";
$link = mysqli_connect($con['host'], $con['user'], $con['pass'], $con['db']);
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

// Konfigurasi baseurl
function base_url($url = null)
{
    $env_base = getenv('BASE_URL');
    if ($env_base !== false && $env_base !== '') {
        $base_url = rtrim($env_base, '/');
    } else {
        $base_url = "http://localhost/asetdisdik";
    }

    if ($url != null) {
        return $base_url . "/" . ltrim($url, '/');
    } else {
        return $base_url;
    }
}
?>
