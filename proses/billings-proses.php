<?php
require '../conection.php';


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jenis_pajak = $_POST['jenis_pajak'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];
    $total = $_POST['total'];

    // Assuming billing_create() inserts the data and returns the inserted ID
    $result = billing_create($_POST);
    if ($result > 0) {
        header("Location: ../pembayaran-print.php?nama=$nama&tanggal=$tanggal&jenis_pajak=$jenis_pajak&jenis_pembayaran=$jenis_pembayaran&total=$total");
        exit();
    } else {
        echo "
            <script>
                alert('Data Pembayaran Gagal Di Input');
                window.location = '../create.php';
            </script>
        ";
    }
}

mysqli_close($conn);
?>
