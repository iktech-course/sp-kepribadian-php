<?php

$id = $_GET['id_data'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM user WHERE user_id = '$id'");

if ($hapus) {
  header("location: ../index.php?page=user-list");
} else {
  echo "Data gagal disimpan";
}
