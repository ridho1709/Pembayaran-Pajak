<?php
require '../conection.php';

if (isset($_POST["register"])) {
    if (reg($_POST) > 0) {
        echo "<script>
                alert('Register Berhasil!');
                window.location.href = '../login.php';
              </script>";
    } else {
        echo "<script>
                alert('Register Gagal!');
              </script>";
    }
  }
?>