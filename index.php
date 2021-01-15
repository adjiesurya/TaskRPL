<html>
<head>
  <title>Aplikasi Penyimpanan Barang Tgs WEB</title>
</head>
<body>
  <h1>Data Barang</h1>
  <a href="form_simpan.php">Tambah Data</a><br><br>
  <table border="1" width="100%">
  <tr>
    <th>Kode barang</th>
    <th>Nama Barang</th>
    <th>Jumlah Barang</th>
    <th>Jenis Barang</th>
    <th colspan="2">Aksi</th>
  </tr>
  <?php
  include "koneksi.php";

  $sql = $pdo->prepare("SELECT * FROM barang");
  $sql->execute(); 
  while($data = $sql->fetch()){ 
    echo "<tr>";
    echo "<td>".$data['kb']."</td>";
    echo "<td>".$data['nb']."</td>";
    echo "<td>".$data['jb']."</td>";
    echo "<td>".$data['jsb']."</td>";
    echo "<td><a href='form_ubah.php?id=".$data['id']."'>Ubah</a></td>";
    echo "<td><a href='proses_hapus.php?id=".$data['id']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>
  </table>
</body>
</html>