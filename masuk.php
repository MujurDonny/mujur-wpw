<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email']; 
    $user_password = $_POST['user_password'];

    $stmt = $conn->prepare("SELECT * FROM db_login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $stored_password = $row['password']; 
        if (password_verify($user_password, $stored_password)) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Invalid email or password";
    }

    $stmt->close();
}


$conn->close();
?>