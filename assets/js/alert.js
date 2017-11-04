//=================================LOGOUT=====================================//
jQuery(document).ready(function($){
  $('.Logout-link').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
      title: 'Keluar',
      text: 'Anda Yakin Ingin Keluar?',
      html: true,
      type: 'warning',
      confirmButtonColor: '#d9534f',
      showCancelButton: true,
    },function(){
      window.location.href = getLink
    });
    return false;
  });
});
//================================END-LOGOUT==================================//

//===================================HAPUS====================================//
jQuery(document).ready(function($){
  $('.delete_data').on('click',function(){
    var getLink = $(this).attr('href');
    swal({   title: "Hapus Data?",
    text: "Anda yakin akan menghapus data ini",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#d9534f ",
    confirmButtonText: "Ya, Hapus!",
    cancelButtonText: "Batal",
    closeOnConfirm: false },
    function(){   swal("Hapus!",
    "Data telah terhapus.",
    "success");
    window.location.href = getLink
  });
  return false;
});
});
//=================================END-HAPUS==================================//

//===================================UPDATE===================================//
jQuery(document).ready(function($){
  $('.update').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
     title: "Update Data",
     text: "Data Berhasil di Update",
     timer: 2000,
     showConfirmButton: false
    });
    window.location.href = getLink
});
});
//================================END-UPDATE==================================//

//==================================KELUHAN===================================//
jQuery(document).ready(function($){
  $('.popupkeluhan').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
     title: "Keluhan",
     text: "Terimakasih Keluhan Anda Sangat Membantu Untuk Kami",
     timer: 20000,
     showConfirmButton: false
    });
    window.location.href = getLink
});
});
//===============================END-KELUHAN==================================//

//==================================CHECKOUT===================================//
jQuery(document).ready(function($){
  $('.checkout').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
     title: "Transaksi Berhasil",
     text: "Selamat Transaksi Berhasil , Silahkan Menunggu Proses Selanjutnya",
     timer: 20000,
     showConfirmButton: false
    });
    window.location.href = getLink
});
});
//===============================END-CHECKOUT==================================//

//==================================CONFIRM===================================//
jQuery(document).ready(function($){
  $('.popupbukti').on('click',function(){
    var getLink = $(this).attr('href');
    swal({
     title: "Konfirmasi",
     text: "Selamat Transaksi Berhasil, Kami akan segera memproses pesanan Anda",
     timer: 20000,
     showConfirmButton: false
    });
    window.location.href = getLink
});
});
//===============================END-CONFIRM==================================//
