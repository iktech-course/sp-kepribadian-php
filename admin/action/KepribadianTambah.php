<?php

$id = $_POST['kode-kepribadian'];
$nama = $_POST['nama-kepribadian'];
$solusi = $_POST['solusi'];


include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_penyakit(id_penyakit, name, solusi) VALUES('$id','$nama','$solusi')");


if ($tambah) {
    header("location: ../index.php?page=kepribadian-list");
} else {
    echo "Data gagal disimpan";
}
