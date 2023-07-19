<?php
$id_data = $_GET['id_data'];

include('../db/db_conn.php');
$result = mysqli_query($conn, "SELECT * FROM user WHERE user_id ='" . $_GET['id_data'] . "'");
$user = mysqli_fetch_array($result);
?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Tambah User Baru</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Form Input User</h6>
  </div>
  <div class="card-body">
    <form action="action/UserEdit.php" method="post">
      <input type="text" name="user_id" id="" value="<?= $user['user_id'] ?>" class="form-control" hidden>
      <div class="form-group">
        <label for="" class="form-label">Username</label>
        <input type="text" name="nama_lengkap" value="<?= $user['username'] ?>" id="" class="form-control" placeholder="Masukan Nama Lengkap">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Email</label>
        <input type="email" name="email" value="<?= $user['email'] ?>" id="" class="form-control" placeholder="Masukan Email">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Password</label>
        <input type="password" name="password" id="" class="form-control" placeholder="Masukan Password">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Jenis Kelamin</label>
        <select name="jenis_kelamin" id="" class="form-control">
          <option value="laki-laki" <?php if ($user['jenis_kelamin'] == 'laki-laki') echo "selected" ?>>Laki - Laki</option>
          <option value="perempuan" <?php if ($user['jenis_kelamin'] == 'perempuan') echo "selected" ?>>Perempuan</option>
        </select>
      </div>
      <div class="form-group">
        <label for="" class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="<?= $user['tanggal_lahir'] ?>" id="" class="form-control" placeholder="">
      </div>
      <div class="form-group">
        <label for="" class="form-label">Level</label>
        <select name="role" id="" class="form-control">
          <option value="1" <?php if ($user['role'] == '1') echo "selected" ?>>Admin</option>
          <option value="2" <?php if ($user['role'] == '2') echo "selected" ?>>User</option>
        </select>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
    </form>
  </div>
</div>