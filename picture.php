<?php
session_start();
include 'config.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id) {
    $query = "SELECT * FROM db_picture WHERE id='$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0 ){
        $data = mysqli_fetch_assoc($result);
        $nama = isset($_POST['nama']) ? $_POST['nama'] : $data['nama'];
        $keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : $data['keterangan'];
        $picture = $data['picture_path']; // Ubah sesuai dengan nama kolom yang menyimpan path gambar

        if(isset($_POST['btnproses'])){
            $nama = $_POST['nama'];
            $keterangan = $_POST['keterangan'];
            $picture = $_POST['picture_path']; // Ubah sesuai dengan nama kolom yang menyimpan path gambar
            $queryUpdate = "UPDATE db_picture SET nama='$nama', keterangan='$keterangan', picture_path='$picture' WHERE id='$id'";
            $resultUpdate = mysqli_query($conn, $queryUpdate);

            if($resultUpdate){
                echo "Data Berhasil diupdate";
                header('Location: picture.php');
                exit;
            }else{
                echo "Error: " . mysqli_error($conn);
            }
        }
    }else{
        echo "Data tidak ditemukan.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editable Table</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #032a3b;
        color: white;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: white;
        color: black;
    }
    table, th, td {
        border: 1px solid #ccc;
    }
    th, td {
        padding: 8px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #f5f5f5;
    }
    .add-row {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 20px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }
    .add-row:hover{
        background-color: black;
    }
    .btn{
        padding:10px;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 20px;
        cursor: pointer;
        border: none;
        border-radius: 5px;
    }
    tbody a{

        text-decoration:none;
        color: white;
    }
    .btn:hover{
        background-color: black; 
    }
</style>
</head>
<body>

<table id="myTable">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Tempat</th>
            <th>Foto Tempat</th>
            <th>keterangan Tempat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody method="post">
    <?php include 'config.php';
        $data = mysqli_query($conn, "SELECT * FROM db_picture order by id DESC");
        $no = 1;
        while ($row = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $no; ?></td> 
            <td><?php echo $row['nama']; ?></td>
            <td><img src="images/<?php echo $row['picture'] ; ?>" alt="<?php echo $row['nama'] ; ?>" width="100px" height="auto"></td>
            <td><?php echo $row['keterangan']; ?></td>
            <td>
            <a href="picture.php?hapus=<?php echo $row['id']; ?>" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</a>
            <a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-secondary">Edit</a>
            </td>
        </tr>
    <?php
    $no++;
        } ?>
    </tbody>
</table>

<button class="add-row" onclick="window.location.href='input.php'">Add Row</button>
<button class="add-row"><a href="index.php" style="text-decoration:none; color:white">Kembali</a></button>

</body>
</html>
