<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Solusi</h1>

</div>

<div class="mb-3">
  <a href="index.php?page=kepribadian-add" class="btn btn-success">Tambah</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"></h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Solusi</th>
            <th>Nama Solusi</th>
            <th>Aksi</th>

          </tr>
        </thead>

        <tbody>

          <?php
          include('../db/db_conn.php');
          $no = 1;
          $query = mysqli_query($conn, "SELECT * FROM tbl_kepribadian");
          while ($data = mysqli_fetch_array($query)) {

          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td> <?= $data['id_kepribadian'] ?></td>
              <td><?= $data['name'] ?></td>
              <td>
                <div class=" row m-2">
                  <a href="index.php?page=kepribadian-edit&&id_data=<?= $data['id_kepribadian'] ?>" class="btn btn-warning mr-2">Edit</a>
                  <a href="action/KepribadianHapus.php?id_data=<?= $data['id_kepribadian'] ?>" class="btn btn-danger">Hapus</a>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>