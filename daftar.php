
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $user_password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'login');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email_check = $conn->prepare("SELECT * FROM db_login WHERE email = ?");
    $email_check->bind_param("s", $email);
    $email_check->execute();
    $email_check->store_result();

    if ($email_check->num_rows > 0) {
        echo "Email already in use";
        $email_check->close();
    } else {
        $email_check->close();
        $stmt = $conn->prepare("INSERT INTO db_login (nama, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, password_hash($password, PASSWORD_BCRYPT));

        if ($stmt->execute()) {
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
    $conn->close();
}
?>