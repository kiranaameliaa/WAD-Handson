<?php
include 'config.php';

$id = $_GET['id'];

if (mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id")) {
    header("Location: index.php");
} else {
    echo "Gagal menghapus data!";
}
?>
