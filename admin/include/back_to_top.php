<div class="fixed-action-btn click-to-toggle horizontal" style="bottom:90px;right:25px;">
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
