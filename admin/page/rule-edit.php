<?php
$id_data = $_GET['id_data'];

include('../db/db_conn.php');
$result = mysqli_query($conn, "SELECT * FROM tbl_aturan WHERE id_aturan ='" . $_GET['id_data'] . "'");
$rule = mysqli_fetch_array($result);
?>

<?php


include("../db/db_conn.php");

$result = mysqli_query($conn, "SELECT * FROM tbl_penyakit");

while ($p = mysqli_fetch_array($result)) {
  $penyakit[] = $p;
}

$resultG = mysqli_query($conn, "SELECT * FROM tbl_gejala");

while ($g = mysqli_fetch_array($resultG)) {
  $gejala[] = $g;
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
          foreach ($gejala as $gejala_item) {
          ?>
            <option value="<?= $gejala_item['id_gejala'] ?>"><?= $gejala_item['name'] ?></option>
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
          foreach ($penyakit as $penyakit_item) {
          ?>
            <option value="<?= $penyakit_item['id_penyakit'] ?>"><?= $penyakit_item['name'] ?></option>
          <?php
          }
          ?>
        </select>
      </div>


      <button type="submit" class="btn btn-success">SIMPAN</button>
    </form>
  </div>
</div>