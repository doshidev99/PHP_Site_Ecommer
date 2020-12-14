<?php
include '../connected.php';
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from truelysell-admin.dreamguystech.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Oct 2020 07:03:58 GMT -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title> Site admin </title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?= $ADMIN_URL ?>/assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/select2.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/font-awesome.min.css">

	<!-- Animate CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/animate.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="<?= $ADMIN_URL ?>/assets/css/admin.css">

	<script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
	<script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
	<script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
	<link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
	<link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">


</head>

<!-- <body class="mini-sidebar"> -->

<body class="">
	<div class="main-wrapper">

		<?php require 'menu.php'; ?>

		<div class="container-fluid">
			<?php
			require $VIEW_NAME;
			?>
		</div>
	</div>

	<!-- jQuery -->
	<script src="<?= $ADMIN_URL ?>/assets/js/jquery-3.5.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="<?= $ADMIN_URL ?>/assets/js/popper.min.js"></script>
	<script src="<?= $ADMIN_URL ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="<?= $ADMIN_URL ?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<script src="<?= $ADMIN_URL ?>/assets/js/select2.min.js"></script>
	<script src="<?= $ADMIN_URL ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= $ADMIN_URL ?>/assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="<?= $ADMIN_URL ?>/assets/js/admin.js"></script>

</body>

</html>