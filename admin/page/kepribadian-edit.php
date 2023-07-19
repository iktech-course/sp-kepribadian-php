<?php
$id_data = $_GET['id_data'];

include('../db/db_conn.php');
$result = mysqli_query($conn, "SELECT * FROM tbl_kepribadian WHERE id_kepribadian ='" . $_GET['id_data'] . "'");
$kepribadian = mysqli_fetch_array($result);
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Edit Kepribadian</h1>

</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input Kepribadian</h6>
  </div>
  <div class="card-body">
    <form action="action/KepribadianEdit.php" method="post">
      <div class="form-group">
        <label for="" class="form-label">Kode Kepribadian</label>
        <input type="text" name="kode-kepribadian" value="<?= $kepribadian['id_kepribadian'] ?>" id="" class="form-control" placeholder="Masukkan kode kepribadian">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Nama Kepribadian</label>
        <input type="text" name="nama-kepribadian" value="<?= $kepribadian['name'] ?>" id="" class="form-control" placeholder="Masukkan nama kepribadian">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Solusi</label>
        <input type="text" name="solusi" value="<?= $kepribadian['solusi'] ?>" id="" class="form-control" placeholder="Masukkan solusi">
      </div>
      <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
  </div>
</div>