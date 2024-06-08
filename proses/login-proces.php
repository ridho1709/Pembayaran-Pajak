<?php
session_start();
require '../conection.php';

if (isset($_POST['login'])) {
    $username = $_POST['log_username'];
    $password = $_POST['log_password'];

    $query = "SELECT * FROM account WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Login berhasil
            $_SESSION['username'] = $username;
            header("Location: ../index.php");
            exit();
        } else {
            // Password salah
            $_SESSION['error'] = "Password salah";
            header("Location: ../login.php");
            exit();
        }
    } else {
        // Username tidak ditemukan
        $_SESSION['error'] = "Username tidak ditemukan";
        header("Location: ../login.php");
        exit();
    }
}
?>