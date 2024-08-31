<?php
include 'config.php';

if(isset($_POST['btnproses'])){
    $nama = $_POST['nama'];
    $picture = $_FILES['picture']['name'];
    $tmp = $_FILES['picture']['tmp_name']; 
    $keterangan = $_POST['keterangan'];

    $uploadDir = "images/";
    move_uploaded_file($tmp, $uploadDir . $picture);

    $query = "INSERT INTO db_picture (nama, picture, keterangan) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "sss", $nama, $picture, $keterangan);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Data Berhasil ditambahkan.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header("Location: picture.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>


    <div class="container">
        <h2 class="mb-4">Tambah Tempat Baru</h2>
        <form action="input.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Tempat:</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
            <div class="form-group">
                <label for="keterangan">keterangan Tempat:</label>
                <input type="text" class="form-control" name="keterangan" id="keterangan" required>
            </div>
            <div class="form-group">
                <label for="picture">Foto Tempat:</label>
                <input type="file" class="form-control-file" name="picture" id="picture" required>
            </div>
            <button type="submit" class="btn btn-primary" name="btnproses">Tambah</button>
        </form>
    </div>
</body>
</html>
