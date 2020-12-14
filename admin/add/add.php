<?php

if (isset($_POST['add-product'])) {
	$name_product = $_POST['name_product'];
	$price_product = $_POST['price'];
	$discount_product = (int)$_POST['discount'] / 100;
	$description_product = $_POST['description'];
	$image = $db->getNameFileImage('file') ? $db->getNameFileImage('file') : $_data['image'];
	$category_product = $_POST['category_product'];
	$status_product = $_POST['status'];
	$current_date = date("Y/m/d");
	$bedRoom = $_POST['bedRoom'];
	$bathRoom = $_POST['bathRoom'];
	$area = $_POST['area'];
	$parking = $_POST['parking'];


	$sql = "INSERT INTO `product`(`id_product`, `name_product`, `price`, `discount`, `image`, `date`,
	 `description`, `id_category`, `special`, `bedRoom`, `bathRoom`, `area`, `parking`, `status`)
	  VALUES (null,'$name_product','$price_product','$discount_product','$image','$current_date','$description_product','$category_product','0','$bedRoom','$bathRoom','$area','$parking','$status_product')";
	$isDone = $db->execute($sql);


	echo $name_product;
	if ($isDone) {
		// echo "<script>window.location.href = '../list/index.php' </script>";
	}
}

$_category = $db->getAllData('category');

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
								<input name="name_product" placeholder="Đất xanh ...." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Giá sản phẩm</label>
								<input name="price" placeholder="..." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Giảm Giá (%)</label>
								<input name="discount" placeholder="..." class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="file"> Hình ảnh sản phẩm </label>
								<input id="file" name="file" class="form-control" type="file">
							</div>
							<div class="from-group">
								<label> Loại sản phẩm </label>
								<select name="category" style="padding: 5px; border-radius: 3px" value="<?php echo $_data['id_category'] ?>">
									<?php
									foreach ($_category as $category) {
									?>
										<option value="<?php
																		echo $category['id_category']
																		?>">
											<?php
											echo $category['name_category']
											?>
										</option>


									<?php } ?>
								</select>

							</div>
							<div class="from-group py-2">
								<label>Tình trạng </label>
								<select style="padding: 5px;" name="status">
									<option value="1"> Còn hàng</option>
									<option value="0"> Hết hàng</option>
								</select>
							</div>
							<div class="from-group py-2">
								<div class="d-flex">
									<div class="col-3 pl-0">
										<label>BedRoom </label>
										<input name="bedRoom" placeholder="bed-room" class="form-control" type="number">
									</div>
									<div class="col-3 pl-0">
										<label>BathRoom </label>
										<input name="bathRoom" placeholder="bathRoom" class="form-control" type="number">
									</div>
									<div class="col-3 pl-0">
										<label>parking </label>
										<input name="parking" placeholder="parking" class="form-control" type="number">
									</div>
									<div class="col-3 pl-0">
										<label>Area </label>
										<input name="area" placeholder="area" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Mô tả sản phẩm</label>
								<textarea name="description" class="form-control" rows="3">
								</textarea>
							</div>
							<div class="mt-4">
								<button name="add-product" class="btn btn-primary" type="submit">Xác nhận sửa sản phẩm</button>
							</div>
						</form>
						<!-- Form -->

					</div>
				</div>
			</div>
		</div>
	</div>
</div>