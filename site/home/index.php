<!doctype html>
<html lang="en">

<?php
require '../../connected.php';


$_products = $db->getDataWithCondition('product', 'special', 2);
$_category = $db->getAllData('category');

$category = $_GET['category'];
$name_product = $_GET['name_product'];

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
                <li class="nav-item active"><a class="nav-link"> Trang Chủ </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> Danh sách <span class="caret"><i class="fas fa-caret-down"></i></span></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="../property_grid.php">Hiển thị dạng lưới</a></li>
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
                <li class="nav-item"><a class="nav-link" href="../about.php"> Về chúng tôi </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="./blog.php"> Tin tức </a> </li>
                <li class="nav-item"><a class="nav-link" href="../contact.php"> Liên hệ</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!--Header End-->

  <!--slider start-->
  <div class="slider-wrap wow fadeInUp">
    <div class="container">
      <div class="sliderTxt">
        <h1>Tìm kiếm bất động sản</h1>
        <p>Chỉ từ 10$ mỗi ngày chiết khấu không giới hạn</p>
        <div id="exTab1" class="container">
          <ul class="nav nav-pills">
            <li> <a href="#1a" class="active" data-toggle="tab">Mua Ngay</a> </li>
            <li><a href="#2a" data-toggle="tab">Thuê bất động sản</a> </li>
          </ul>
          <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
              <div class="form-wrap">
                <form method="GET" enctype="multipart/form-data" action="../search.php">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="input-group origin">
                        <input type="text" name=" name_product" placeholder="Tên bất động sản" class="form-control">
                      </div>
                    </div>

                    <!-- <div class="col-lg-3">
                      <div class="input-group">

                        <select class="nice-select form-control wide select_option" name="category" style="border: none; border-radius: 3px" selected>
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
                      </div> -->
                    </div>


                    <div class="col-lg-2">
                      <div class="input-btn">
                        <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Tìm kiếm </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <div class="tab-pane" id="2a">
              <div class="form-wrap">
                <form>
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="input-group origin">
                        <input type="text" name=" Origin" placeholder="Enter Property, Location, Landmark ..." class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="input-group destination">
                        <input type="text" name=" Destination" placeholder="Location" class="form-control">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="input-group">
                        <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Property Type</span>
                          <ul class="list">
                            <li data-value="Property Type" data-display="Property Type" class="option selected focus">Property Type</li>
                            <li data-value="Residential" class="option">Residential</li>
                            <li data-value="Commercial" class="option">Commercial</li>
                            <li data-value="Land" class="option">Land</li>
                            <li data-value="Luxury" class="option">Luxury</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 end_date">
                      <div class="input-group">
                        <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Phòng ngủ</span>
                          <ul class="list">
                            <li data-value="Phòng ngủ" data-display="Phòng ngủ" class="option selected focus">Phòng ngủ</li>
                            <li data-value="1" class="option">1</li>
                            <li data-value="2" class="option">2</li>
                            <li data-value="3" class="option">3</li>
                            <li data-value="4" class="option">4</li>
                            <li data-value="5" class="option">5</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 economy">
                      <div class="input-group">
                        <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Phòng tắm</span>
                          <ul class="list">
                            <li data-value="Phòng tắm" data-display="Phòng tắm" class="option selected">Phòng tắm</li>
                            <li data-value="1" class="option">1</li>
                            <li data-value="2" class="option">2</li>
                            <li data-value="3" class="option">3</li>
                            <li data-value="4" class="option">4</li>
                            <li data-value="5" class="option">5</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="input-group">
                        <div class="nice-select form-control wide select_option" tabindex="0"><span class="current">Giá</span>
                          <ul class="list">
                            <li data-value="Property Type" data-display="Property Type" class="option selected focus">Property Giá</li>
                            <li data-value="Residential" class="option">$999 - $1999</li>
                            <li data-value="Commercial" class="option">$1999 - $2999</li>
                            <li data-value="Land" class="option">$2999 - $3999</li>
                            <li data-value="Luxury" class="option">$3999 - $4999</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="input-btn">
                        <button class="sbutn"><i class="fa fa-search" aria-hidden="true"></i> Search </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--slider end-->

  <!--Properties Start-->
  <div class="property-wrap wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>Dự án đang tiến hành</h1>
      </div>

      <!--Row Start-->
      <ul class="row">
        <?php
        $stt = 1;
        foreach (array_reverse($_products) as $value) {
        ?>
          <li class="col-lg-4">

            <div class="property_box  wow fadeInUp">
              <div class="propertyImg"><img alt="" src="<?= $ROOT_URL ?>/assets/images/<?php echo $value['image'] ?>"></div>
              <h3><a href="../property_single.php?id=<?php echo $value['id_product'] ?>"><?php echo $value['name_product']; ?></a></h3>
              <div class="property_location" style="
                        display: inline-block;
                        width: 200px;
                        white-space: nowrap;
                        overflow: hidden !important;
                        text-overflow: ellipsis;
                      "><i class="fas fa-map-marker-alt"></i>
                <?php echo $value['description']; ?>
              </div>
              <div class="heart_info">
                <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
                <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
                <div class="property_Giá">$ <?php echo $value['price'] ?> </div>
              </div>
              <div class="propert_info">
                <ul class="row">
                  <li class="col-4">
                    <div class="proprty_icon"><img alt="" src="<?= $ROOT_URL ?>/assets/images/bedroom_icon.png"></div>
                    <h5>Phòng ngủ <?php echo $value['bedRoom'] ?></h5>
                  </li>
                  <li class="col-4">
                    <div class="proprty_icon"><img alt="" src="<?= $ROOT_URL ?>/assets/images/bathroom_icon.png"></div>
                    <h5>Phòng tắm <?php echo $value['bathRoom'] ?></h5>
                  </li>
                  <li class="col-4">
                    <div class="proprty_icon"><img alt="" src="<?= $ROOT_URL ?>/assets/images/garage_icon.png"></div>
                    <h5>Parking <?php echo $value['parking'] ?></h5>
                  </li>
                </ul>
              </div>
              <div class="rent_info">
                <div class="apart">Apartment</div>
                <div class="sale">For Sale</div>
              </div>
            </div>

          </li>
        <?php
          $stt++;
        }
        ?>
      </ul>
      <!--Row End-->

    </div>
  </div>
  <!--Properties End-->

  <!--Buy and Sell Start-->
  <div class="buy-wrap wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>Mua hoặc bán nhà của bạn</h1>
      </div>
      <p>
        Cái giá của sự đau đớn để làm như vậy hoặc Donec placerat placerat. Tiếc thay, tiếng cười dễ dãi. Thung lũng bóng rổ xà lách chăm sóc tuyệt vời. Nhưng ai là hoặc gốm ullamcorper malesuada. Aenean thúc đẩy từ nỗi đau, id xe cộ nisl consectetur dapibus. Nam luôn là thung lũng bất động sản mềm. Bóng đá tài sản chất chống oxy hóa khác nhau. Chăm sóc bóng đá cho đến bây giờ. Trừ khi đây là một trong những không phải là arcu sapien Aliquam gravidaosystemula. Lâm sàng tại người tiêu dùng.


      </p>
      <!-- <div class="start_btn"> <span><a href="#">Start Search Now</a></span> <span><a href="#">Browse Properties</a></span> </div> -->
    </div>
  </div>
  <!--Buy and Sell Start-->

  <!-- popular start -->
  <section class="popular_wrap wow fadeInUp">
    <div class="container">
      <h1>Những nơi phổ biến</h1>
      <span>Dự án phổ biến</span>
      <div class="row">
        <div class="col-md-8">
          <div class="popular_img position-relative"> <img alt="" src="<?= $ROOT_URL ?>/assets/images/california.jpg">
            <div class="popular_img_text"><a href="#">Đô thị mới Tuần Châu</a></div>
          </div>
        </div>
        <div class="col-md-4 mt_md">
          <div class="popular_img position-relative"> <img alt="" src="<?= $ROOT_URL ?>/assets/images/danang.jpg">
            <div class="popular_img_text"><a href="#">Đà nẵng</a></div>
          </div>
          <div class="popular_img position-relative mt"> <img alt="" src="<?= $ROOT_URL ?>/assets/images/miami.jpg">
            <div class="popular_img_text"><a href="#">Hồ Chí Minh</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img style="height: 215px" alt="" src="<?= $ROOT_URL ?>/assets/images/hanoi.jpg">
            <div class="popular_img_text"><a href="#">Hà Nội</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img alt="" src="<?= $ROOT_URL ?>/assets/images/nhatrang.jpg">
            <div class="popular_img_text"><a href="#">Nha Trang</a></div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="popular_img position-relative mt"> <img style="height: 215px" alt="" src="<?= $ROOT_URL ?>/assets/images/cantho.jpg">
            <div class="popular_img_text"><a href="#">Cần Thơ</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- popular end -->

  <!--Properties rent Start-->
  <div class="property-wrap property_rent wow fadeInUp">
    <div class="container">
      <div class="title">
        <h1>Bất động sản cho thuê <span>
            Bất động sản cho thuê dài hạn và ngắn hạn
            .</span></h1>
      </div>

      <!--Row Start-->
      <ul class="row">

        <li class="col-lg-4">
          <div class="property_box  wow fadeInUp">
            <div class="propertyImg"><img alt="" src="<?= $ROOT_URL ?>/assets/images/propertyImg03.jpg"></div>
            <h3><a href="#">Upper portion Apartment for sale</a></h3>
            <div class="property_location"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> Staten Island / Queens</div>
            <div class="heart_info">
              <div class="heart_icon"><a href="#"><i class="fas fa-heart" aria-hidden="true"></i></a></div>
              <div class="heart_icon exchange_icon"><a href="#"><i class="fas fa-exchange-alt"></i></a></div>
              <div class="property_Giá">$ 488.00</div>
            </div>
            <div class="propert_info">
              <ul class="row">
                <li class="col-4">
                  <div class="proprty_icon"><img alt="" src="<?= $ROOT_URL ?>/assets/images/bedroom_icon.png"></div>
                  <h5>Phòng ngủ 3</h5>
                </li>
                <li class="col-4">
                  <div class="proprty_icon"><img alt="" src="<?= $ROOT_URL ?>/assets/images/bathroom_icon.png"></div>
                  <h5>Phòng tắm 2</h5>
                </li>
                <li class="col-4">
                  <div class="proprty_icon"><img alt="" src="<?= $ROOT_URL ?>/assets/images/garage_icon.png"></div>
                  <h5>Garage 1</h5>
                </li>
              </ul>
            </div>
            <div class="rent_info">
              <div class="apart">Apartment</div>
              <div class="sale">For Sale</div>
            </div>
          </div>
        </li>
      </ul>
      <!--Row End-->

    </div>
  </div>
  <!--Properties End-->

  <!-- perfect home start -->
  <section class="perfect_home_wrap wow fadeInUp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <div class="perfect_text">
            <h1>Bạn muốn tìm ngôi nhà hoàn hảo của mình?
            </h1>
            <span> Hãy đến với chung tôi, chung tôi cung cấp cho bạn các bất động sản thích hợp với giá cạnh tranh</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="readmore"><a href="#">Xem thêm</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- perfect home end -->

  <!-- our team start -->
  <section class="our_team_wrap wow fadeInUp">
    <div class="container">
      <h1>Gặp đại lý của chúng tôi</h1>
      <span>Dưới đây là một vài đại lý ủy quyền của chúng tôi</span>
      <div class="row">
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member  wow fadeInUp">
              <div class="team_img"><img alt="" src="<?= $ROOT_URL ?>/assets/images/team_1.png"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>David Strozier</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="<?= $ROOT_URL ?>/assets/images/team_2.png"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>James Adult</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="team_wrp">
            <div class="team_member wow fadeInUp">
              <div class="team_img"><img alt="" src="<?= $ROOT_URL ?>/assets/images/team_3.png"></div>
              <div class="team_icons">
                <ul>
                  <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                </ul>
              </div>
              <div class="team_name">
                <h3>Jennie Wilson</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- our team  end -->

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
                    <div class="propertyImg"><img alt="" src="images/property_small01.jpg"></div>
                    <div class="property_info">
                      <h4><a href="#">1324 Nguyễn thị thập</a></h4>
                      <p>Minneapolis, MN 55402</p>
                      <div class="GiáWrp">Từ 2 - 5 tỷ</div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="rec_proprty">
                    <div class="propertyImg"><img alt="" src="images/property_small02.jpg"></div>
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