<?php
require '../conection.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $npwp = $_POST['npwp'];
    $nama = $_POST['nama'];
    $jenis_usaha = $_POST['jenis_usaha'];
    $jenis_pajak = $_POST['jenis_pajak'];
    $alamat = $_POST['alamat'];
    $telpon = $_POST['telpon'];
    $tanggal = $_POST['tanggal'];
    $total = $_POST['total'];

    $query = "UPDATE transaction SET 
                npwp='$npwp', 
                nama='$nama', 
                jenis_usaha='$jenis_usaha', 
                jenis_pajak='$jenis_pajak', 
                alamat='$alamat', 
                no_tlpn='$telpon', 
                tanggal='$tanggal', 
                total='$total' 
              WHERE id='$id'";

    if (mysqli_query($conn, $query)) {
        echo "<script>
                alert('Data berhasil diupdate');
                window.location.href='../tabels.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diupdate');
                window.location.href='../tabels.php';
              </script>";
    }
}
?>
