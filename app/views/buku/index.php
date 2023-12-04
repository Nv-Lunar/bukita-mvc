<h1>Buku</h1>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?= Flasher::flash(); ?>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-99">
      <div class="row mb-2 justify-content-between">

        <button type="button" class=" btn btn-primary col-md-4 modalTambahBuku " data-bs-toggle="modal"
          data-bs-target="#formModal">
          Tambah Data Buku
        </button>
        <!-- <a href="<?= BASEURL ?>Buku/detail" class="text-light btn btn-primary col-md-4">
            Detail
        </a> -->
      </div>
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
          <?php $no = 1;
          foreach ($data['Buku'] as $Buku): ?>

            <tr>
              <td>
                <?= $no++ ?>
              </td>
              <td>
                <?= $Buku['judul'] ?>
              </td>
              <td>
                <?= $Buku['penerbit'] ?>
              </td>
              <td>
                <?= $Buku['pengarang'] ?>
              </td>
              <td>
                <?= $Buku['tahun'] ?>
              </td>
              <td>
                <?= $Buku['kategori_id'] ?>
              </td>
              <td>
                <?= $Buku['harga'] ?>
              </td>
              <td class="text-center">
                <a href="<?= BASEURL ?>Buku/update/<?= $Buku['id']; ?>" class="btn btn-sm btn-primary modalUbahBuku"
                  data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $Buku['id'] ?>">EDIT</a>
                <a onclick="return confirm('yakin?')" href="<?= BASEURL ?>Buku/delete/<?= $Buku['id']; ?>"
                  class="btn btn-sm btn-danger">HAPUS</a>
              </td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
      <!-- <ul class="list-group">
        <?php foreach ($data['Buku'] as $Buku): ?>
          <li class="list-group-item ">
            <?= $Buku['judul'] ?>
            <a href="<?= BASEURL ?>Buku/delete/<?= $Buku['id']; ?>" class="badge bg-danger float-end me-2"
              onclick="confirm('yakin?')">Hapus</a>
            <a href="<?= BASEURL ?>Buku/update/<?= $Buku['id']; ?>"
              class="badge bg-success float-end me-2 modalUbah" data-bs-toggle="modal" data-bs-target="#formModal"
              data-id="<?= $Buku['id']; ?>">Update</a>
          </li>
        <?php endforeach; ?>
      </ul> -->
    </div>
  </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>Buku/insert" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="judul" class="form-label">judul</label>
            <input type="text" name="judul" class="form-control" id="judul">
          </div>
          <div class="mb-3">
            <label for="penerbit" class="form-label">penerbit</label>
            <input type="text" name="penerbit" class="form-control" id="penerbit">
          </div>
          <div class="mb-3">
            <label for="pengarang" class="form-label">pengarang</label>
            <input type="text" name="pengarang" class="form-control" id="pengarang">
          </div>
          <div class="mb-3">
            <label for="tahun" class="form-label">tahun</label>
            <input type="number" name="tahun" class="form-control" id="tahun">
          </div>
          <div class="mb-3">
            <label for="kategori_id" class="form-label">kategori_id 101-106</label>
            <input type="number" name="kategori_id" class="form-control" id="kategori_id" min="101" max="106">
          </div>
          <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Insert Buku</button>
        </form>
      </div>
    </div>
  </div>
</div>