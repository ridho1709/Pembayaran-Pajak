<?php
session_start();

// Mendapatkan data yang diinputkan pengguna
$username = $_POST['username'];
$password = $_POST['password'];

// mengecek username dan password
if ($username === 'admin' && $password === '12345') {
    // message Login berhasil
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit();
} else {
    // message ketika username/passwor salah
    echo "username dan/atau password salah!";
}
?>
