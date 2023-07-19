<?php

$id_kepribadian = $_POST['kode_kepribadian'];
$id_ciri = $_POST['kode_ciri'];

include("../../db/db_conn.php");

$tambah = mysqli_query($conn, "INSERT INTO tbl_aturan(id_kepribadian, id_ciri) VALUES('$id_kepribadian','$id_ciri')");


if ($tambah) {
    header("location: ../index.php?page=rule-list");
} else {
    echo "Data gagal disimpan";
}
