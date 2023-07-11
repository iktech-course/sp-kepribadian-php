<?php
$id_data = $_GET['id_data'];

include('../db/db_conn.php');
$result = mysqli_query($conn, "SELECT * FROM tbl_gejala WHERE id_gejala ='" . $_GET['id_data'] . "'");
$gejala = mysqli_fetch_array($result);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Ciri-Ciri</h1>

</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input Ciri-Ciri</h6>
  </div>
  <div class="card-body">
    <form action="action/CiriEdit.php" method="post">
      <div class="form-group">
        <label for="" class="form-label">Kode ciri-ciri</label>
        <input type="text" name="kode-ciri" id="" value="<?= $gejala['id_gejala'] ?>" class="form-control" placeholder="Masukkan id ciri-ciri">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Nama Ciri Ciri</label>
        <input type="text" name="nama-ciri" value="<?= $gejala['name'] ?>" id="" class="form-control" placeholder="Masukkan nama ciri-ciri">
      </div>
      <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
  </div>
</div>