<h1>Snack</h1>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no = 1; ?>
                    <?php foreach($data as $alldata): ?>
                    <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $alldata['nama'] ?></td>
                    <td><?= $alldata['username'] ?></td>
                    <td><?= $alldata['password'] ?></td>
                  </tr>
                  <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= BASEURL ?>public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= BASEURL ?>public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= BASEURL ?>public/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/jszip/jszip.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= BASEURL ?>public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= BASEURL ?>public/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= BASEURL ?>public/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>
