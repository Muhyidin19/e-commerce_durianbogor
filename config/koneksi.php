<?php
//koneksi database
$con	=mysqli_connect('localhost','root','') or die("Tidak Bisa Koneksi ke MYSQL");
mysqli_select_db($con,"db_durianbogor") or die("Tidak Bisa Koneksi ke Database");
//end koneksi database
?>
