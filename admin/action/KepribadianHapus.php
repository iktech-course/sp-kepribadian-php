<?php

$id = $_GET['id_data'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM tbl_kepribadian WHERE id_kepribadian = '$id'");

if ($hapus) {
    header("location: ../index.php?page=kepribadian-list");
} else {
    echo "Data gagal disimpan";
}
