<?php

include('../../db/db_conn.php');

$id = $_POST['kode-kepribadian'];
$nama = $_POST['nama-kepribadian'];
$solusi = $_POST['solusi'];

$edit = mysqli_query($conn, "UPDATE tbl_penyakit SET name ='$nama', solusi = '$solusi' WHERE id_penyakit ='$id' ");


if ($edit) {
    header("location: ../index.php?page=kepribadian-list");
} else {
    echo "Data gagal disimpan";
}
