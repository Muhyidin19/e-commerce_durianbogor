<?php
  include '../config/koneksi.php';
  include '../config/waktu.php';
  include '../config/base_url.php';

  session_start();

  if (!empty($_SESSION['user'])) {

      $id_user=$_SESSION['user'];
      if(isset($_POST['checkout'])){
      $pembayaran = $_POST['pembayaran'];

      $total =0;

      foreach ($_SESSION['jumlah'] as $key => $value){
      $total += $_SESSION['jumlah'][$key]['total'];

      $jumlah=$_SESSION['jumlah'][$key]['jumlah_produk'];
      $produk=$_SESSION['jumlah'][$key]['produk'];
      $harga=$_SESSION['jumlah'][$key]['harga'];
      $ongkir=20000;
      if ($total<100000) {
        $total=$_SESSION['jumlah'][$key]['total']+$ongkir;
      }else {
        $total=$_SESSION['jumlah'][$key]['total'];
      }
      $id_cart=$_SESSION['jumlah'][$key]['id_cart'];
      $id_produk=$_SESSION['jumlah'][$key]['id_produk'];

      if ($pembayaran!="Cash On Delivery") {
        $foto='';
      }else{
        $foto='cod.png';
      }
      $checkout="INSERT INTO tb_transaksi(
                 id_cart,
                 id_produk,
                 id_user,
                 jumlah,
                 total,
                 tanggal_transaksi,
                 pembayaran,
                 foto,
                 expired)
                 VALUES(
                 '$id_cart',
                 '$id_produk',
                 '$id_user',
                 '$jumlah',
                 '$total',
                 '$tgl_skrg',
                 '$pembayaran',
                 '$foto',
                 '$waktu')";
      $hasil=mysqli_query($con,$checkout);

      if ($hasil) {
        if ($pembayaran!="Cash On Delivery") {
          unset($_SESSION['jumlah']);
          $waktos = 3600;
          $_SESSION['akhir'] = array('waktos' =>$waktos, 'waktuskrg' => $jam_skrg);
          header("location:".$base_url."show/pembelian.php");
        }else{
          unset($_SESSION['jumlah']);
          header("location:".$base_url."show/pembelian.php");
        }

        //unset($_SESSION['akhir']);
        }
      else{ ?>
        <script type="text/javascript">
  				swal({
  					text: "Gagal",
  					title: "Gagal Bertransaksi",
  					html:true
  				});
  			</script>

<?php } } } } ?>
