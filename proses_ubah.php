<?php

include "koneksi.php";

$id = $_GET['id'];

$kb = $_POST['kb'];
$nb = $_POST['nb'];
$jb = $_POST['jb'];
$jsb = $_POST['jsb'];
$sql = $pdo->prepare("UPDATE barang SET kb=:kb, nb=:nb, jb=:jb, jsb=:jsb WHERE id=:id");
$sql->bindParam(':kb', $kb);
$sql->bindParam(':nb', $nb);
$sql->bindParam(':jb', $jb);
$sql->bindParam(':jsb', $jsb);
$sql->bindParam(':id', $id);
$execute = $sql->execute(); 
if($execute){ 

  header("location: index.php"); 
}else{
  echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
  echo "<br><a href='form_ubah.php'>Kembali Ke Form</a>";
}
?>