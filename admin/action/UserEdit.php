<?php
include("../../db/db_conn.php");

$user_id = $_POST['user_id'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$role = $_POST['role'];

if ($password != "") {
  $edit = mysqli_query($conn, "update user set username = '$username', email = '$email', password = '$password', role = '$role',jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir' where user_id = '$user_id' ");
} else {
  $edit = mysqli_query($conn, "update user set username = '$username', email = '$email', role = '$role',jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir' where user_id = '$user_id' ");
}

if ($edit) {
  header("location: ../index.php?page=user-list");
} else {
  echo "Data gagal disimpan";
}
