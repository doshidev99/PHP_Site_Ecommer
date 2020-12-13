<?php

$id_product = $_GET['id'];

$sql = "SELECT * from `product` WHERE `id_product` = $id_product";

$db->execute($sql);

if ($db->num_rows() == 0) {
	$_data = 0;
} else {
	while ($datas = $db->getData()) {
		$_data = $datas;
	}
}

if (isset($_POST['edit-product'])) {
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
	$area = $_POST['parking'];

	$sql = "UPDATE `product` SET `id_product`=$id_product,`name_product`='$name_product',`price`=$price,`discount`=$discount,`image`='$image',`id_category`=$id_category,`special`=true,`bedRoom`=$bedRoom,`bathRoom`=$bathRoom,`date`='$current_date', `area`=`$area`,`description`='$description',`status`=$status";
	$isDone = $db->execute($sql);

	$sql_temp = "UPDATE `product` SET `id_product`=[value-1],`name_product`=[value-2],`price`=[value-3],`discount`=[value-4],`image`=[value-5],`date`=[value-6],`description`=[value-7],`id_category`=[value-8],`special`=[value-9],`bedRoom`=[value-10],`bathRoom`=[value-11],`area`=[value-12],`parking`=[value-13],`status`=1 WHERE 1";
	if ($isDone) {
		echo "<script>window.location.href = '../list/index.php' </script>";
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
								<input name="name_product" value="<?php echo $_data['name_product'] ?>" placeholder="Đất xanh ...." class="form-control" type="text">
							</div>
							<div class="form-group">
								<label>Giá sản phẩm</label>
								<input name="price" value="<?php echo $_data['price'] ?>" placeholder="..." class="form-control" type="number" pattern="/\d/">
							</div>
							<div class="form-group">
								<label>Giảm Giá (%)</label>
								<input name="discount" value="<?php echo $_data['discount'] ?>" placeholder="..." class="form-control" type="text">
							</div>

							<div class="form-group">
								<label for="file"> Hình ảnh sản phẩm </label>
								<input id="file" value="<?php echo $_data['file'] ?>" name="file" class="form-control" type="file">
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
								<select style="padding: 5px;" name="status" id="<?php echo $_data['status'] ?>">
									<option value="1"> Còn hàng</option>
									<option value="0"> Hết hàng</option>
								</select>
							</div>
							<div class="from-group py-2">
								<div class="d-flex">
									<div class="col-3 pl-0">
										<label>BedRoom </label>
										<input name="bedRoom" placeholder="bed-room" value="<?php echo $_data['bedRoom'] ?>" class="form-control" type="number">
									</div>
									<div class="col-3 pl-0">
										<label>BathRoom </label>
										<input name="bathRoom" placeholder="bathRoom" value="<?php echo $_data['bathRoom'] ?>" class="form-control" type="number">
									</div>
									<div class="col-3 pl-0">
										<label>parking </label>
										<input name="parking" placeholder="parking" value="<?php echo $_data['parking'] ?>" class="form-control" type="number">
									</div>
									<div class="col-3 pl-0">
										<label>Area </label>
										<input name="area" placeholder="area" value="<?php echo $_data['area'] ?>" class="form-control" type="text">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label>Mô tả sản phẩm</label>
								<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">
								<?php echo $_data['description'] ?>
								</textarea>
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