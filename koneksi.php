<?php

$host = 'localhost';
$username = 'root';
$password = 'password';
$db = 'db_karken_lfsp2020';

$link = mysqli_connect($host, $username, $password);

if (!$link) {
    die('Error koneksi ke database');
} else {
    mysqli_select_db($link, $db);
}