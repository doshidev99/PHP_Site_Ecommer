<?php

if (isset($_POST['add-product'])) {
	$name_product = $_POST['ten_hh'];
	$price_product = $_POST['don_gia'];
	$discount_product = (int)$_POST['giam_gia'] / 100;
	$description_product = $_POST['mo_ta'];
	$image = $db->getNameFileImage('file');;
	$category_product = $_POST['category_product'];
	$status_product = $_POST['status'];
	$current_date = date("Y/m/d");
	$amount_product = $_POST['so_luong'];

	$sql = "INSERT INTO `hang_hoa`(`ma_hh`, `ten_hh`, `don_gia`, `giam_gia`, `hinh`, `ma_loai`, `dac_biet`, `so_luong`, `so_luot_xem`, `ngay_nhap`, `mo_ta`, `tinh_trang`) VALUES (null, '$name_product', 	$price_product, $discount_product, '$image', $category_product, 0, $amount_product, 1000, '$current_date', '$description_product', '$status_product')";
	$isDone = $db->execute($sql);

	if ($isDone) {
		echo "<script>window.location.href = '../list/index.php' </script>";
	}
}
?>

<div class="page-wrapper">
	<div class="content">
		<div class="row">
			<div class="col-xl-12">

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Thêm sản phẩm</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="card">
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên sản phẩm</label>
								<input name="ten_hh" placeholder="Áo ...." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Giá sản phẩm</label>
								<input name="don_gia" placeholder="..." class="form-control" type="number" pattern="/\d/">
							</div>
							<div class="form-group">
								<label>Giảm Giá (%)</label>
								<input name="giam_gia" placeholder="..." class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="file"> Hình ảnh sản phẩm </label>
								<input id="file" name="file" class="form-control" type="file">
							</div>
							<div class="from-group">
								<label> Loại sản phẩm </label>
								<select name="category_product" id="1">
									<option value="1">Áo</option>
									<option value="2">Quần</option>
									<option value="3">Phụ kiện</option>
									<option value="4">Nam</option>
									<option value="5">Nữ</option>
									<option value="6">Trẻ Em</option>
								</select>
							</div>
							<div class="from-group">
								<label>Tình trạng </label>
								<select name="status" id="1">
									<option value="1"> Còn hàng</option>
								</select>
							</div>
							<div class="from-group">
								<label> Số lượng </label>
								<input name="so_luong" class="form-control" type="number">

							</div>
							<div class="form-group">
								<label>Mô tả sản phẩm</label>
								<input name="mo_ta" placeholder="..." class="form-control" type="text" />
							</div>
							<div class="mt-4">
								<button name="add-product" class="btn btn-primary" type="submit">Thêm sản phẩm</button>
								<a href="categories.html" class="btn btn-link">Cancel</a>
							</div>
						</form>
						<!-- Form -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>