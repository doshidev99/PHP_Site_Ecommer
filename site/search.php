<!doctype html>
<html lang="en">

<?php
require '../connected.php';
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

?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= $ROOT_URL ?>/assets/css/bootstrap.min.css">
  <link href="<?= $ROOT_URL ?>/assets/css/all.css" rel="stylesheet">
  <!-- Owl Carousel CSS -->
  <link href="<?= $ROOT_URL ?>/assets/css/owl.carousel.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="<?= $ROOT_URL ?>/assets/css/animate.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= $ROOT_URL ?>/assets/css/nice-select.css">
  <link href="<?= $ROOT_URL ?>/assets/css/style.css" rel="stylesheet">
  <title>Real Estate</title>
</head>

<body>
  <!--Topbar Start-->
  <div class="topbar-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-4">
          <ul class="social_media style_none">
            <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-8">
          <div class="top_right">
            <div class="topbar_phone"><a href="#"><i class="fas fa-phone-alt" aria-hidden="true"></i> 0901.9898.47 </a></div>
            <div class="topbar_login"><a href="submit_property.html"> Gửi yêu cầu</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Topbar End-->

  <!--Header Start-->
  <div class="header-wrap wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 navbar navbar-expand-lg navbar-light">
          <div class="header_logo"><a href="#"><img alt="" src="<?= $ROOT_URL ?>/assets/images/logo.png"></a></div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
        </div>
        <div class="col-lg-9">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Navbar</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="./home/index.php"> Trang Chủ </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> Danh sách <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="./property_grid.php">Hiển thị dạng lưới</a></li>
                    <!-- <li><a href="property_list.html">Hiển thị dạng danh sách </a></li> -->
                    <!-- <li><a href="property_map.html">Hiển thị Map</a></li> -->
                    <!-- <li><a href="property_single.html">Hiển thị cơ bản</a></li> -->
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#."> Đối tác <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="./agents.php">Đại lý</a></li>
                    <li><a href="./contact.php">Gửi thông tin</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="./about.php"> Về chúng tôi </a>
                  <ul class="submenu">
                    <!-- <li><a href="about.html">Giới thiệu</a></li> -->
                    <!-- <li><a href="about.html"></a></li>
                    <li><a href="team.html">Our Team</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="faqs.html">Faqs</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="pricing.html">Pricing Table</a></li>
                    <li><a href="404.html">Page 404 </a></li>
                    <li><a href="typography.html">Typography</a></li> -->
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="./blog.php"> Tin tức </a> </li>
                <li class="nav-item"><a class="nav-link" href="./contact.php"> Liên hệ</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Header End-->

  <!--Inner Heading Start-->
  <div class="innerHeading">
    <div class="container">
      <h1>Chi tiết sản phẩm</h1>
    </div>
  </div>
  <!--Inner Heading End-->

  <!--Inner Content Start-->
  <div class="innercontent">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Place somewhere in the <body> of your page -->
          <div class="property_details">
            <div class="row property_head wow fadeInUp">
              <div class="col-lg-8 col-md-8">
                <h3><?php echo $_data['name_product'] ?></h3>

              </div>
              <div class="col-lg-4 col-md-4">
                <div class="heart_info">
                  <div class="heart_icon"><a href="#"><i class="fas fa-heart"></i></a></div>
                  <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
                  <div class="property_price">$ <?php echo $_data['price']; ?></div>
                </div>

              </div>
            </div>
            <div class="property_widget wow fadeInUp">
              <h3 class="desc_head">Description</h3>
              <p>
                <?php echo $_data['description']; ?>

              </p>
            </div>
            <div class="property_widget wow fadeInUp">
              <h3 class="desc_head">Property Details</h3>
              <div class="row prop_del">
                <div class="col-lg-6">
                  <ul class="property_list">
                    <li><span>Giá :</span> $<?php echo $_data['price']; ?></li>
                    <li><span>Kích thước :</span> 981 Sq Ft</li>
                    <li><span>Phòng tắm :</span> <?php echo $_data['bathRoom']; ?></li>
                    <li><span>Phòng ngủ :</span> <?php echo $_data['bedRoom']; ?></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="property_list">
                    <li><span>Ngày :</span><?php echo $_data['date']; ?> </li>
                    <li><span>Bãi đậu xe :</span> <?php echo $_data['parking']; ?></li>
                    <li><span>Kích thước :</span> <?php echo $_data['area']; ?> SqFt</li>
                    <li><span>Mặt hàng :</span>
                      <?php
                      switch ($value['id_category']) {
                        case 1:
                          echo "Home Stay";

                          break;
                        case 2:
                          echo "Nhà ở";
                          break;
                        case 3:
                          echo "Căn Hộ";
                          break;
                        case 4:
                          echo "Chung Cư";
                          break;
                        case 5:
                          echo "Shop house";
                          break;
                        case 6:
                          echo "Kí túc xá cao cấp";
                          break;
                        case 7:
                          echo "Mặt bằng";
                          break;
                        case 8:
                          echo "Phòng trọ";
                          break;
                        case 9:
                          echo "Condotel";
                          break;
                        default:
                          break;
                      }
                      ?>
                    </li>
                    <li>
                      <?php
                      switch ($value['status']) {
                        case 0:
                          echo "<span class='text-danger'> Hết hàng <span>";

                          break;
                        case 1:
                          echo "<span class='text-success'> còn hàng </span>";
                          break;

                        default:
                          break;
                      }
                      ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="property_widget wow fadeInUp">
              <h3 class="desc_head">Features</h3>
              <ul class="list-unstyled icon-checkbox">
                <li>air conditioning</li>
                <li>Laundry Room</li>
                <li>swiming pool</li>
                <li>air conditioning</li>
                <li>Central Heating</li>
                <li>gym</li>
                <li>alarm</li>
                <li>Central Heating</li>
                <li>spa &amp; massage</li>
                <li>pets allow</li>
                <li>window Covering</li>
                <li>Internet</li>
                <li>car parking </li>
              </ul>
            </div>
            <div class="property_widget wow fadeInUp">
              <h3 class="desc_head">Floor PLans</h3>
              <div class="floor_plans faqs">
                <div class="panel-group" id="accordion">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse5">Ground Floor 497 sq ft</a> </h4>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="floorImg"><img alt="" src="images/ground_floor.jpg"></div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse2"> First Floor 250 sq ft</a> </h4>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="floorImg"><img alt="" src="images/first_floor.jpg"></div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" class="collapsed" href="#collapse3"> Garage 120 sq ft </a> </h4>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse">
                      <div class="panel-body">
                        <div class="floorImg"><img alt="" src="images/garage_plan.jpg"></div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempus ullamcorper libero tincidunt fermentum. Phasellus lobortis felis ac molestie dictum. Morbi at efficitur mauris. Aliquam lobortis massa non metus vehicula, at lacinia orci suscipit. Nulla porta urna id turpis aliquet elementum.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Inner Content End-->

  <!--Footer Start-->
  <footer class="footer bg-style wow fadeInUp">
    <div class="container">
      <div class="footer-upper">
        <div class="row">
          <div class="col-lg-3 col-md-12">
            <div class="footer-widget about-widget"> <a href="#"> <img alt="" src="<?= $ROOT_URL ?>/assets/images/logo.png"> </a>
              <p>
                Chúng tôi cung cấp nhà ở và bất động sản khu vực
              </p>
              <div class="readmore"><a href="#">Read More </a></div>
            </div>
          </div>
          <div class="col-lg-2 col-md-3">
            <div class="footer-widget quick-links">
              <h3 class="title">Link rút gọn</h3>
              <ul>
                <li><a href="#."> Trang Chủ</a> </li>
                <li><a href="#."> Bất động sản</a> </li>
                <li><a href="#."> Đại lý ủy quyền</a> </li>
                <li><a href="#."> Liên hệ</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="footer-widget contact">
              <h3 class="title">Dự án gần đây</h3>
              <ul class="property_sec">
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="<?= $ROOT_URL ?>/assets/images/property_small01.jpg"></div>
                    <div class="property_info">
                      <h4><a href="#">1324 Nguyễn thị thập</a></h4>
                      <p>Minneapolis, MN 55402</p>
                      <div class="GiáWrp">Từ 2 - 5 tỷ</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="<?= $ROOT_URL ?>/assets/images/property_small02.jpg"></div>
                    <div class="property_info">
                      <h4><a href="#">1324 Nguyễn Tất Thành</a></h4>
                      <p>Minneapolis, MN 42402</p>
                      <div class="GiáWrp">Từ 5 - 7 tỷ</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="footer-widget contact">
              <h3 class="title">Liên Hệ</h3>
              <ul class="footer-adress">
                <li class="footer_address"> <i class="fas fa-map-signs"></i> <span>137 Nguyễn thị thập</span> </li>
                <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:info@realestate.com"> info@realestate.com </a></span> </li>
                <li class="footer_phone"> <i class="fas fa-phone-alt"></i> <span><a href="tel:0901989847"> 0901-9898-47</a></span> </li>
              </ul>
              <div class="social-icons footer_icon">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--Footer End-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= $ROOT_URL ?>/assets/js/jquery.min.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/popper.min.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script src="<?= $ROOT_URL ?>/assets/js/owl.carousel.js"></script>
  <!-- wow js -->
  <script src="<?= $ROOT_URL ?>/assets/js/animate.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/jquery.nice-select.js"></script>
  <script>
    new WOW().init();
  </script>
  <!-- general script file -->
  <script src="<?= $ROOT_URL ?>/assets/js/wow.js"></script>
  <script src="<?= $ROOT_URL ?>/assets/js/script.js"></script>
</body>

<!-- Mirrored from malikhassan.com/html/evernest/./home/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 04:12:48 GMT -->

</html>