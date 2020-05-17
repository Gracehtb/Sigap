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

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('member/kelurahan/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
								<tr>
									<tr>
										<th>ID kelurahan</th>
										<th>Nama kelurahan</th>
										<th>ID kecamatan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($kelurahan as $kelurahan): ?>
									<tr>
										<td width="150">
										<?php echo $kelurahan->id_kel ?>
										</td> <td width="150">
											<?php echo $kelurahan->nama_kel ?>
										</td>
										</td> <td width="150">
											<?php echo $kelurahan->id_kec ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('member/kelurahan/edit/'.$kelurahan->id_kel) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('mmeber/kelurahan/delete/'.$kelurahan->id_kel) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
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
	<?php $this->load->view("member/_mpartials/modal.php") ?>

	<?php $this->load->view("member/_mpartials/js.php") ?>

	<script>
	function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>
</body>

</html>