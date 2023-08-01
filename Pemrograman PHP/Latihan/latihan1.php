<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Pegawai</title>
</head>
<body>

<?php
//belajar deklarsi & inisialisasi variabel
$nama = 'Budi Santoso';
$umur = 33;
$beratBadan = 55.5;
$pekerjaan = 'Pegawai';
$jabatan = 'Asisten Manager';
$no = 1;

//logic
/*
if ($umur >- 17) {
  $ket = 'Dewasa';
} else {
  $ket = 'Belum Dewasa';
}
*/
$ket = ($umur >= 17) ? 'Dewasa' : 'Belum Dewasa';

//tentukan gaji pokok
switch ($jabatan) {
  case 'Manager':
    $gaji = 15000000;
    break;
  
  case 'Asisten Manager':
    $gaji = 10000000;
    break;

  case 'Supervisor':
    $gaji = 7000000;
    break;

  case 'Staff':
    $gaji = 4000000;
    break;
  
  default:
    $gaji = 0;
}

?>

Nama Lengkap : <?= $nama ?>
<br/> Umur : <?= $umur ?> Tahun
<br/> Berat Badan : <?= $beratBadan ?> Kg
<br/> Pekerjaan : <?= $pekerjaan ?>
<br/> Keterangan : <?= $ket ?>
<br/> Jabatan : <?= $jabatan ?>
<br/> Gaji : <?= "Rp " . number_format($gaji, 0, ",", "."); ?>

<h3 align="center">Data Pegawai</h3>
<div class="countainer-div">
 <table class="countainer-table" border="1px" align="center" cellpadding="15" cellspacing="0">
  <thead class="countainer-thead" bgcolor="greenyellow">
   <tr class="countainer-tr">
   <th>No</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>Berat Badan</th>
    <th>Pekerjaan</th>
    <th>Keterangan</th>
    <th>Jabatan</th>
    <th>Gaji</th>
   </tr>
  </thead>
  <tbody align="center" bgcolor="beige">
   <tr>
    <td><?= $no++; ?></td>
    <td><?= $nama; ?></td>
    <td><?= $umur; ?> Tahun</td>
    <td><?= $beratBadan; ?> Kg</td>
    <td><?= $pekerjaan; ?></td>
    <td><?= $ket; ?></td>
    <td><?= $jabatan; ?></td>
    <td><?= "Rp " . number_format($gaji, 0, ",", "."); ?></td>
   </tr>
  </tbody>
 </table>
</div>
</body>
</html>
