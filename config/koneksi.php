<?php
$conn = mysqli_connect("localhost", "root", "", "dbpos_koperasi");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>