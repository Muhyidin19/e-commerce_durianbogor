		<?php include'../include/header.php'; ?>
		<?php include'../include/nav.php'; ?>
		<?php include'../include/slide-out.php'; ?>
		<?php include'../include/back_to_top.php' ?>
		<?php include'../include/icon_action.php'; ?>

    <br><br><br>

    <!-- Content -->
    <div class="col s12">
      <div class="conta" style="min-height:400px;">
        <div class="row white  radius z-depth-1 padding-add">
          <div class="col s12 m12 black-text">
						<blockquote>
							<h3 class="black-text"><i class="material-icons">assignment_late</i> Data Keluhan</h3>
						</blockquote>
            <div class="row">
              <div class="col s12 m8 l8">
              </div>
              <div class="col s12 m4 l4">
								<?php $sql=("SELECT COUNT(*) from tb_keluhan");
											$query=mysqli_query($con,$sql);
			                $row=mysqli_fetch_row($query);
			          ?>
                <h4 class="font-right"><i class="material-icons">equalizer </i> Jumlah Keluhan : <?php echo $row[0]; ?></h4>
              </div>
              <hr>
            </div>
            <table class="bordered responsive-table">
              <thead>
                <tr>
                  <th>No</th>
									<th>Foto Keluhan</th>
                  <th>Nama</th>
                  <th>Keluhan</th>
									<th>Deskripsi Keluhan</th>
									<th>Waktu</th>
									<th>Detail</th>
									<th>Tanggapi</th>
                  <th>Opsi</th>
                </tr>
              </thead>
              <tbody>
								<?php
										$no=1;
										$query="SELECT
														tb_keluhan.id_keluhan,
														tb_keluhan.jenis_keluhan,
														tb_keluhan.keluhan,
														tb_keluhan.foto,
														tb_keluhan.waktu,tb_user.name
														FROM tb_keluhan,
														tb_user
														WHERE tb_keluhan.id_user=tb_user.id_user";
										$hasil=mysqli_query($con,$query);
										while($tampkeluh=mysqli_fetch_assoc($hasil)){
								 ?>
                <tr>
                  <td><?php echo $no++ ?></td>
									<?php if ($tampkeluh['foto']==""){ ?>
										<td style="width:100px; height:100px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/not_found/no_image.png"></td>
									<?php } else{ ?>
										<td style="width:100px; height:100px;"><img class="materialboxed responsive-img" src="<?php echo $base_url; ?>assets/images/keluhan/<?php echo $tampkeluh['foto']; ?>"></td>
									<?php } ?>
									<td><?php echo $tampkeluh['name']; ?></td>
									<td><?php echo $tampkeluh['jenis_keluhan']; ?></td>
                  <td><?php echo $tampkeluh['keluhan']; ?></td>
                  <td><?php echo $tampkeluh['waktu']; ?></td>
									<td><a href="<?php echo $base_url; ?>admin/show/show_detail_keluhan?id_keluhan=<?php echo $tampkeluh['id_keluhan']; ?>" class="btn btn-hover green waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Detail"><i class="material-icons">movie</i></a></td>
									<td><a href="<?php echo $base_url; ?>admin/post/tanggapan?id_keluhan=<?php echo $tampkeluh['id_keluhan']; ?>" class="btn btn-hover green waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Tanggapi"><i class="material-icons">forum</i></a></td>
									<td><a href="<?php echo $base_url; ?>admin/file_query/query_hapus_keluhan?id_keluhan=<?php echo $tampkeluh['id_keluhan']; ?>" class="btn delete_data btn-hover red waves-effect waves-light tooltipped" data-position="top" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a></td>
                </tr>
								<?php } ?>
              </tbody>
            </table>
            <div class="padding-bottom"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contents -->

    <br><br>

		<?php include'../include/footer.php'; ?>
