<?php
$No_Order 		=  $_GET['cetak'];
use Dompdf\Dompdf;
ob_start(); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Struk Transaksi</title>
  <style media="screen">
    .box {padding: 20px 15px 15px 20px }
    th{text-align: center;}
  </style>
</head>
<body>
<center><h1>SAN LAUNDRY</h1>
<h3>Laundry & Dry Cleaning</h3>
<h3>Hp : 087 822 555 784</h3>
</center>
<hr>
<?php
include "./include/koneksi.php";

$sql = mysqli_query($conn, "SELECT Nama, Alamat, Tgl_Terima, No_Order, total_berat, diskon, Total_Bayar from (pelanggan join transaksi on pelanggan.No_Identitas = transaksi.No_Identitas) WHERE No_Order = '$No_Order'");
while ($hasil = mysqli_fetch_array($sql))
{
?>
<div style="float:right">
  <p>Tgl Terima : </p>
  <p>Tgl Ambil : <?php echo $hasil['Tgl_Ambil']; ?></p>
</div>
<div class="">
  <p>Nama : <?php echo $hasil['Nama']; ?></p>
  <p>Alamat : <?php echo $hasil['Alamat']; ?></p>
</div>
<p>No. Order : <?php echo $hasil['No_Order']; ?></p>
<table >
  <thead>
    <tr>
      <th>No</th>
      <th>Jenis Pakaian</th>
      <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>
      <?php

        // $i = 1;
        // $sql = mysqli_query($conn, "SELECT pembeli.nama_pembeli, pembeli.telepon, pembeli.alamat_pembeli, barang.nama_barang, pemesanan.jumlah_barang, pemesanan.nama_bank, pemesanan.pemilik_rekening, pemesanan.jumlah_bayar, pemesanan.status, pemesanan.id_transaksi FROM (barang join pemesanan on barang.kode_barang = pemesanan.kode_barang) join pembeli on pemesanan.id_pembeli = pembeli.id_pembeli WHERE year(pemesanan.tanggal) = '$tahun' AND month(pemesanan.tanggal) = '$bulan'");
        // while ($hasil = mysqli_fetch_array($sql)) {
     ?>
      <tr>
        <td style="text-align: center;">1</td>
        <td>Kaos</td>
        <td>Kaos Celana</td>
      </tr>
  </tbody>
</table>
<div class="">
  <p>Total Berat : <?php echo $hasil['total_berat']; ?>  Kg</p>
  <p>Diskon (Rp): <?php echo $hasil['diskon']; ?></p>
</div>
<div style="float:right">
  <p>Total Bayar (Rp) : <?php echo $hasil['Total_Bayar']; ?></p>
</div>
<?php
}
?>
</body>
</html>
<?php

$html = ob_get_clean();
require_once 'dompdf/autoload.inc.php';
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('struk.pdf');

?>
