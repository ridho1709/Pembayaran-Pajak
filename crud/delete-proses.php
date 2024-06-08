<?php 
require '../conection.php';

$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
        <script>
        alert('Data Berhasil Dihapus')
        document.location.href = '../tabels.php';
            </script>";
}else{
    echo "
        <script>
        alert('Data Berhasil Dihapus')
        document.location.href = '../tabels.php';
            </script>";
}
?>