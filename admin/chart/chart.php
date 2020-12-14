<?php

$sql = "SELECT * from `product` WHERE `id_category` = 1";
$db->execute($sql);
$countHomeStay = $db->num_rows();

$sql = "SELECT * from `product` WHERE `id_category` = 2";
$db->execute($sql);
$countHome = $db->num_rows();


$sql = "SELECT * from `product` WHERE `id_category` = 3";
$db->execute($sql);
$ch = $db->num_rows();

$sql = "SELECT * from `product` WHERE `id_category` = 4";
$db->execute($sql);
$state = $db->num_rows();

$sql = "SELECT * from `product` WHERE `id_category` = 5";
$db->execute($sql);
$shopHouse = $db->num_rows();


$sql = "SELECT * from `product` WHERE `id_category` = 6";
$db->execute($sql);
$ktx = $db->num_rows();

$sql = "SELECT * from `product` WHERE `id_category` = 7";
$db->execute($sql);
$mb = $db->num_rows();


$sql = "SELECT * from `product` WHERE `id_category` = 8";
$db->execute($sql);
$pt = $db->num_rows();



$sql = "SELECT * from `product` WHERE `id_category` = 9";
$db->execute($sql);
$condotel = $db->num_rows();

// INSERT INTO `request`(`id_request`, `name`, `date`, `service`, `status`, `price`, `phone`) VALUES (1,'Tran Van chung','2020-11-11','monachy',1,0,'0901989847')
?>
<div class="py-5">

	<div class="row">
		<div class="col-12" id="category" style="height: 400px; "></div>
		<div class="col-12" id="container" style="height: 400px"></div>
	</div>

</div>
</div>


<script>
	anychart.onDocumentReady(function() {
		// create pie chart with passed data
		var chart = anychart.pie([
			['Home-stay', <?php echo $countHomeStay ?>],
			['Nhà ở', <?php echo $countHome ?>],
			['Căn hộ', <?php echo $ch ?>],
			['Chung cư', <?php echo $state ?>],
			['Shop house', <?php echo $shopHouse ?>],
			['Kí túc xá cao cấp', <?php echo $ktx ?>],
			['Mặt bằng', <?php echo $mb ?>],
			['Phòng trọ', <?php echo $pt ?>],
			['Condotel', <?php echo $condotel ?>],
		]);

		// set chart title text settings
		chart
			.title('Loại Bất Động Sản')
			.radius('33%')
			// create empty area in pie chart
			.innerRadius('30%');

		// set container id for the chart
		chart.container('category');
		// initiate chart drawing
		chart.draw();
	});
</script>