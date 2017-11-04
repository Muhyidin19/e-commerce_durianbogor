//-----------------------------------FungsiUmum-------------------------------//
$(document).ready(function(){
  var base_url = $('#base_url').val();

  $('.button-collapse').sideNav({
    menuWidth: 200,
    edge: 'left',
    closeOnClick: true,
    draggable: true
    } 
  );
  $('.modal').modal();
  $('.modal').modal({
    dismissible: false,
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
    selectYears: 20
  });
  $('.parallax').parallax();
  $('.scrollspy').scrollSpy();
  $(".dropdown-button").dropdown();
  $('.collapsible').collapsible();
}(jQuery));
//--------------------------------Akhir-FungsiUmum------------------------------//

//-----------------------------------Komentar---------------------------------//
$(document).ready(function(){
  var base_url = $('#base_url').val();

$("#tombolKomen").click(function(){
  insert();
});

function insert(){
  var komentar  = $("#komenField").val();
  var id_produk = $("#id_produk").val();
  if(komentar !=""){
    $.ajax({
      type:"POST",
      url:base_url+"file_query/query_komentar.php",
      data :"komentar="+komentar+"&id_produk="+id_produk,
      success:function(hasil){
        $("#result").append(hasil);
        $("#komenField").val("");
      }
    });
  }
}
}(jQuery));
//---------------------------------Akhir-Komentar-----------------------------//

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
    $('.cari-hasil').show();
    var key = $('#cariproduk').val();

    if (key != '') {
      $('#sementara-hilang').hide();
      $.ajax({
        url: base_url+"include/search.php",
        type: 'post',
        data: "key="+key,
        success: function(data){
          if (data !="") {
            $('.cari-hasil').html(data);
          }
        }
      });
    }else{
      $('.cari-hasil').hide();
      $('#sementara-hilang').show();
    }
}
}(jQuery));
//------------------------------Akhir-CariProduk------------------------------//
