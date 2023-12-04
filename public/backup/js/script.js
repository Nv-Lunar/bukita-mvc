//jangan menggunakan jquery di chrome karena kemungkinan eror(pakai edge)


//buku ajax
$(function () {
  $('.modalTambahBuku').on('click', function () {
    $('#modalLabel').html('Tambah Data Snack');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/insert');

    $.ajax({
      url: 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/getUbah',
      data: { id: null },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data);
        // $('#id').val(data.id);
        $('#judul').val(data.null);
        $('#penerbit').val(data.null);
        $('#pengarang').val(data.null);
        $('#tahun').val(data.null);
        $('#kategori_id').val(data.null);
        $('#harga').val(data.null);
      },
    });
  });

  $('.modalUbahBuku').on('click', function () {
    $('#modalLabel').html('Ubah Data Buku');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/ubah');
    const id = $(this).data('id');

    $.ajax({
      url: 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/getUbah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $('#id').val(data.id);
        $('#judul').val(data.judul);
        $('#penerbit').val(data.penerbit);
        $('#pengarang').val(data.pengarang);
        $('#tahun').val(data.tahun);
        $('#kategori_id').val(data.kategori_id);
        $('#harga').val(data.harga);
      },
    });
  });
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////

//user ajax
$(function () {
  $('.modalTambahUser').on('click', function () {
    $('#modalLabel').html('Tambah Data User');
    $('.modal-footer button[type=submit]').html('Tambah Data');
    $('.modal-body form').attr('action', 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/User/insert');

    $.ajax({
      url: 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/User/getUbah',
      data: { id: null },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $('#id').val(data.null);
        $('#nama').val(data.null);
        $('#username').val(data.null);
        $('#password').val(data.null);
      },
    });
  });

  $('.modalUbahUser').on('click', function () {
    $('#modalLabel').html('Ubah Data User');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action', 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/User/ubah');
    const id = $(this).data('id');
    console.log(id)

    $.ajax({
      url: 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/User/getUbah',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data);
        $('#id').val(data.id);
        $('#nama').val(data.nama);
        $('#username').val(data.username);
        $('#password').val(data.password);
      },
    });
  });
});

