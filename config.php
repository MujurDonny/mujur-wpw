<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = new mysqli($localhost, $username, $password , $database);
if ($conn->connect_error){
    die("connection failed:" . $conn->connect_error);
}
 
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT picture FROM db_picture WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($gambar);
    $stmt->fetch();

    if ($stmt->num_rows > 0) {
        header("Content-Type: images/jpeg");
        echo $gambar;
    } else {
        echo "Image not found.";
    }
}

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $query = "DELETE FROM db_picture WHERE id='$id'";
    mysqli_query($conn, $query);
    header("Location: index.php");
}

if (isset($_SESSION['id_users'])) {
    $user_id = $_SESSION['id_users'];

    $sql = "SELECT nama, email FROM db_login WHERE id_users = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result_user = $stmt->get_result();

    if ($result_user->num_rows > 0) {
        $user = $result_user->fetch_assoc();
        $nama = $user['nama'];
        $email = $user['email'];
    } else {
        $telepon = "Nama tidak ditemukan";
        $email = "Email tidak ditemukan";
    }
} else {
    $telepon = "Users";
    $email = "default@example.com";
}

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    $query = "DELETE FROM db_picture WHERE id='$id'";
    mysqli_query($conn, $query);
    header("Location: picture.php");
}


?>