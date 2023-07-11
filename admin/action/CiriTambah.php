<?php

$id = $_POST['kode-ciri'];
$nama = $_POST['nama-ciri'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_gejala(id_gejala, name) VALUES('$id','$nama')");


if ($tambah) {
    header("location: ../index.php?page=ciri-list");
} else {
    echo "Data gagal disimpan";
}
