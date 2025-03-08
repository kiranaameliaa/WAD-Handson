<?php
include 'config.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', jurusan='$jurusan' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "<div class='alert alert-danger text-center'>Gagal memperbarui data!</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
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
                        <h2 class="text-center mb-4">Edit Mahasiswa</h2>
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">NIM</label>
                                <input type="text" name="nim" class="form-control" value="<?= $data['nim']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" value="<?= $data['jurusan']; ?>" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
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
