<?php


require_once __DIR__ . '/vendor/autoload.php';
// connention
require 'conection.php';
$nama = $_GET['nama'];
$tanggal = $_GET['tanggal'];
$jenis_pajak = $_GET['jenis_pajak'];
$jenis_pembayaran = $_GET['jenis_pembayaran'];
$total = $_GET['total'];
// Tabel
$transaction = query("SELECT * FROM biliings");

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage('P');
$html = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      body {
        font-family: Times New Roman, Times, serif;
        text-align: center;
        margin-top: 300px;
      }
      .orange-text {
        color: orange;
      }
      .data {
        text-align: left;
        margin-top: 50px;
        margin-left: 60px;
      }
      .tanda {
        text-align: end;
        margin-right: 90px;
        position: absolute;
        right: 60px;
      }
      .tanda h5 {
        margin-top: 50px;
      }
      .namatanda p{
        text-align: end;
        margin-top: 80px;
      }
    </style>
  </head>
  <body>
    <h1>Klik <span class="orange-text">Pajak</span></h1>
    <h2>Laporan Hasil Pembayaran</h2>
    <div class="data">
      <p>Nama : ' .$nama. '</p>
      <p>Tanggal Pembayaran : ' .$tanggal. ' </p>
      <p>Jenis Pajak : ' .$jenis_pajak. ' </p>
      <p>Jenis Pembayaran : ' .$jenis_pembayaran. ' </p>
      <p>Total : Rp. '.number_format($total).' </p>
      <p>
        Dengan data diatas bahwa orang yang bersangkutan telah membayar pajak
      </p>
    </div>
    <div class="tanda">
      <h3>Dirjen Pajak</h3>
      <div class="namatanda">
        <p>
          Ridho Syahbana Putra <br />
          2218019
        </p>
      </div>
    </div>
    
  </body>
</html>
';
$mpdf->WriteHTML($html);
$filename = 'Klik-pajak-laporan-pembayaran-' . preg_replace('/[^a-zA-Z0-9-_\.]/','', $nama) . '.pdf';
// Mengunduh file dengan nama yang dinamis
$mpdf->Output($filename, 'D');
?>