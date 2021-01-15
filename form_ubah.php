<html>
<head>
  <title>Form Ubah</title>
</head>
<body>
  <h1>Ubah Data Barang</h1>
  <?php
 
  include "koneksi.php";

  $id = $_GET['id'];
 
  $sql = $pdo->prepare("SELECT * FROM barang WHERE id=:id");
  $sql->bindParam(':id', $id);
  $sql->execute();
  $data = $sql->fetch();
  ?>
  <form method="post" action="proses_ubah.php?id=<?php echo $id; ?>">
    <table cellpadding="8">
      <tr>
        <td>Kode Barang</td>
        <td><input type="text" name="kb" value="<?php echo $data['kb']; ?>"></td>
      </tr>
      <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nb" value="<?php echo $data['nb']; ?>"></td>
      </tr>
     
      <tr>
        <td>Jumlah Barang</td>
        <td><input type="text" name="jb" value="<?php echo $data['jb']; ?>"></td>
      </tr>
      <tr>
        <td>Jenis Barang</td>
        <td>
        <?php
        if($data['jsb'] == "Pecah"){
          echo "<input type='radio' name='jsb' value='Pecah' checked='checked'> Pecah";
          echo "<input type='radio' name='jsb' value='Tidak Pecah'> Tidak Pecah";
        }else{
          echo "<input type='radio' name='jsb' value='Pecah'> Pecah";
          echo "<input type='radio' name='jsb' value='Tidak Pecah' checked='checked'> Tidak Pecah";
        }
        ?>
        </td>
      </tr>
    </table>
    <hr>
    <input type="submit" value="Ubah">
    <a href="index.php"><input type="button" value="Batal"></a>
  </form>
</body>
</html>