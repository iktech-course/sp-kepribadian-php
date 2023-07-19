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
                        <form action="action/UserTambah.php" method="post">
                          <div class="form-group">
                            <label for="" class="from-label">Username</label>
                            <input type="text" name="username" id="" class="form-control" placeholder="Masukan Nama Lengkap">
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Masukan Email">
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Masukan Password">
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="" class="form-control">
                              <option value="laki-laki">Laki - Laki</option>
                              <option value="perempuan">Perempuan</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" id="" class="form-control" placeholder="Masukan Password">
                          </div>
                          <div class="form-group">
                            <label for="" class="form-label">Level</label>
                            <select name="role" id="" class="form-control">
                              <option value="1">Admin</option>
                              <option value="2" Selected>User</option>
                            </select>
                          </div>
                          <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                      </div>
                    </div>