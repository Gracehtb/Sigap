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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/adusaha/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php echo site_url('admin/adusaha/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">ID usaha*</label>
								<input class="form-control <?php echo form_error('id_usaha') ? 'is-invalid':'' ?>"
								 type="text" name="id_usaha" placeholder="ID usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('id_usaha') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Nama Usaha*</label>
								<input class="form-control <?php echo form_error('nama_ush') ? 'is-invalid':'' ?>"
								 type="text" name="nama_ush" placeholder="Nama Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_ush') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">Alamat Usaha*</label>
								<input class="form-control <?php echo form_error('alamat_ush') ? 'is-invalid':'' ?>"
								 type="date" name="alamat_ush" placeholder="Alamat Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('alamat_ush') ?>
								</div>
							</div>

							<div class="form-group">
                                <label for="name">Keterangan Usaha*</label>
								<input class="form-control <?php echo form_error('ket_ush') ? 'is-invalid':'' ?>"
								 type="text" name="ket_ush" placeholder="Keterangan Usaha" />
								<div class="invalid-feedback">
									<?php echo form_error('ket_ush') ?>
								</div>
							</div>

							<div class="form-group">
                                <label for="name">Longitude*</label>
								<input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>"
								 type="text" name="longitude" placeholder="Longitude" />
								<div class="invalid-feedback">
									<?php echo form_error('longitude') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">Longitude*</label>
								<input class="form-control <?php echo form_error('longitude') ? 'is-invalid':'' ?>"
								 type="text" name="longitude" placeholder="Longitude" />
								<div class="invalid-feedback">
									<?php echo form_error('longitude') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">Latitude*</label>
								<input class="form-control <?php echo form_error('latitude') ? 'is-invalid':'' ?>"
								 type="text" name="latitude" placeholder="Latitude" />
								<div class="invalid-feedback">
									<?php echo form_error('latitude') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">ID Kelurahan*</label>
								<input class="form-control <?php echo form_error('id_kel') ? 'is-invalid':'' ?>"
								 type="text" name="id_kel" placeholder="ID Kelurahan" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kel') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">ID Kecamatan*</label>
								<input class="form-control <?php echo form_error('id_kec') ? 'is-invalid':'' ?>"
								 type="text" name="id_kec" placeholder="ID Kecamatan" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kec') ?>
								</div>
							</div>

                            <div class="form-group">
                                <label for="name">ID Kategori*</label>
								<input class="form-control <?php echo form_error('id_kat') ? 'is-invalid':'' ?>"
								 type="text" name="id_kat" placeholder="ID Kategori" />
								<div class="invalid-feedback">
									<?php echo form_error('id_kat') ?>
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
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>