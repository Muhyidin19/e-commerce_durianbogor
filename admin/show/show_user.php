	<?php include'../include/header.php'; ?>
	<?php include'../include/nav.php'; ?>
	<?php include'../include/slide-out.php'; ?>
	<?php include'../include/back_to_top.php' ?>
	<?php include'../include/icon_action.php'; ?>

	<br><br><br>

  <!-- Data User -->
  <div class="col s12">
    <div class="conta" style="min-height:400px;">
      <div class="row white  radius z-depth-1 padding-add">
        <div class="col s12 m12 black-text">
					<blockquote>
						<h3 class="black-text"><i class="material-icons">person_pin</i> Data User</h3>
					</blockquote>
          <div class="row">
            <div class="col s12 m8 l8">
            </div>
            <div class="col s12 m4 l4">
							<?php $sql=("SELECT COUNT(*) from tb_user");
										$query=mysqli_query($con,$sql);
		                $row=mysqli_fetch_row($query);

		          ?>
              <h4 class="font-right"><i class="material-icons">equalizer </i> Jumlah User : <?php echo $row[0];?></h4>
            </div>
            <hr>
          </div>
          <table class="bordered responsive-table">
            <thead>
              <tr>
                <th>No</th>
								<th>Foto</th>
                <th>Nama</th>
                <th>Alamat E-mail</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th colspan=2>Opsi</th>
              </tr>
            </thead>
            <tbody>
							<?php
                $no=1;
                $query=("SELECT * FROM tb_user");
                $data=mysqli_query($con,$query);
                while($hasil = mysqli_fetch_assoc($data)){
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
								<?php if ($hasil['foto']==null){ ?>
									<td style="width:120px; height:120px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/not_found/no_image.png"></td>
								<?php }else{ ?>
								<td style="width:100px; height:100px;"><img class="materialboxed responsive-img circle" src="<?php echo $base_url; ?>assets/images/user/<?php echo $hasil['foto'];?>"></td>
								<?php } ?>
								<td><?php echo $hasil['name']; ?></td>
                <td><?php echo $hasil['email']; ?></td>
                <td><?php echo $hasil['jenis_kelamin']; ?></td>
                <td><?php echo $hasil['alamat']; ?></td>
                <td><?php echo $hasil['telepon']; ?></td>
                <td><a href="<?php echo $base_url; ?>admin/edit/edit_user?id_user=<?php echo $hasil['id_user']; ?>" class="btn btn-hover green waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Ubah"><i class="material-icons">settings</i></a></td>
                <td><a href="<?php echo $base_url; ?>admin/file_query/query_hapus_user?id_user=<?php echo $hasil['id_user']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a></td>
              </tr>
							<?php } ?>
            </tbody>
          </table>
          <div class="padding-bottom"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Data User -->

  <br><br>

	<?php include'../include/footer.php'; ?>
