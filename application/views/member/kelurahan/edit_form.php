<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("member/_mpartials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("member/_mpartials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("member/_mpartials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("member/_mpartials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('member/mkelurahan/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/kelurahan/edit/ID --->

							<input type="hidden" name="id_kel" value="<?php echo $mkelurahan->id_kel?>" />

							<div class="form-group">
								<label for="name">Nama kelurahan*</label>
								<input class="form-control <?php echo form_error('nama_kel') ? 'is-invalid':'' ?>"
								 type="text" name="nama_kel" placeholder="Nama kelurahan" value="<?php echo $mkelurahan->nama_kel ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_kel') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">ID Kecamatan*</label>
								<input class="form-control <?php echo form_error('nama_kel') ? 'is-invalid':'' ?>"
								 type="dropdown" name="id_kec" placeholder="ID Kecamatan" value="<?php echo $mkelurahan->id_kec ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kec') ?>
								</div>
							</div>
							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("member/_mpartials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("member/_mpartials/scrolltop.php") ?>

		<?php $this->load->view("member/_mpartials/js.php") ?>

</body>

</html>