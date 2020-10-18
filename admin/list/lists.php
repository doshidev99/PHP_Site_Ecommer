<?php

$category = $_GET['category'];
$ma_hh = $_GET['id'];

if ($ma_hh) {
  $isDone = $db->delete($ma_hh, 'ma_hh', 'hang_hoa');
  if ($isDone) {
    echo "<script>window.location.href = '../list/index.php' </script>";
  }
}

if ($category) {
  $_data = $db->getDataWithCondition('hang_hoa', 'ma_loai', $category);
  $db->num_rows();
  if ($db->num_rows()) {
    $count_items = $db->num_rows();
  }
} else {
  $_data = $db->getAllData('hang_hoa');
  $db->num_rows();
  if ($db->num_rows()) {
    $count_items = $db->num_rows();
  }
}

?>
<div class="page-wrapper">
  <div class="content">
    <!-- Page Header -->
    <div class="page-header">
      <div class="row">
        <div class="col">
          <h3 class="page-title">Danh sách sản phẩm</h3>
        </div>
        <div class="col-auto text-right">
          <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
            <i class="fas fa-filter"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- /Page Header -->

    <!-- Search Filter -->
    <div class="card filter-card d-block" id="filter_inputs">
      <div class="card-body pb-0">
        <form method="GET" enctype="multipart/form-data">
          <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <select name="category" style="border: none; border-radius: 3px" id="1">
                  <option value="1">Áo</option>
                  <option value="2">Quần</option>
                  <option value="3">Phụ kiện</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Tìm
                  kiếm
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- /Search Filter -->

    <ul class="nav nav-tabs menu-tabs">
      <li class="nav-item active">
        <a class="nav-link" href="total-report.html">Tất cả sản phẩm <span class="badge badge-primary">
            <?php
            echo $count_items;
            ?>
          </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pending-report.html">Pending <span class="badge badge-primary">125</span></a>
      </li>
    </ul>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-center mb-0 datatable">
                <thead>
                  <tr>
                    <th>STT</th>
                    <th>Tên Mặt hàng</th>
                    <th>Hình Ảnh</th>
                    <th>Đơn giá</th>
                    <th>Mô tả</th>
                    <th>Giảm Giá</th>
                    <th>Tình Trạng</th>
                    <th>
                      Tùy chọn
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $stt = 1;
                  foreach (array_reverse($_data) as $value) {
                  ?>
                    <tr>
                      <td> <?php echo $stt; ?></td>
                      <td> <?php echo $value['ten_hh']; ?></td>
                      <td>
                        <span class="table-avatar">
                          <a href="#" class="avatar avatar-sm mr-2">
                            <img class="avatar-img rounded-circle" alt="" src="<?= $PR_IMAGE ?>/<?php echo $value['hinh'] ?>">
                          </a>
                        </span>
                      </td>
                      <td>
                        <?php echo $value['don_gia']; ?>
                      </td>
                      <td><?php echo $value['mo_ta']; ?></td>
                      <td><?php echo (float)$value['giam_gia'] * 100 . "%" ?></td>
                      <td>
                        <label class="badge badge-dark">
                          <?php
                          switch ($value['tinh_trang']) {
                            case '0':
                              echo "<span class='text-danger'> Hết hàng <span>";
                              break;
                            case '1':
                              echo "<span class='text-success'> còn hàng </span>";
                              break;
                            default:
                              break;
                          }
                          ?></label>
                      </td>

                      <td>
                        <div class="btn btn-danger">
                          <a class="text-white" href="?id=<?php echo $value['ma_hh'] ?>"> Delete </a>
                        </div>
                        <div class="btn mt-3 btn-success">
                          <a class="text-white" href="../edit/index.php?id=<?php echo $value['ma_hh'] ?>">
                            Edit
                          </a>
                        </div>
                      </td>
                    </tr>
                  <?php
                    $stt++;
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>