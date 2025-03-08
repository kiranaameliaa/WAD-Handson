<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = "INSERT INTO mahasiswa (nama, nim, jurusan) VALUES ('$nama', '$nim', '$jurusan')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger text-center'>Gagal menambahkan data!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="aset/Style/app.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">DATA MAHASISWA 2025</a>
        </div>
    </nav>

    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Tambah Mahasiswa</h2>
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </form>
                        <div class="text-center mt-3">
                            <a href="index.php" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
