<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/Gardu/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">



						<form action="<?php echo base_url('admin/gardu/update_gardu/' . $Gardu->id_gardu) ?>" method="POST" enctype="multipart/form-data">
							<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/Gardu/edit/ID --->

							<!-- <input type="hidden" name="id" value="<?php echo $kunci['id_gardu']; ?>" /> -->

							<div class="form-group">
								<label for="nama_gardu">Nama Gardu</label>
								<input class="form-control <?php echo form_error('nama_gardu') ? 'is-invalid' : '' ?>" type="text" name="nama_gardu" placeholder="Nama Ketua Tim" value="<?php echo $Gardu->nama_gardu ?>" required />
							</div>

							<div class="form-group">
								<label for="foto_gardu">Foto Gardu</label>
								<div><img src="<?php echo base_url('./assets/kk/') . $Gardu->gambar ?>" border="0" width="70px" height="70px" /></div>
								<input class="form-control <?php echo form_error('foto_gardu') ? 'is-invalid' : '' ?>" type="file" name="gambar" placeholder="Foto Gardu" />
								<input type="hidden" name="fotolama" value="<?php echo $Gardu->gambar; ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>



					</div>

					<div class="card-footer small text-muted">
						* kolom wajib terisi semua
						<br>
						* maksimal ukuran file foto 2 MB
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
