<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Daftar Ciri-Ciri</h1>

</div>

<div class="mb-3">
  <a href="index.php?page=ciri-add" class="btn btn-success">Tambah</a>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode Ciri-Ciri</th>
            <th>Nama Ciri-Ciri</th>
            <th>Aksi</th>

          </tr>
        </thead>

        <tbody>
          <?php
          include('../db/db_conn.php');
          $no = 1;
          $query = mysqli_query($conn, "SELECT * FROM tbl_ciri");
          while ($data = mysqli_fetch_array($query)) {

          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td> <?= $data['id_ciri'] ?></td>
              <td><?= $data['name'] ?></td>
              <td>
                <div class="row m-2">
                  <a href="index.php?page=ciri-edit&&id_data=<?= $data['id_ciri'] ?>" class="btn btn-warning mr-2">Edit</a>
                  <a href="action/CiriHapus.php?id_data=<?= $data['id_ciri'] ?>" class="btn btn-danger">Hapus</a>
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