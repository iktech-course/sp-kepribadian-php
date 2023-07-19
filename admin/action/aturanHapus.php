<?php

$id = $_GET['id_data'];

include("../../db/db_conn.php");

$hapus = mysqli_query($conn, "DELETE FROM tbl_aturan WHERE id_aturan = '$id'");

if ($hapus) {
    header("location: ../index.php?page=rule-list");
} else {
    echo "Data gagal disimpan";
}
