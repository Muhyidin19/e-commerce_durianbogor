<!-- Icon Action -->
<div class="fixed-action-btn horizontal">
  <a class="btn-floating btn-large red waves-effect waves-light">
    <i class="large material-icons">grade</i>
  </a>
  <ul>
    <li><a class="btn-floating red darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Tersedia Bayar di tempat"><i class="material-icons">language</i></a></li>
    <li><a class="btn-floating orange tooltipped" data-position="top" data-delay="50" data-tooltip="Pengiriman akan di lakukan kurang lebih dari 24 Jam"><i class="material-icons">schedule</i></a></li>
    <li><a class="btn-floating blue tooltipped" data-position="top" data-delay="50" data-tooltip="Dapat mengunjungi toko secara langsung dengan cara membuka halaman tentang dan cek lokasi toko."><i class="material-icons">location_on</i></a></li>
    <li><a class="btn-floating green tooltipped" data-position="top" data-delay="50" data-tooltip="Pertama Hadir situs jual buah online dan hanya tersedia di daerah Bogor saja."><i class="material-icons">store</i></a></li>
  </ul>
</div>
<!-- End Icon Action -->

<!-- Keluhan -->
<div class="fixed-action-btn click-to-toggle horizontal" style="bottom:90px;">
  <a href = "<?php echo $base_url ?>post/keluhan" class="btn-floating btn-large waves-effect waves-light yes-yellow tooltipped" data-position="top" data-delay="50" data-tooltip="Keluhan"><i class="material-icons black-text">markunread_mailbox</i></a>
</div>
<!-- Akhir Keluhan -->

<!-- Back to top -->
<div class="fixed-action-btn click-to-toggle horizontal" style="bottom:160px;">
  <a href = "" class="go-top btn-floating btn-large waves-effect waves-light blue tooltipped" data-position="top" data-delay="50" data-tooltip="Kembali ke atas"><i class="material-icons white-text">call_merge</i></a>
</div>
<script>
$(document).ready(function(){
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.go-top').fadeIn(100);
    }else {
      $('.go-top').fadeOut(100);
    }
  });
  $('.go-top').click(function(event){
    event.preventDefault();
  $('.html, body').animate({scrollTop : 0}, 1000);
  })
});
</script>
<!-- Akhir vack to top -->
