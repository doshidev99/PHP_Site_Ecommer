<!doctype html>
<html class="no-js" lang="en">

<?php
require '../../global.php';
?>

<head>
  <meta charset="utf-8">

  <!--====== Title ======-->
  <title>Zyra – Clean, Minimal HTML Template</title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="<?= $ROOT_URL ?>/asset/images/favicon.png" type="image/png">

  <link rel="stylesheet" href="<?= $ROOT_URL ?>/asset/css/vendor/plugins.min.css" />
  <link rel="stylesheet" href="<?= $ROOT_URL ?>/asset/css/style.min.css" />

</head>

<body>

  <div class="preloader">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>

  <!--====== preloader Ends ======-->

  <!--====== Header Start ======-->

  <header class="header-area">

    <div class="header-navbar">
      <div class="container-fluid custom-container">
        <div class="header-wrapper d-flex justify-content-between align-items-center">

          <div class="header-logo">
            <a href="index.html">
              <img src="<?= $ROOT_URL ?>/asset/images/logo-black.png" alt="Logo">
            </a>
          </div>

          <div class="header-meta">
            <ul class="meta">
              <li><a class="cart-toggle" href="javascript:void(0)"><i class="far fa-Shopping-cart"></i><span>3</span></a></li>
              <li><a class="search-toggle" href="javascript:void(0)"><i class="far fa-search"></i></a></li>
              <li><a class="menu-toggle" href="javascript:void(0)"><i class="fal fa-bars"></i></a></li>
            </ul>
          </div>

        </div>
      </div>

      <div id="dl-menu" class="dl-menuwrapper d-lg-none">
        <button class="dl-trigger"></button>

        <ul class="dl-menu">
          <li>
            <a href="#">Demo</a>
            <ul class="dl-submenu">
              <li>
                <a href="#">Column #1</a>
                <ul class="dl-submenu">
                  <li><a href="index.html">Home 01</a></li>
                  <li><a href="index-2.html">Home 02</a></li>
                  <li><a href="index-3.html">Home 03</a></li>
                  <li><a href="index-4.html">Home 04</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Column #2</a>
                <ul class="dl-submenu">
                  <li><a href="index-5.html">Home 05</a></li>
                  <li><a href="index-6.html">Home 06</a></li>
                  <li><a href="index-7.html">Home 07</a></li>
                  <li><a href="index-8.html">Home 08</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Column #3</a>
                <ul class="dl-submenu">
                  <li><a href="index-9.html">Home 09</a></li>
                  <li><a href="index-10.html">Home 10</a></li>
                  <li><a href="index-11.html">Home 11</a></li>
                  <li><a href="index-12.html">Home 12</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Column #4</a>
                <ul class="dl-submenu">
                  <li><a href="index-13.html">Home 13</a></li>
                  <li><a href="index-14.html">Home 14</a></li>
                  <li><a href="index-15.html">Home 15</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Shop</a>
            <ul class="dl-submenu">
              <li>
                <a href="#">Shop Pages</a>
                <ul class="dl-submenu">
                  <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                  <li><a href="shop-metro.html">Shop Metro</a></li>
                  <li><a href="shop-masonry.html">Shop Masonry</a></li>
                  <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                  <li><a href="lookbook.html">Look Book</a></li>
                  <li><a href="collections.html">Collections</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Product Pages</a>
                <ul class="dl-submenu">
                  <li><a href="product-simple-01.html">Product Simple 01</a></li>
                  <li><a href="product-simple-02.html">Product Simple 02</a></li>
                  <li><a href="product-simple-03.html">Product Simple 03</a></li>
                  <li><a href="product-simple-04.html">Product Simple 04</a></li>
                  <li><a href="product-grouped.html">Product Grouped</a></li>
                  <li><a href="product-affiliate.html">Product Affiliate</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Other Pages</a>
                <ul class="dl-submenu">
                  <li><a href="my-account.html">My Account</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="cart.html">Shopping Cart</a></li>
                  <li><a href="order-tracking.html">Order Tracking</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Page</a>
            <ul class="dl-submenu">
              <li>
                <a href="#">About Us</a>
                <ul class="dl-submenu">
                  <li><a href="about-01.html">About US 01</a></li>
                  <li><a href="about-02.html">About US 02</a></li>
                </ul>
              </li>
              <li><a href="our-services.html">Our Service</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
            </ul>
          </li>
          <li><a href="lookbook.html">Look Book</a></li>
          <li>
            <a href="#">Blog</a>
            <ul class="dl-submenu">
              <li>
                <a href="#">Blog Layout</a>
                <ul class="dl-submenu">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-list.html">Blog List</a></li>
                  <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                  <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                  <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                  <li><a href="blog-masonry.html">Blog Masonry</a></li>
                </ul>
              </li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>

  </header>

  <!--====== Header Ends ======-->

  <!--====== Off Canvas Menu Start ======-->

  <div class="off-canvas-wrapper">
    <div class="off-canvas-navbar">
      <a href="javascript:void(0)" class="menu-close"><i class="fal fa-times"></i></a>
      <nav class="canvas-menu">
        <ul class="main-menu">
          <li class="menu-item-has-children">
            <a href="#">Demo</a>
            <ul class="sub-mega-menu">
              <li class="menu-item-has-children">
                <a href="#">Column #1</a>
                <ul class="sub-menu">
                  <li><a href="index.html">Home 01</a></li>
                  <li><a href="index-2.html">Home 02</a></li>
                  <li><a href="index-3.html">Home 03</a></li>
                  <li><a href="index-4.html">Home 04</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Column #2</a>
                <ul class="sub-menu">
                  <li><a href="index-5.html">Home 05</a></li>
                  <li><a href="index-6.html">Home 06</a></li>
                  <li><a href="index-7.html">Home 07</a></li>
                  <li><a href="index-8.html">Home 08</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Column #3</a>
                <ul class="sub-menu">
                  <li><a href="index-9.html">Home 09</a></li>
                  <li><a href="index-10.html">Home 10</a></li>
                  <li><a href="index-11.html">Home 11</a></li>
                  <li><a href="index-12.html">Home 12</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Column #4</a>
                <ul class="sub-menu">
                  <li><a href="index-13.html">Home 13</a></li>
                  <li><a href="index-14.html">Home 14</a></li>
                  <li><a href="index-15.html">Home 15</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="#">Shop</a>
            <ul class="sub-mega-menu">
              <li class="menu-item-has-children">
                <a href="#">Shop Pages</a>
                <ul class="sub-menu">
                  <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                  <li><a href="shop-metro.html">Shop Metro</a></li>
                  <li><a href="shop-masonry.html">Shop Masonry</a></li>
                  <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                  <li><a href="lookbook.html">Look Book</a></li>
                  <li><a href="collections.html">Collections</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Product Pages</a>
                <ul class="sub-menu">
                  <li><a href="product-simple-01.html">Product Simple 01</a></li>
                  <li><a href="product-simple-02.html">Product Simple 02</a></li>
                  <li><a href="product-simple-03.html">Product Simple 03</a></li>
                  <li><a href="product-simple-04.html">Product Simple 04</a></li>
                  <li><a href="product-grouped.html">Product Grouped</a></li>
                  <li><a href="product-affiliate.html">Product Affiliate</a></li>
                </ul>
              </li>
              <li class="menu-item-has-children">
                <a href="#">Other Pages</a>
                <ul class="sub-menu">
                  <li><a href="my-account.html">My Account</a></li>
                  <li><a href="checkout.html">Checkout</a></li>
                  <li><a href="cart.html">Shopping Cart</a></li>
                  <li><a href="order-tracking.html">Order Tracking</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children">
            <a href="#">Page</a>
            <ul class="sub-menu">
              <li class="menu-item-has-children">
                <a href="#">About US</a>
                <ul class="sub-menu">
                  <li><a href="about-01.html">About US 01</a></li>
                  <li><a href="about-02.html">About US 02</a></li>
                </ul>
              </li>
              <li><a href="our-services.html">Our Service</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="faq.html">FAQs</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="register.html">Register</a></li>
              <li><a href="coming-soon.html">Coming Soon</a></li>
            </ul>
          </li>
          <li><a href="lookbook.html">Look Book</a></li>
          <li class="menu-item-has-children">
            <a href="#">Blog</a>
            <ul class="sub-menu">
              <li class="menu-item-has-children">
                <a href="#">Blog Layout</a>
                <ul class="sub-menu">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-list.html">Blog List</a></li>
                  <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                  <li><a href="blog-grid-01.html">Blog Grid 01</a></li>
                  <li><a href="blog-grid-02.html">Blog Grid 02</a></li>
                  <li><a href="blog-masonry.html">Blog Masonry</a></li>
                </ul>
              </li>
              <li><a href="blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!--====== Off Canvas Menu Ends ======-->

  <!--====== Search Start ======-->

  <div class="search-wrapper">
    <div class="search-box">
      <a href="javascript:void(0)" class="search-close"><i class="fal fa-times"></i></a>
      <div class="search-form">
        <label>Start typing and press Enter to search</label>
        <div class="search-input">
          <form action="#">
            <input type="text" placeholder="Search entire store…">
            <button><i class="far fa-search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!--====== Search Ends ======-->

  <!--====== Off Canvas Cart Start ======-->

  <div class="off-canvas-cart-wrapper">
    <div class="off-canvas-cart-box">
      <a href="javascript:void(0)" class="cart-close"><i class="fal fa-times"></i></a>
      <div class="off-canvas-cart-content">
        <div class="cart-title">
          <h5 class="title">Shopping Cart</h5>
        </div>
        <div class="cart-product-widget">
          <ul>
            <li>
              <div class="cart-product d-flex">
                <div class="cart-product-image">
                  <a href="product-simple-01.html"><img src="<?= $ROOT_URL ?>/asset/images/cart/product-1.jpg" alt="product"></a>
                </div>
                <div class="cart-product-content media-body">
                  <h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
                  <span class="price">1x <span>£150.00</span></span>
                </div>
                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
              </div>
            </li>
            <li>
              <div class="cart-product d-flex">
                <div class="cart-product-image">
                  <a href="product-simple-01.html"><img src="<?= $ROOT_URL ?>/asset/images/cart/product-2.jpg" alt="product"></a>
                </div>
                <div class="cart-product-content media-body">
                  <h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
                  <span class="price">1x <span>£150.00</span></span>
                </div>
                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
              </div>
            </li>
            <li>
              <div class="cart-product d-flex">
                <div class="cart-product-image">
                  <a href="product-simple-01.html"><img src="<?= $ROOT_URL ?>/asset/images/cart/product-3.jpg" alt="product"></a>
                </div>
                <div class="cart-product-content media-body">
                  <h6 class="title"><a href="product-simple-01.html">Biker Jacket</a></h6>
                  <span class="price">1x <span>£150.00</span></span>
                </div>
                <a href="#" class="product-cancel"><i class="fal fa-times"></i></a>
              </div>
            </li>
          </ul>
          <div class="cart-product-total">
            <p class="value">Subtotal</p>
            <p class="price">£600.00</p>
          </div>
          <div class="cart-product-btn">
            <a href="#" class="main-btn btn-block">View cart</a>
            <a href="#" class="main-btn btn-block">Checkout</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== Off Canvas Cart Ends ======-->

  <!--====== Slider Start ======-->

  <section id="sliderParallax" class="slider-area slider-01 slider-active">
    <div class="single-slider bg_cover d-flex align-items-center paroller" style="background-image: url(<?= $ROOT_URL ?>/asset/images/slider/slider-01-1.jpg);" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">

      <div class="container">
        <div id="slider" class="slider-content text-center layer" data-depth="0.3">
          <h1 class="title"><span data-animation="slideInLeft" data-delay="0.6s">Checked</span></h1>
          <br>
          <h1 class="title"><span data-animation="slideInLeft" data-delay="0.9s">Denim Jacket</span></h1>
          <div class="text" data-animation="line" data-delay="0s">
            <p><span data-animation="slideInUp" data-delay="1.3s">Free Shipping Over Order $150</span></p>
          </div>
          <div class="slider-btn">
            <a data-animation="zoomIn" data-delay="2s" href="#" class="main-btn main-btn-2">Shop Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="single-slider bg_cover d-flex align-items-center paroller" style="background-image: url(<?= $ROOT_URL ?>/asset/images/slider/slider-01-2.jpg);" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
      <div class="container">
        <div class="slider-content text-center layer" data-depth="0.3">
          <h1 class="title"><span data-animation="slideInLeft" data-delay="0.6s">New</span></h1>
          <br>
          <h1 class="title"><span data-animation="slideInLeft" data-delay="0.9s">Arrival 2020</span></h1>
          <div class="text" data-animation="line" data-delay="0s">
            <p><span data-animation="slideInUp" data-delay="1.3s">Free Shipping Over Order $150</span></p>
          </div>
          <div class="slider-btn">
            <a data-animation="zoomIn" data-delay="2s" href="#" class="main-btn">Shop Now</a>
          </div>
        </div>
      </div>
    </div>

    <div class="single-slider bg_cover d-flex align-items-center paroller" style="background-image: url(<?= $ROOT_URL ?>/asset/images/slider/slider-01-3.jpg);" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
      <div class="container">
        <div class="slider-content text-center layer" data-depth="0.3">
          <h1 class="title"><span data-animation="slideInLeft" data-delay="0.6s">Summer</span></h1>
          <br>
          <h1 class="title"><span data-animation="slideInLeft" data-delay="0.9s">Arrival 2020</span></h1>
          <div class="text" data-animation="line" data-delay="0s">
            <p><span data-animation="slideInUp" data-delay="1.3s">Free Shipping Over Order $150</span></p>
          </div>
          <div class="slider-btn">
            <a data-animation="zoomIn" data-delay="2s" href="#" class="main-btn">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="single-shape">
        <img data-animation="zoomIn" data-delay="1.5s" class="layer" data-depth="0.3" src="<?= $ROOT_URL ?>/asset/images/slider/slider-shape-1.png" alt="shape">
      </div>
    </div>
  </section>

  <!--====== Slider Ends ======-->

  <!--====== Category Start ======-->

  <section class="category-area">
    <div class="category-wrapper d-flex flex-wrap">
      <div class="category-item">
        <a href="shop-sidebar.html">
          <img src="<?= $ROOT_URL ?>/asset/images/m1-b1.jpg" alt="">
          <div class="category-content">
            <h4 class="title">Top Trend</h4>
          </div>
        </a>
      </div>
      <div class="category-item">
        <a href="shop-sidebar.html">
          <img src="<?= $ROOT_URL ?>/asset/images/m1-b2.jpg" alt="">
          <div class="category-content">
            <h4 class="title">Porcelain</h4>
          </div>
        </a>
      </div>
      <div class="category-item">
        <a href="shop-sidebar.html">
          <img src="<?= $ROOT_URL ?>/asset/images/m1-b3.jpg" alt="">
          <div class="category-content">
            <h4 class="title">Storm</h4>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!--====== Category Ends ======-->

  <!--====== Collections Start ======-->

  <section class="collections-area">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center pb-35">
            <h2 class="title">TOP COLLECTIONS</h2>
          </div>
        </div>
      </div>
      <div class="row collection-active">
        <div class="col-lg-4">
          <div class="single-collection text-center mt-30">
            <a href="shop-fullwidth.html">
              <div class="collection-image">
                <img src="<?= $ROOT_URL ?>/asset/images/collection/m1-c1.jpg" alt="collection">
              </div>
              <div class="collection-info">
                <h5 class="title">NAVY BLUE SUIT BLAZER</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-collection text-center mt-30">
            <a href="shop-fullwidth.html">
              <div class="collection-image">
                <img src="<?= $ROOT_URL ?>/asset/images/collection/m1-c2.jpg" alt="collection">
              </div>
              <div class="collection-info">
                <h5 class="title">NAVY BLUE SUIT BLAZER</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-collection text-center mt-30">
            <a href="shop-fullwidth.html">
              <div class="collection-image">
                <img src="<?= $ROOT_URL ?>/asset/images/collection/m1-c3.jpg" alt="collection">
              </div>
              <div class="collection-info">
                <h5 class="title">NAVY BLUE SUIT BLAZER</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="single-collection text-center mt-30">
            <a href="shop-fullwidth.html">
              <div class="collection-image">
                <img src="<?= $ROOT_URL ?>/asset/images/collection/m1-c1.jpg" alt="collection">
              </div>
              <div class="collection-info">
                <h5 class="title">NAVY BLUE SUIT BLAZER</h5>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== Collections Ends ======-->

  <!--====== Product Start ======-->

  <section class="product-area new-arrival">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center pb-30">
            <h2 class="title">NEW ARRIVAL</h2>
          </div>
        </div>
      </div>
      <div class="product-menu">
        <ul class="nav justify-content-center">
          <li>
            <a class="active" data-toggle="tab" href="#all">All</a>
          </li>
          <li>
            <a data-toggle="tab" href="#woman">Woman</a>
          </li>
          <li>
            <a data-toggle="tab" href="#man">Man</a>
          </li>
          <li>
            <a data-toggle="tab" href="#kids">Kids</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="container-fluid custom-container">
      <div class="tab-content">
        <div class="tab-pane fade show active" id="all">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-1.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-2.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Basic Contrasting T-Shirt</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-3.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-4.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                  <span class="discount">40%</span>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Biker Jacket</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="regular-price">£250.00</span>
                    <span class="sale-price">£200.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-5.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-6.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Oversized Check Dress</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-7.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-8.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Polyamide Dress With Long Sleeves</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-9.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-10.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Ribbed High Neck Sweater</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-11.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-12.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Shirt Dress With Pockets</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-13.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-14.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">The Skinny Jeans n Dusty Grey</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-15.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-16.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">The Skinny Sioux Shaper Jeans</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="woman">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-1.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-2.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Basic Contrasting T-Shirt</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-25.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-26.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Biker Jacket</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£250.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-31.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Oversized Check Dress</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-7.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Polyamide Dress With Long Sleeves</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-32.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Ribbed High Neck Sweater</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-28.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                  <span class="discount">40%</span>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Shirt Dress With Pockets</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="regular-price">£250.00</span>
                    <span class="sale-price">£200.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-19.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-20.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">The Skinny Jeans n Dusty Grey</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-5.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-6.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">The Skinny Sioux Shaper Jeans</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="man">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-3.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-4.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                  <span class="discount">40%</span>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Basic Contrasting T-Shirt</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="regular-price">£250.00</span>
                    <span class="sale-price">£200.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-9.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-10.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Biker Jacket</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£250.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-23.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Oversized Check Dress</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-24.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Polyamide Dress With Long Sleeves</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-17.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-18.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Ribbed High Neck Sweater</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-29.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-30.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Shirt Dress With Pockets</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-4.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-4.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">The Skinny Jeans n Dusty Grey</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-9.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-10.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">The Skinny Sioux Shaper Jeans</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="kids">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-7.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-8.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                  <span class="discount">40%</span>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Basic Contrasting T-Shirt</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="regular-price">£250.00</span>
                    <span class="sale-price">£200.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-9.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-10.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Biker Jacket</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£250.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-21.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-22.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Oversized Check Dress</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
              <div class="single-product mt-50">
                <div class="product-image">
                  <div class="image">
                    <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-23.jpg" alt="product">
                    <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-24.jpg" alt="product">
                    <a class="link" href="product-simple-01.html"></a>
                  </div>
                  <ul class="product-meta text-center">
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                    <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
                  </ul>
                </div>
                <div class="product-content d-flex justify-content-between">
                  <div class="product-title">
                    <h4 class="title"><a href="product-simple-01.html">Polyamide Dress With Long Sleeves</a></h4>
                  </div>
                  <div class="product-price">
                    <span class="price">£150.00</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-btn text-center mt-50">
        <a href="shop-sidebar.html" class="view-product-2">View All Product</a>
      </div>
    </div>
  </section>

  <!--====== Product Ends ======-->

  <!--====== Banner Start ======-->

  <section class="banner-area">
    <div class="row">
      <div class="col-lg-6 col-md-5">
        <div class="banner-image bg_cover" style="background-image: url(<?= $ROOT_URL ?>/asset/images/m1-bg1.jpg);"></div>
      </div>
      <div class="col-lg-6 col-md-7">
        <div class="banner-content">
          <h2 class="title">Quilted Jacket with Hidden Hood</h2>
          <p>From $119.55</p>
          <a href="shop-sidebar.html" class="main-btn">Shop Now</a>
        </div>
      </div>
    </div>
  </section>

  <!--====== Banner Ends ======-->

  <!--====== Top Sale Start ======-->

  <section class="product-area top-sale">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center pb-30">
            <h2 class="title">Top Sale</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid custom-container">
      <div class="row product-active">
        <div class="col-md-3">
          <div class="single-product mt-50">
            <div class="product-image">
              <div class="image">
                <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-7.jpg" alt="product">
                <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-8.jpg" alt="product">
                <a class="link" href="product-simple-01.html"></a>
              </div>
              <ul class="product-meta text-center">
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
              </ul>
              <span class="discount">40%</span>
            </div>
            <div class="product-content d-flex justify-content-between">
              <div class="product-title">
                <h4 class="title"><a href="product-simple-01.html">Basic Contrasting T-Shirt</a></h4>
              </div>
              <div class="product-price">
                <span class="regular-price">£250.00</span>
                <span class="sale-price">£200.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-product mt-50">
            <div class="product-image">
              <div class="image">
                <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-9.jpg" alt="product">
                <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-10.jpg" alt="product">
                <a class="link" href="product-simple-01.html"></a>
              </div>
              <ul class="product-meta text-center">
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
              </ul>
            </div>
            <div class="product-content d-flex justify-content-between">
              <div class="product-title">
                <h4 class="title"><a href="product-simple-01.html">Biker Jacket</a></h4>
              </div>
              <div class="product-price">
                <span class="price">£250.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-product mt-50">
            <div class="product-image">
              <div class="image">
                <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-21.jpg" alt="product">
                <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-22.jpg" alt="product">
                <a class="link" href="product-simple-01.html"></a>
              </div>
              <ul class="product-meta text-center">
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
              </ul>
            </div>
            <div class="product-content d-flex justify-content-between">
              <div class="product-title">
                <h4 class="title"><a href="product-simple-01.html">Oversized Check Dress</a></h4>
              </div>
              <div class="product-price">
                <span class="price">£150.00</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="single-product mt-50">
            <div class="product-image">
              <div class="image">
                <img class="product-1" src="<?= $ROOT_URL ?>/asset/images/product/product-23.jpg" alt="product">
                <img class="product-2" src="<?= $ROOT_URL ?>/asset/images/product/product-24.jpg" alt="product">
                <a class="link" href="product-simple-01.html"></a>
              </div>
              <ul class="product-meta text-center">
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Cart" href="#"><i class="fal fa-Shopping-cart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Quick Shop" data-toggle="modal" data-target="#productQuick" href="#"><i class="fal fa-search-plus"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" href="#"><i class="fal fa-heart"></i></a></li>
                <li><a data-tooltip="tooltip" data-placement="top" title="Add to Compare" href="#"><i class="fal fa-repeat-alt"></i></a></li>
              </ul>
            </div>
            <div class="product-content d-flex justify-content-between">
              <div class="product-title">
                <h4 class="title"><a href="product-simple-01.html">Polyamide Dress With Long Sleeves</a></h4>
              </div>
              <div class="product-price">
                <span class="price">£150.00</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="product-btn text-center mt-50">
        <a href="shop-sidebar.html" class="view-product-2">View All Product</a>
      </div>
    </div>
  </section>

  <!--====== Top Sale Ends ======-->

  <!--====== Features Start ======-->

  <section class="features-area pt-25 pb-55">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="single-feature text-center mt-30">
            <i class="fal fa-truck-container"></i>
            <h5 class="title">Free Delivery</h5>
            <p>In convallis nulla et magna congue</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-feature text-center mt-30">
            <i class="fal fa-life-ring"></i>
            <h5 class="title">Expert Support</h5>
            <p>In convallis nulla et magna congue</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-feature text-center mt-30">
            <i class="fal fa-gift"></i>
            <h5 class="title">10% Discount</h5>
            <p>In convallis nulla et magna congue</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="single-feature text-center mt-30">
            <i class="fal fa-user-friends"></i>
            <h5 class="title">Buyer Protection</h5>
            <p>In convallis nulla et magna congue</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== Features Ends ======-->

  <!--====== Blog Start ======-->

  <section class="blog-area pt-75 pb-60">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-title text-center pb-30">
            <h2 class="title">NEWS</h2>
          </div>
        </div>
      </div>
      <div class="row  blog-active">
        <div class="col-lg-4 col-md-6">
          <div class="single-blog mt-30">
            <div class="blog-image">
              <a href="blog-details.html">
                <img src="<?= $ROOT_URL ?>/asset/images/blog-1.jpg" alt="blog">
                <i class="fal fa-search-plus"></i>
              </a>
            </div>
            <div class="blog-content">
              <ul class="blog-category">
                <li><a href="#">Style</a></li>
              </ul>
              <h4 class="title"><a href="blog-details.html">Nicholas K Spring 2020 Runway</a></h4>
              <ul class="blog-meta">
                <li><a href="#">By <span> Jon Smith</span></a></li>
                <li><a href="#"><i class="fal fa-clock"></i> June 15, 2020</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog mt-30">
            <div class="blog-image">
              <a href="blog-details.html">
                <img src="<?= $ROOT_URL ?>/asset/images/blog-2.jpg" alt="blog">
                <i class="fal fa-search-plus"></i>
              </a>
            </div>
            <div class="blog-content">
              <ul class="blog-category">
                <li><a href="#">Photography</a></li>
              </ul>
              <h4 class="title"><a href="blog-details.html">Marc Jacobs Spring 2020 Runway</a></h4>
              <ul class="blog-meta">
                <li><a href="#">By <span> Jon Smith</span></a></li>
                <li><a href="#"><i class="fal fa-clock"></i> June 15, 2020</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="single-blog mt-30">
            <div class="blog-image">
              <a href="blog-details.html">
                <img src="<?= $ROOT_URL ?>/asset/images/blog-3.jpg" alt="blog">
                <i class="fal fa-search-plus"></i>
              </a>
            </div>
            <div class="blog-content">
              <ul class="blog-category">
                <li><a href="#">Fashion</a></li>
              </ul>
              <h4 class="title"><a href="blog-details.html">Italian Fashion Style</a></h4>
              <ul class="blog-meta">
                <li><a href="#">By <span> Jon Smith</span></a></li>
                <li><a href="#"><i class="fal fa-clock"></i> June 15, 2020</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--====== Blog Ends ======-->

  <!--====== Brand Logo Start ======-->

  <div class="brand-logo-area pt-45 pb-45">
    <div class="container">
      <div class="brand-row brand-active">
        <div class="brand-col">
          <div class="single-brand-2">
            <img src="<?= $ROOT_URL ?>/asset/images/brand-1.png" alt="brand">
          </div>
        </div>
        <div class="brand-col">
          <div class="single-brand-2">
            <img src="<?= $ROOT_URL ?>/asset/images/brand-2.png" alt="brand">
          </div>
        </div>
        <div class="brand-col">
          <div class="single-brand-2">
            <img src="<?= $ROOT_URL ?>/asset/images/brand-3.png" alt="brand">
          </div>
        </div>
        <div class="brand-col">
          <div class="single-brand-2">
            <img src="<?= $ROOT_URL ?>/asset/images/brand-4.png" alt="brand">
          </div>
        </div>
        <div class="brand-col">
          <div class="single-brand-2">
            <img src="<?= $ROOT_URL ?>/asset/images/brand-5.png" alt="brand">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== Brand Logo Ends ======-->

  <!--====== Footer Start ======-->

  <footer class="footer-area bg_cover pt-20 pb-50" style="background-image: url(<?= $ROOT_URL ?>/asset/images/footer-bg.jpg);">
    <div class="footer-widget">
      <div class="container-fluid custom-container">
        <div class="row align-items-center">
          <div class="col-md-3">
            <div class="footer-logo-copyright text-md-left text-center mt-30">
              <a href="index.html">
                <img src="<?= $ROOT_URL ?>/asset/images/logo-white.png" alt="Logo">
              </a>
              <p>&copy; Copyright 2020 <a href="https://hasthemes.com/">HasThemes</a></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footer-menu text-center mt-30">
              <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="shop-sidebar.html">Shop</a></li>
                <li><a href="lookbook.html">Look Book</a></li>
                <li><a href="blog-sidebar.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="footer-social mt-30 text-center text-md-right">
              <ul class="social">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--====== Footer Ends ======-->

  <!--====== BACK TOP TOP PART START ======-->

  <a href="#" class="back-to-top"><i class="fal fa-chevron-up"></i></a>

  <!--====== BACK TOP TOP PART ENDS ======-->

  <!--====== Product Quick View Start ======-->

  <div class="modal fade" id="productQuick">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fal fa-times"></i></button>
        </div>

        <div class="product-quick-view">
          <div class="row">
            <div class="col-md-6">
              <div class="quick-view-image">
                <div class="quick-view-thumb">
                  <div class="quick-thumb-active">
                    <div class="single-quick-thumb">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-37.jpg" alt="">
                    </div>
                    <div class="single-quick-thumb">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-38.jpg" alt="">
                    </div>
                    <div class="single-quick-thumb">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-27.jpg" alt="">
                    </div>
                    <div class="single-quick-thumb">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-28.jpg" alt="">
                    </div>
                  </div>
                </div>
                <div class="quick-view-preview">
                  <div class="quick-preview-active">
                    <div class="single-quick-preview">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-37.jpg" alt="">
                    </div>
                    <div class="single-quick-preview">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-38.jpg" alt="">
                    </div>
                    <div class="single-quick-preview">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-27.jpg" alt="">
                    </div>
                    <div class="single-quick-preview">
                      <img src="<?= $ROOT_URL ?>/asset/images/product/product-28.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="quick-view-content">
                <h4 class="title">Oversized Check Dress</h4>
                <span class="sku-id">REF. 1104693 - TOMY</span>

                <div class="quick-price">
                  <span class="regular-price">£250.00</span>
                  <span class="sale-price">£200.00</span>
                </div>
                <div class="quick-quantity-cart-wishlist-compare flex-wrap">
                  <form action="#">
                    <div class="quick-quantity d-flex">
                      <button type="button" class="sub"><i class="fal fa-minus"></i></button>
                      <input type="text" value="1" />
                      <button type="button" class="add"><i class="fal fa-plus"></i></button>
                    </div>
                    <div class="quick-cart">
                      <button class="main-btn">Add to Cart</button>
                    </div>
                  </form>
                  <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist" class="quick-wishlist"><i class="fal fa-heart"></i></a>
                  <a href="#" data-tooltip="tooltip" data-placement="top" title="Add to Compare" class="quick-compare"><i class="fal fa-repeat-alt"></i></a>
                </div>
                <div class="quick-description">
                  <p>Sed vitae eros a quam malesuada porttitor nec nec orci. Ut lacus augue, bibendum at tristique at, ornare eget quam. Donec volutpat ut nibh id sagittis. Morbi fringilla ac libero in consequat.</p>
                </div>
                <div class="quick-share">
                  <ul class="social">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--====== Product Quick View Ends ======-->

  <!--====== Overlay Start ======-->

  <div class="overlay"></div>

  <!--====== Overlay Ends ======-->




  <!--====== Jquery js ======-->
  <script src="<?= $ROOT_URL ?>/asset/js/vendor/jquery-3.5.1.min.js"></script>
  <script src="<?= $ROOT_URL ?>/asset/js/vendor/modernizr-3.7.1.min.js"></script>

  <!--====== All Plugins js ======-->

  <script src="<?= $ROOT_URL ?>/asset/js/plugins/parallax.min.js"></script>

  <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->

  <script src="<?= $ROOT_URL ?>/asset/js/plugins.min.js"></script>


  <!--====== Main Activation  js ======-->
  <script src="<?= $ROOT_URL ?>/asset/js/main.js"></script>

</body>


</html>