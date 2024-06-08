<?php

require_once __DIR__ . '/vendor/autoload.php';
// connention
require 'conection.php';
// Tabel
$transaction = query("SELECT * FROM transaction");

$mpdf = new \Mpdf\Mpdf();
$mpdf->AddPage('L');
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi</title>
    <style>
    h1 {
        color: black; /* Warna hitam untuk kata "Klik" */
    }
    .orange-text {
        color: orange; /* Warna oranye untuk kata "Pajak" */
    }
        body {
            text-align: center;
        }
        table {
            margin: 0 auto;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color : #ddd;
        }
    </style>
</head>
<body>
<h1>Klik <span class="orange-text">Pajak</span></h1>
    <h2>Laporan Transaksi</h2>
    <table border="1" cellpadding="3" cellspacing="0">
         <tr>
             <th>No</th>
             <th>Npwp</th>
             <th>Nama</th>
             <th>Jenis Usaha</th>
             <th>Jenis Pajak</th>
             <th>Alamat</th>
             <th>No Telpon</th>
             <th>Tanggal</th>
             <th>Total</th>
         </tr>';
         $no = 1;
         foreach($transaction as $row) {
            $html .='<tr>
                        <td>'.$no++.'</td>
                        <td>'.$row["npwp"].'</td>
                        <td>'.$row["nama"].'</td>
                        <td>'.$row["jenis_usaha"].'</td>
                        <td>'.$row["jenis_pajak"].'</td>
                        <td>'.$row["alamat"].'</td>
                        <td>'.$row["no_tlpn"].'</td>
                        <td>'.$row["tanggal"].'</td>
                        <td>Rp. '.number_format($row["total"]).'</td>
                    </tr>';
;         }
    $html .='</table>
</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output('Klik-pajak-laporan-transaksi.pdf','D');
?>