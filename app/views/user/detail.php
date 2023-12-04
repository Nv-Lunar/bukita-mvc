  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA Snack
            </div>
            <div class="card-body">
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                      <td><?php $no = 1 ; echo $no++ ?></td>
                      <td><?php echo $data['user']['nama'] ?></td>
                      <td><?php echo $data['user']['username'] ?></td>
                      <td><?php echo $data['user']['password'] ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
