<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<?php $this->load->view("admin/_partials/head.php") ?>
	<?php $this->load->view("member/_mpartials/head.php") ?>
</head>
<body id="page-top">

	 <!-- Header -->
	 <header class="masthead">
    <div class="container">
          <div class="intro-text">
            <div class="intro-lead-in">Selamat Datang di </div>
            <div class="intro-heading text-uppercase">SI Geografis UMKM Yogyakarta</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php echo site_url('admin/login') ?>">See More</a>
          </div>
        </div>
  </header>


	<!-- <div id="container"> -->
		<!-- <h1>Welcome to CodeIgniter!</h1>

		<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
		</div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
	</div> -->
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>
</html>