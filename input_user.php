<?php
include "koneksi.php";
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = md5($_POST['password']);
$query=mysqli_query($con, "INSERT INTO users(id_user, password, nama_lengkap, email) VALUES ('$id_user','$pass','$nama','$email')");
mysqli_close($con);
header('location:tampil_user.php');
?>