<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <img width="150" src="img/<?= $m['foto']; ?>">
  <table border="0">
    <tbody>
      <tr>
        <td>1.</td>
        <td>NIM</td>
        <td>:</td>
        <td><?= $m['nim']; ?></td>
        <br>
      </tr>
      <tr>
        <td>2.</td>
        <td>Nama</td>
        <td>:</td>
        <td><?= $m['nama']; ?></td>
        <br>
      </tr>
      <tr>
        <td>3.</td>
        <td>Email</td>
        <td>:</td>
        <td><?= $m['email']; ?></td>
        <br>
      </tr>
      <tr>
        <td>4.</td>
        <td>Jurusan</td>
        <td>:</td>
        <td><?= $m['jurusan']; ?></td>
        <br>
      </tr>
    </tbody>
  </table><br>
  <table border="0">
    <td><a href="">ubah</a> | <a href="">hapus</a></td>
  </table>
  <br><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a>
  </ul>
</body>

</html>