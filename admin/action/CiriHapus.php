<?php

$id = $_GET['id_data'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM tbl_ciri WHERE id_ciri = '$id'");

if ($hapus) {
    header("location: ../index.php?page=ciri-list");
} else {
    echo "Data gagal disimpan";
}
