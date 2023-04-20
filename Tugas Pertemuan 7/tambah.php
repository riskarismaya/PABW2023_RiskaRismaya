<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'latihan3.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Mahasiswa</title>
</head>

<body>
  <h3>Form Tambah Data Mahasiswa</h3>
  <form action="" method="POST">
    <table border="0">
      <ul>
        <tbody>
          <tr>
            <label>
              <td>1.</td>
              <td>Nama</td>
              <td>:</td>
              <td><input type="text" name="nama" autofocus required></td>
            </label><br>
          </tr>
          <tr>
            <td>2.</td>
            <td>NIM</td>
            <td>:</td>
            <td><input type="text" name="nim" required></td>
          </tr>
          <tr>
            <td>3.</td>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email" required></td>
          </tr>
          <tr>
            <td>4.</td>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="jurusan" required></td>
          </tr>
          <tr>
            <td>5.</td>
            <td>Foto</td>
            <td>:</td>
            <td><input type="text" name="gambar" required></td>
          </tr>
        </tbody>
    </table>
    </ul>
    <br>
    <button type="submit" name="tambah">Tambah Data</button><br>
    <br>
    <td><a href="latihan3.php">Kembali ke Daftar Mahasiswa</a></td>
    </ul>
  </form>
</body>

</html>