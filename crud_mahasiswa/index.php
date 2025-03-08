<?php
include 'config.php';

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="aset/Style/app.css">

    <title>DATA MAHASISWA</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DATA MAHASISWA 2025</a>
        </div>
    </nav>
    
    <section class="mt-5 pt-5">
        <div class="container">
            <h2 class="text-center mb-4">Data Mahasiswa</h2>
            <div class="d-flex justify-content-center mb-3">
                <a href="tambah.php" class="btn btn-primary">Tambah Mahasiswa</a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NIM</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['nim']; ?></td>
                            <td><?= $row['jurusan']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>
