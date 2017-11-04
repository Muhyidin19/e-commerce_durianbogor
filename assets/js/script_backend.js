//-----------------------------------FungsiUmum-------------------------------//
$(document).ready(function(){
  $('.parallax').parallax();
  $(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
    menuWidth: 200,
    edge: 'left',
    closeOnClick: true,
    draggable: true
  }
  );
  $('.modal').modal();
  $('.modal').modal({
    dismissible: true,
    opacity: .5,
    inDuration: 700,
    outDuration: 200,
    startingTop: '4%',
    endingTop: '10%',
   }
  );
  $('select').material_select();
  $('.datepicker').pickadate({
    selectMonths: true,
    selectYears: 15
  });
  $(".button-collapse").sideNav();
  $('.button-collapse').sideNav({
    menuWidth: 250,
    edge: 'left',
    closeOnClick: true,
    draggable: true
  });
  $('.fixed-action-btn').openFAB();
  $('.fixed-action-btn').closeFAB();
  $('.fixed-action-btn.toolbar').openToolbar();
  $('.fixed-action-btn.toolbar').closeToolbar();
  $('.tap-target').tapTarget('open');
  $('.tap-target').tapTarget('close');
  $('.tooltipped').tooltip({delay: 50});
});
//---------------------------------Akhir-FungsiUmum-----------------------------//


//----------------------------------CariProduk------------------------------//
$(document).ready(function(){
  var base_url = $('#base_url').val();

$("#cariproduk").keyup(function() {
  var key = $('#cariproduk').val();
    if (key =="") {
      cariproduk();
    }
  });
  $('#cariproduk').keyup(function(keyboard) {
    if(keyboard.keyCode == 13) {
      cariproduk();
    }
  });

  function cariproduk(){
    $('.hasil-cari').show();
    var key = $('#cariproduk').val();

    if (key != '') {
      $('#cari-ilang').hide();
      $.ajax({
        url: base_url+'admin/include/cari_produk.php',
        type: 'post',
        data: "key="+key,
        success: function(data){
          if (data !="") {
            $('.hasil-cari').html(data);
          }
        }
      });
    }else{
      $('.hasil-cari').hide();
      $('#cari-ilang').show();
    }
}
}(jQuery));
//------------------------------Akhir-CariProduk------------------------------//
