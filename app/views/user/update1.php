<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
            Edit user
            </div>
            <div class="card-body">
              <form action="<?= BASEURL ?>user/ubah" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                  <label>nama User</label>
                  <input type="text" name="nama" placeholder="Masukkan nama user" class="form-control" value="<?php echo $data['nama'] ?>">
                  <input type="hidden" name="id_pengguna" value="<?= $data["id_pengguna"] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>email user</label>
                  <input type="email" name="email" class="form-control"
                  value="<?php echo $data['email'] ?>" placeholder="Masukkan email user">
                </div>

                <div class="form-group">
                  <label>password</label>
                  <input type="password" name="password" class="form-control"
                  value="<?php echo $data['password'] ?>" placeholder="Masukkan password user">
                </div>               
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>