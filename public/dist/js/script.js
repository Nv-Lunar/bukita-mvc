// //jangan menggunakan jquery di chrome karena kemungkinan eror(pakai edge)

// $(function () {
//   $('.modalTambah').on('click', function () {
//     $('#modalLabel').html('Tambah Data Snack');
//     $('.modal-footer button[type=submit]').html('Tambah Data');
//     $('.modal-body form').attr('action', 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/insert');

//     // console.log(data);
//     // $('#id').val('ededr');
//     // $('#nama').val('fvftv');
//     // $('#harga').val('');
//     // $('#jenis').val();
//     // $('#barcode').val('');
//     // $('#gambar').val('');

//     $.ajax({
//       url: 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/getUbah',
//       data: { id: null },
//       method: 'post',
//       dataType: 'json',
//       success: function (data) {
//         console.log(data);
//         $('#id').val(data.id);
//         $('#judul').val(data.null);
//         $('#penerbit').val(data.null);
//         $('#pengarang').val(data.null);
//         $('#tahun').val(data.null);
//         $('#kategori_id').val(data.null);
//         $('#harga').val(data.null);
//       },
//     });
//   });

//   $('.modalUbah').on('click', function () {
//     $('#modalLabel').html('Ubah Data Buku');
//     $('.modal-footer button[type=submit]').html('Ubah Data');
//     $('.modal-body form').attr('action', 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/ubah');
//     const id = $(this).data('id');

//     $.ajax({
//       url: 'http://localhost:8080/pelajaran_xi_pplg1/bukita_mvc/public/Buku/getUbah',
//       data: { id: id },
//       method: 'post',
//       dataType: 'json',
//       success: function (data) {
//         console.log(data);
//         $('#id').val(data.id);
//         $('#judul').val(data.judul);
//         $('#penerbit').val(data.penerbit);
//         $('#pengarang').val(data.pengarang);
//         $('#tahun').val(data.tahun);
//         $('#kategori_id').val(data.kategori_id);
//         $('#harga').val(data.harga);
//       },
//     });
//   });
// });
