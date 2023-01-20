<center>
<h1>FORM DATA SISWA
<hr>
<table>
<?php
error_reporting(0);
//Bacadata dari html ke php
$namasiswa=$_GET['namasiswa'];
$jurusan=$_GET['jurusan'];
$jeniskelamin=$_GET['jeniskelamin'];
$java=$_GET['java'];
$php=$_GET['php'];
$pyton=$_GET['pyton'];


echo "<tr><td>Nama Siswa <td>: $namasiswa";
echo "<tr><td>Jurusan <td>: $jurusan";
echo "<tr><td>Jenis Kelamin <td>: $jeniskelamin";
echo "<tr><td>Bahasa Pemrogaman <td>: $java $php $pyton";