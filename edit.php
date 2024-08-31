<?php
session_start();
include 'config.php';

$id = isset($_GET['edit']) ? $_GET['edit'] : null; 
$data = null;
$nama = '';
$keterangan = '';
$picture = '';

if ($id) {
    $query = "SELECT * FROM db_picture WHERE id=?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) { 
        $data = mysqli_fetch_assoc($result);
        $nama = $data['nama'];
        $keterangan = $data['keterangan'];
        $picture = $data['picture'];
    } else {
        echo "Data not found.";
        exit;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $picture_name = $picture;

    if ($_FILES['picture']['error'] === UPLOAD_ERR_OK) {
        $tmp = $_FILES['picture']['tmp_name'];
        $picture_name = basename($_FILES['picture']['name']);
        $picture_path = "images/" . $picture_name;

        if (move_uploaded_file($tmp, $picture_path)) {
            // Update database with new picture filename
            $query = "UPDATE db_picture SET nama=?, keterangan=?, picture=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_bind_param($stmt, 'sssi', $nama, $keterangan, $picture_name, $id);

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_close($stmt);
                header("Location: picture.php");
                exit;
            } else {
                echo "Error updating record: " . mysqli_stmt_error($stmt);
            }
        } else {
            echo "Failed to move uploaded file.";
        }
    } else {
        echo "File upload error: " . $_FILES['picture']['error'];
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <title>Edit Data Lokasi</title>
</head>
<body>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Edit Data Lokasi</a>
            </div>
        </nav>

        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <p>Data Lokasi</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Kelola Data Lokasi</cite>
            </figcaption>
        </figure>
    
        <form action="edit.php?edit=<?= $id ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($nama); ?>" placeholder="Masukkan Nama Barang" required>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= htmlspecialchars($keterangan); ?>" placeholder="Masukkan Keterangan Barang" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="picture" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="picture" name="picture">
                    <img src="images/<?= $picture ?>" class="mt-2" style="max-width: 200px;" alt="Current Picture">
                </div>
            </div>

            <div class="mb-3 row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary" name="btnproses">Simpan Perubahan</button>
                    <a href="index.php" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
