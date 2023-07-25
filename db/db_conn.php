<?php
$conn = mysqli_connect("localhost", "root", "", "sp_kepribadian");

// Check connection
if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
