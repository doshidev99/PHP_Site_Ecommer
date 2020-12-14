<?php

$db->getAllData('customer');
$db->num_rows();
if ($db->num_rows()) {
	$count_users = $db->num_rows();
	$_data = 0;
}

$_request = $db->getAllData('request');


?>

<div class="page-wrapper">
	<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-12">
					<h3 class="page-title">Welcome <?php
																					echo $_SESSION['name-admin'];
																					?>!</h3>
				</div>
			</div>
		</div>
		<!-- /Page Header -->

		<div class="row">
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card">
					<div class="card-body">
						<div class="dash-widget-header">
							<span class="dash-widget-icon bg-primary">
								<i class="far fa-user"></i>
							</span>
							<div class="dash-widget-info">
								<h3>
									<?php
									echo $count_users;
									?>
								</h3>
								<h6 class="text-muted">Users</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card">
					<div class="card-body">
						<div class="dash-widget-header">
							<span class="dash-widget-icon bg-primary">
								<i class="fas fa-user-shield"></i>
							</span>
							<div class="dash-widget-info">
								<h3>148</h3>
								<h6 class="text-muted">Providers</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card">
					<div class="card-body">
						<div class="dash-widget-header">
							<span class="dash-widget-icon bg-primary">
								<i class="fas fa-qrcode"></i>
							</span>
							<div class="dash-widget-info">
								<h3>124</h3>
								<h6 class="text-muted">Services</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-sm-6 col-12">
				<div class="card">
					<div class="card-body">
						<div class="dash-widget-header">
							<span class="dash-widget-icon bg-primary">
								<i class="far fa-credit-card"></i>
							</span>
							<div class="dash-widget-info">
								<h3>$11378</h3>
								<h6 class="text-muted">Subscription</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 d-flex">

				<!-- Recent Bookings -->
				<div class="card card-table flex-fill">
					<div class="card-header">
						<h4 class="card-title">Yêu cầu gần đây</h4>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-center">
								<thead>
									<tr>
										<th>Tên</th>
										<th>Ngày</th>
										<th>Yêu cầu</th>
										<th>Tình trạng</th>
										<th>Số tiền</th>
									</tr>
								</thead>
								<tbody>

									<?php
									foreach ($_request as $request) {
									?>
										<tr>
											<td class="text-nowrap">
												<?php echo $request['name'] ?>

											</td>
											<td class="text-nowrap"><?php echo $request['date'] ?></td>
											<td><?php echo $request['service'] ?></td>
											<td>
												<label class="badge">
													<?php
													switch ($value['status']) {
														case 0:
															echo "<span class='text-success'> Cần tư vấn </span>";
															break;
														case 1:
															echo "<span class='text-danger'> Đã gửi thông tin <span>";
															break;

														default:
															break;
													}
													?>
												</label>
											</td>
											<td>
												<div class="font-weight-600"><?php echo $request['price'] ?></div>
											</td>
										</tr>


									<?php } ?>


								</tbody>
							</table>
						</div>
					</div>
				</div>
				<!-- /Recent Bookings -->

			</div>
		</div>
	</div>
</div>