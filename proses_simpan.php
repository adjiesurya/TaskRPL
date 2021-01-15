<?php

include "koneksi.php";

$kb = $_POST['kb'];
$nb = $_POST['nb'];
$jb = $_POST['jb'];
$jsb = $_POST['jsb'];

$sql = $pdo->prepare("INSERT INTO barang(kb, nb, jb, jsb) VALUES(:kb,:nb,:jb,:jsb)");
$sql->bindParam(':kb', $kb);
$sql->bindParam(':nb', $nb);
$sql->bindParam(':jb', $jb);
$sql->bindParam(':jsb', $jsb);
$sql->execute(); 
if($sql){ 
  header("location: index.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>