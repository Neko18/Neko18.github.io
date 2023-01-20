<?php
error_reporting(0);

$noAkta = $_POST['noAkta'];
$kotaKel = $_POST['kotaKel'];
$tglLahir = $_POST['tglLahir'];
$namaAnak = $_POST['namaAnak'];
$jenisKelamin = $_POST['jk'];
$anakKe = $_POST['anakKe'];
$namaAyah = $_POST['namaAyah'];
$namaIbu = $_POST['namaIbu'];
?>

<html>
<head>
<link rel="stylesheet" href="../assets/w3.css">
<style>
table {
       color: white;
}
</style>
</head>
<body>
<center>
<div class="w3-container w3-red w3-animate-zoom">
<h1 class="w3-panel w3-card-4 w3-round w3-black">HASIL INPUT KELAHIRAN</h1>
<br>
<table>
<tr>
<td>No. Akta</td>
<td>:</td>
<td><?= $noAkta ?></td>
</tr>
<tr>
<td>Kota Kelahiran</td>
<td>:</td>
<td><?= $kotaKel ?></td>
</tr>
<tr>
<td>Tanggal Lahir</td>
<td>:</td>
<td><?= $tglLahir ?></td>
</tr>
<tr>
<td>Nama Anak</td>
<td>:</td>
<td><?= $namaAnak ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><?= $jenisKelamin ?></td>
</tr>
<tr>
<td>Anak Ke</td>
<td>:</td>
<td><?= $anakKe ?></td>
</tr>
<tr>
<td>Nama Ayah</td>
<td>:</td>
<td><?= $namaAyah ?></td>
</tr>
<tr>
<td>Nama Ibu</td>
<td>:</td>
<td><?= $namaIbu ?></td>
</tr>
</table>
<hr>
<h2>Data Berhasil Ditambahkan!</h2>
<br>