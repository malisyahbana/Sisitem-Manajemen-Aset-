<?php

include 'config.php';

if (isset($_POST['login'])) {
    $user = $link->real_escape_string($_POST['username']);
    $pass = $link->real_escape_string($_POST['password']);

    $pass = md5($pass);
    $query = $link->query("SELECT * FROM tdatapeg WHERE Username = '$user' AND Password = '$pass' ");
    $data = $query->fetch_array();
    $username = $data['Username'];
    $password = $data['Password'];
    $usr = $data['Npeg'];
    $nama = $data['Npeg'];

    if ($user == $username && $pass == $password) {

        $_SESSION['user'] = $username;
        $_SESSION['Npeg'] = $usr;
        $_SESSION['Npeg'] = $nama;

        echo "<script>alert('Anda berhasil login. Sebagai : $usr');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../admin/index.php'>";
    } else {

        echo "<script>alert('Username dan Password Tidak Ditemukan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=../Login.php'>";
    }
}
