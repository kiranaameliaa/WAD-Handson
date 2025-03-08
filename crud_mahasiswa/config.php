<?php
$conn = mysqli_connect("localhost:8111", "root", "", "wad_handson");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
