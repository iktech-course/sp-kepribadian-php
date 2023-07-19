<?php
include("../../db/db_conn.php");


$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$role = $_POST['role'];

$tambah = mysqli_query($conn, "insert into user (username, email, password, role,jenis_kelamin, tanggal_lahir) values('$username', '$email', '$password', '$role','$jenis_kelamin','$tanggal_lahir')");

if ($tambah) {
  header("location: ../index.php?page=user-list");
} else {
  echo "Data gagal disimpan";
}
