<?php

$ma_hh = $_GET['id'];

$sql = "SELECT * from `hang_hoa` WHERE `ma_hh` = $ma_hh";

$db->execute($sql);

if ($db->num_rows() == 0) {
	$_data = 0;
} else {
	while ($datas = $db->getData()) {
		$_data = $datas;
	}
}

if (isset($_POST['edit-product'])) {
	$name_product = $_POST['ten_hh'];
	$price_product = $_POST['don_gia'];
	$discount_product = (int)$_POST['giam_gia'] / 100;
	$description_product = $_POST['mo_ta'];
	$image = $db->getNameFileImage('file') ? $db->getNameFileImage('file') : $_data['hinh'];
	$category_product = $_POST['category_product'];
	$status_product = $_POST['status'];
	$current_date = date("Y/m/d");
	$amount_product = $_POST['so_luong'];

	$sql = "UPDATE `hang_hoa` SET `ma_hh`=$ma_hh,`ten_hh`='$name_product',`don_gia`=$price_product,`giam_gia`=$discount_product,`hinh`='$image',`ma_loai`=$category_product,`dac_biet`=0,`so_luong`=$amount_product,`so_luot_xem`=1000,`ngay_nhap`='$current_date',`mo_ta`='$description_product',`tinh_trang`='$status_product'";
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
							<h3 class="page-title">Sữa sản phẩm</h3>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="card">
					<div class="card-body">
						<form method="POST" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tên sản phẩm</label>
								<input name="ten_hh" value="<?php echo $_data['ten_hh'] ?>" placeholder="Áo ...." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Giá sản phẩm</label>
								<input name="don_gia" value="<?php echo $_data['don_gia'] ?>" placeholder="..." class="form-control" type="number" pattern="/\d/">
							</div>
							<div class="form-group">
								<label>Giảm Giá (%)</label>
								<input name="giam_gia" value="<?php echo $_data['giam_gia'] ?>" placeholder="..." class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="file"> Hình ảnh sản phẩm </label>
								<input id="file" value="<?php echo $_data['file'] ?>" name="file" class="form-control" type="file">
							</div>
							<div class="from-group">
								<label> Loại sản phẩm </label>
								<select name="category_product" id="<?php echo $_data['ma_loai'] ?>">
									<option value="1">Áo</option>
									<option value="2">Quần</option>
									<option value="3">Phụ kiện</option>
								</select>
							</div>
							<div class="from-group">
								<label>Tình trạng </label>
								<select name="status" id="<?php echo $_data['tinh_trang'] ?>">
									<option value="1"> Còn hàng</option>
									<option value="0"> Hết hàng</option>
								</select>
							</div>
							<div class="from-group">
								<label> Số lượng </label>
								<input name="so_luong" value="<?php echo $_data['so_luong'] ?>" class="form-control" type="number">
							</div>
							<div class="form-group">
								<label>Mô tả sản phẩm</label>
								<input name="mo_ta" value="<?php echo $_data['mo_ta'] ?>" placeholder="..." class="form-control" type="text" />
							</div>
							<div class="mt-4">
								<button name="edit-product" class="btn btn-primary" type="submit">Xác nhận sửa sản phẩm</button>
							</div>
						</form>
						<!-- Form -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>