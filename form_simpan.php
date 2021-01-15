<html>
<head>
  <title>Form Simpan</title>
</head>
<body>
  <h1>Tambah Data Barang</h1>
  <form method="post" action="proses_simpan.php">
    <table cellpadding="8">
      <tr>
        <td>Kode Barang</td>
        <td><input type="text" name="kb"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nb"></td>
      </tr>
      <tr>
       
      </tr>
      <tr>
        <td>Jumlah Barang</td>
        <td><input type="text" name="jb"></td>
      </tr>
      <td>Jenis Barang</td>
        <td>
        <input type="radio" name="jsb" value="Pecah"> Pecah
        <input type="radio" name="jsb" value="Tidak Pecah"> Tidak Pecah
        </td>
    </table>
    <hr>
    <input type="submit" value="Simpan">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>