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

						<a href="<?php echo site_url('member/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="" method="post" enctype="multipart/form-data">
						<!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/admin/edit/ID --->

							<input type="hidden" name="id_member" value="<?php echo $member->id_member?>" />

							<div class="form-group">
								<label for="name">Nama Member*</label>
								<input class="form-control <?php echo form_error('nama_member') ? 'is-invalid':'' ?>"
								 type="text" name="nama_member" placeholder="Nama Member" value="<?php echo $member->nama_member ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_member') ?>
								</div>
                            </div>
                            <div class="form-group">
								<label for="name">Email Admin*</label>
								<input class="form-control <?php echo form_error('email_admin') ? 'is-invalid':'' ?>"
								 type="text" name="email_admin" placeholder="Nama Admin" value="<?php echo $admin->email_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('email_admin') ?>
								</div>
                            </div>
                            <div class="form-group">
								<label for="name">No HP Admin*</label>
								<input class="form-control <?php echo form_error('nohp_admin') ? 'is-invalid':'' ?>"
								 type="text" name="nohp_admin" placeholder="Nama Admin" value="<?php echo $admin->nohp_admin ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nohp_admin') ?>
								</div>
                            </div>
                            <div class="form-group">
								<label for="name">Password Member*</label>
								<input class="form-control <?php echo form_error('password_admin') ? 'is-invalid':'' ?>"
								 type="text" name="password" placeholder="Password Admin" value="<?php echo $admin->password ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('password') ?>
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