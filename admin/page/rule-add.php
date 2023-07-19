<?php


include("../db/db_conn.php");

$result = mysqli_query($conn, "SELECT * FROM tbl_kepribadian");

while ($p = mysqli_fetch_array($result)) {
  $kepribadian[] = $p;
}

$resultG = mysqli_query($conn, "SELECT * FROM tbl_ciri");

while ($g = mysqli_fetch_array($resultG)) {
  $ciri[] = $g;
}

?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah Rule</h1>

</div>



<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input Rule</h6>
  </div>
  <div class="card-body">
    <form action="action/aturanTambah.php" method="post">
      <div class="form-group">
        <label for="" class="from-label">Ciri-Ciri</label>
        <!-- <input type="text" name=" kode_Gejala" id="" class="form-control" placeholder="Masukan Kode Gejala"> -->
        <select name="kode_gejala" id="" class="form-control">
          <option value="">Piih Ciri-Ciri</option>
          <?php
          foreach ($ciri as $ciri_item) {
          ?>
            <option value="<?= $ciri_item['id_ciri'] ?>"><?= $ciri_item['name'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label for="" class="form-label">Kepribadian</label>
        <select name="kode_penyakit" id="" class="form-control">
          <option value="">Piih Kepribadian</option>
          <?php
          foreach ($kepribadian as $kepribadian_item) {
          ?>
            <option value="<?= $kepribadian_item['id_kepribadian'] ?>"><?= $kepribadian_item['name'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>


      <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
  </div>
</div>