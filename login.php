<?php
session_start();
require 'config.php';

if (isset($_SESSION['id_users'])) {
    header("Location: index.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM db_login WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
  
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['id_users'] = $user['id_users'];
            header("Location: index.php");
            exit;
        } else {
            $error_message = "Email atau password salah!";
        }
    }
  }
?>