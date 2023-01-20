<center>
<h1>Progam Penjualan</h1>
<hr>
<table>
<?php
error_reporting(0);
//Bacadata dari html ke php
$namabarang=$_GET['namabarang'];
$harga=$_GET['harga'];
$jumlah=$_GET['jumlah'];
$subtotal=$harga*$jumlah;
$diskon=$subtotal*0.1;
$total=$subtotal-$diskon;


echo "<tr><td>Nama Barang <td>: $namabarang";
echo "<tr><td>Harga <td>: $harga";
echo "<tr><td>Jumlah <td>: $jumlah";
echo "<tr><td>Total Harga <td>: $total";
echo "<tr><td>Diskon 10% <td>:$diskon";