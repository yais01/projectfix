<?php
$koneksi = mysqli_connect("localhost","root","","forumfix");

$nama = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$tgl_lahir = $_POST["tgl_lahir"];
$alamat = $_POST["alamat"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$scan_ktp = $_POST["scan_ktp"];
//echo "Inputan dari nama = $nama"

$string = mysqli_query($koneksi,"INSERT INTO users VALUES (NULL,'$nama','$password','$email','$tgl_lahir','$alamat','$jenis_kelamin','$scan_ktp')");

?>