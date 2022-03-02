<?php
session_start();
//include 'koneksi.php';
$servername = "127.0.0.1";
$username = "root";
$password = "19K23O15P";
$db = "ewarning_system";
include 'csrf.php';
 
$nama_mahasiswa = stripslashes(strip_tags(htmlspecialchars($_POST['fullname'] ,ENT_QUOTES)));
$jenkel = stripslashes(strip_tags(htmlspecialchars($_POST['username'] ,ENT_QUOTES)));
$alamat = stripslashes(strip_tags(htmlspecialchars($_POST['password'] ,ENT_QUOTES)));
 
$query = "INSERT into tbl_mahasiswa (fullname, username, password) VALUES (?, ?, ?)";
$dewan1 = $db1->prepare($query);
$dewan1->bind_param("sssss", $nama_mahasiswa, $alamat, $jenkel);
$dewan1->execute();
 
echo json_encode(['success' => 'Sukses']);
 
$db1->close();
?>