<?php
// Connection
require 'conection.php';

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// require 'proses/billings-proses.php';

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
    <title>Pembayaran | KlikPajak</title>

    <style>
        .hidden {
            display: none;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="card" style="margin-top: 10rem; margin-bottom: 2rem">
        <div class="card-header"><b>Form Pembayaran</b></div>
        <div class="card-body">
            <form action="proses/billings-proses.php" method="post" id="paymentForm">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" aria-describedby="emailHelp" required />
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" aria-describedby="emailHelp" required />
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
                    <label for="jenis_pembayaran">Jenis Pembayaran</label>
                    <select class="form-control" id="jenis_pembayaran" name="jenis_pembayaran" onchange="showTextbox()" required>
                        <option value=""></option>
                        <option value="Virtual Account">Virtual Account</option>
                        <option value="transfer">Transfer</option>
                        <option value="gopay">Gopay</option>
                        <option value="ovo">OVO</option>
                        <option value="dana">Dana</option>
                        <option value="shopeepay">Shopee Pay</option>
                    </select>
                </div>
                <div class="form-group hidden" id="jp1">
                <textarea class="form-control" name="disabledInput1" id="exampleFormControlTextarea1" rows="4" disabled>BRI 090300909093209
BCA 112090291
BNI 4334352
Mandiri 996752463746</textarea>
                </div>
                <div class="form-group hidden" id="jp2">
                    <input type="text" class="form-control mt-2" name="disabledInput2" value="0845621325452 (An.Gopay)" disabled />
                </div>
                <div class="form-group hidden" id="jp3">
                    <input type="text" class="form-control mt-2" name="disabledInput3" value="0845453737340 (An.ovo)" disabled />
                </div>
                <div class="form-group hidden" id="jp4">
                    <input type="text" class="form-control mt-2" name="disabledInput4" value="081513135665 (An.dana)" disabled />
                </div>
                <div class="form-group hidden" id="jp5">
                    <input type="text" class="form-control mt-2" name="disabledInput5" value="08222151563554 (An.shoope pay)" disabled />
                </div>
                <div class="form-group">
                <label for="total" >Total</label>
                <input type="text" class="form-control" name="total" id="total" aria-describedby="total " required />
                </div>
                <button type="submit" class="btn btn-primary ml-2 float-right" name="submit">Submit</button>
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
<script src="js/combo-hide.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/swipper.js"></script>
<?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
<script>
    alert("Data Pembayaran Berhasil Di input");
    window.history.replaceState(null, null, window.location.pathname);
</script>
<?php endif; ?>
</body>
</html>
