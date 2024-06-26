<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
    // Jika belum, arahkan ke halaman login
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <title>Home | KlikPajak</title>
  </head>
  <body>
    <img src="assets/Logo.png" class="picture" />
    <div class="content">
      <h1>Website Pembayaran Pajak</h1>
      <p>
        Website yang menyediakan berbagai jenis pembayaran pajak hanya dengan 1
        klik
      </p>
      <a href="create.php">
        <button type="button" class="btn">
          <b>Ayo Bayar Pajak!!</b>
        </button>
      </a>
    </div>
    <section id="blog">
      <div class="blog-heading">
        <h3>Klik<i>|Pajak</i> News</h3>
      </div>
      <div class="blog-container">
        <div class="blog-box">
          <div class="blog-img">
            <img src="assets/conten-1.jpeg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>04 April 2024</span>
            <a href="#" class="blog-title">
              Ini Asal Kerugian Negara Rp 271 T dalam Kasus Timah Suami Sandra
              Dewi
            </a>
            <p>
              kasus dugaan korupsi tata niaga di PT Timah Tbk yang menyeret
              suami Sandra Dewi, Harvey Moeis disebut merugikan negara hingga Rp
              271 triliun. Kejaksaan Agung pun memberikan penjelasan mengenai
              angka tersebut. Saat ini tim penyidik Kejagung sedang menghitung
              dan melakukan koordinasi di TKP.
            </p>
            <a href="dashboard.html">Read More</a>
          </div>
        </div>
        <div class="blog-box">
          <div class="blog-img">
            <img src="assets/conten-2.jpeg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>04 April 2024</span>
            <a href="#" class="blog-title">
              Pakai Sistem Canggih Triliunan, Pajak Bikin Aplikasi Kayak Bank
            </a>
            <p>
              Coretax Administration System atau Sistem Inti Administrasi
              Perpajakan (SIAP) akan digunakan pemerintah pada Juli 2024,
              menggantikan Sistem Informasi Direktorat Jenderal Pajak (SIDJP).
              Membuat layanan pajak tersedia layaknya aplikasi bank di ponsel
              pintar atau smartphone.
            </p>
            <a href="dashboard.html">Read More</a>
          </div>
        </div>
        <div class="blog-box">
          <div class="blog-img">
            <img src="assets/conten-3.jpeg" alt="Blog" />
          </div>
          <div class="blog-text">
            <span>04 April 2024 </span>
            <a href="#" class="blog-title">
              Sri Mulyani Happy! 12,9 Juta Warga RI Lapor SPT Pajak, Naik 7,32%
            </a>
            <p>
              Direktur Jenderal Pajak Kementerian Keuangan Suryo Utomo telah
              melaporkan kepada Menteri Keuangan Sri Mulyani Indrawati jumlah
              wajib pajak yang telah melaporkan Surat Pemberitahuan (SPT)
              Tahunan hingga batas akhir 31 Maret 2024. Batas akhir pelaporan
              itu untuk wajib pajak orang pribadi.
            </p>
            <a href="dashboard.php">Read More</a>
          </div>
        </div>
      </div>
    </section>
    <header class="header">
      <h2>Klik<i>|Pajak</i></h2>
      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a href="#">Product</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
      </nav>
      <div class="navbutton">
        <a href="proses/logout-proces.php">
          <button type="button" class="btnlogin">Logout</button>
        </a>
      </div>
      <div class="menu">
        <i class="bx bx-menu"></i>
      </div>
    </header>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swipper.js"></script>
  </body>
</html>
