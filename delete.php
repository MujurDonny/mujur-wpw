<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION['email'])) {
    die("You need to be logged in to delete your account.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $email = $_SESSION['email'];

    $stmt = $conn->prepare("DELETE FROM db_login WHERE email = ?");
    $stmt->bind_param("s", $email); 

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Account deleted successfully";
            session_destroy();
        } else {
            echo "Error: Account not found.";
        }
    } else {
        echo "Error deleting account: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?> 

