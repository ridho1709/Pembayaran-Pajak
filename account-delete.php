<?php 
require 'conection.php';

$id = $_GET["id"];

if (delete_account($id) > 0) {
    echo "
        <script>
        alert('Akun Berhasil Dihapus')
        document.location.href = 'account-manage.php';
            </script>";
}else{
    echo "
        <script>
        alert('Akun Berhasil Dihapus')
        document.location.href = 'account-manage.php';
            </script>";
}
?>