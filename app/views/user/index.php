<h1>user</h1>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <?= Flasher::flash(); ?>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="row justify-content-between">
        <button type="button" class="btn btn-primary mb-2 modalTambahUser col-5" data-bs-toggle="modal" data-bs-target="#formModalUser">
          Tambah Data user
        </button>
        <a href="<?= BASEURL ?>user/detailAll"  class="btn btn-primary mb-2 col-5">
          Detail Semua Data user
      </a>
      </div>
      <ul class="list-group">
        <?php foreach ($data['user'] as $user): ?>
          <li class="list-group-item ">
            <?= $user['nama'] ?>
            <a href="<?= BASEURL ?>user/delete/<?= $user['id']; ?>" class="badge bg-danger float-end me-2"
              onclick="return confirm('yakin?')">Hapus</a>
            <a href="<?= BASEURL ?>user/update/<?= $user['id']; ?>"
              class="badge bg-success float-end me-2 modalUbahUser"  data-bs-toggle="modal" data-bs-target="#formModalUser"
              data-id="<?= $user['id']; ?>">Update</a>
            <a href="<?= BASEURL ?>user/detail/<?= $user['id']; ?>"
              class="badge bg-primary float-end me-2">Detail</a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>

<!-- insert -->

<div class="modal fade" id="formModalUser" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>User/insert" method="post">
        <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
          </div>
          <div class="mb-3">
            <label for="user" class="form-label">Username</label>
            <input type="user" name="username" class="form-control" id="username">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" placeholder="Masukkan password user" class="form-control" id="password">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Insert user</button>
        </form>
      </div>
    </div>
  </div>
</div>



