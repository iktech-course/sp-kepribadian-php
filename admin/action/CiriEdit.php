<?php

include('../../db/db_conn.php');

$id = $_POST['kode-ciri'];
$nama = $_POST['nama-ciri'];

$edit = mysqli_query($conn, "UPDATE tbl_gejala SET name ='$nama' WHERE id_gejala ='$id' ");


if ($edit) {
    header("location: ../index.php?page=ciri-list");
} else {
    echo "Data gagal disimpan";
}
