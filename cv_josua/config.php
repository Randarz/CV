<?php
$host = 'localhost';
$db = 'cv';
$user = 'josua';
$pwd = 'apalah';

$conn = mysqli_connect($host, $user, $pwd, $db);

if (!$conn) {
    die('Gagal terhubung ke database' . mysqli_connect_error());
}
?>
