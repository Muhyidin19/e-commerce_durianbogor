<!-- Alert Selamat Datang -->
<?php
  if (!empty($_SESSION['user'])) {
    if ($_SESSION['pesan']=='sukses'){
    $_SESSION['pesan']='';
    $id_user=$_SESSION['user'];
    $sql=mysqli_query($con,"SELECT * from tb_user WHERE id_user=$id_user");
    while($hasil=mysqli_fetch_assoc($sql)){
 ?>
 <script type="text/javascript">
   swal({
     text: "<img src='<?php echo $base_url ?>assets/images/user/<?php echo $hasil['foto'] ?>' width='100px' heigh='100px' class='circle'>",
     title: "Selamat Datang <b><?php echo $hasil['name']; ?></b>",
     html:true
   });
 </script>
<?php } } else{

}} ?>
<!-- Akhir Alert Selamat Datang -->
