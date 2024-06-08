<?php

session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, arahkan ke halaman login
    header("Location: login.php");
    exit();
}

// connection
require 'conection.php';
// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$success = false;
require 'crud/create-proses.php';

// close connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <title>Home | KlikPajak</title>
</head>
<body>
<div class="container">
    <div class="card" style="margin-top: 20rem; margin-bottom: 2rem">
        <div class="card-header"><b>Form Transaksi</b></div>
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="npwp">NPWP</label>
                    <input type="number" class="form-control" name="npwp" id="npwp" aria-describedby="emailHelp" required />
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="namehelp" required />
                </div>
                <div class="form-group">
                    <label for="jenis_usaha">Jenis Usaha</label>
                    <input type="text" class="form-control" name="jenis_usaha" id="jenis_usaha" aria-describedby="usahaHelp" required />
                </div>
                <div class="form-group">
                    <label for="jenis_pajak">Jenis Pajak</label>
                    <select class="form-control" id="jenis_pajak" name="jenis_pajak" required>
                        <option value=""></option>
                        <option value="Bangunan">Bangunan</option>
                        <option value="Kendaraan">Kendaraan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    
                </div>
                <div class="form-group">
                    <label for="telpon">No Telpon</label>
                    <input type="number" class="form-control" name="telpon" id="telpon" aria-describedby="telponHelp" required />
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" aria-describedby="emailHelp" required />
                </div>
                <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" name="total" id="total" aria-describedby="emailHelp" required/>
                </div>
                <button type="submit" class="btn btn-primary float-right" name="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
<header class="header">
    <h2>Klik<i>|Pajak</i></h2>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="#">Product</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
    </nav>
    <div class="menu">
        <i class="bx bx-menu"></i>
    </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/swipper.js"></script>
<?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
<script>
    alert("Data Berhasil Di input");
    window.history.replaceState(null, null, window.location.pathname);
    window.location.href = "billings.php";
</script>
<?php endif; ?>
</body>
</html>
