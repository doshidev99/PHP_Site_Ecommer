<?php

$_request = $db->getAllData('request');


?>


<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="container">

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