<!-- <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA BUKU
            </div>
            <div class="card-body">
              <a href="tambah-buku.php" class="btn btn-md btn-success" style="margin-bottom: 10px">KEMBALI</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penerbit Buku</th>
                    <th scope="col">pengarang</th>
                    <th scope="col">tahun</th>
                    <th scope="col">kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                      <?php $no=1; foreach ($data['Buku'] as $Buku): ?>

                  <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $Buku['judul'] ?></td>
                      <td><?= $Buku['penerbit'] ?></td>
                      <td><?= $Buku['pengarang'] ?></td>
                      <td><?= $Buku['tahun'] ?></td>
                      <td><?= $Buku['kategori_id'] ?></td>
                      <td><?= $Buku['harga'] ?></td>
                      <td class="text-center">
                        <a href="edit-buku.php?id=<? $Buku['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="../logic/hapus-buku.php?id=<?= $Buku['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div> -->