	<!-- Header -->
	<div class="header fixed-header">
		<div class=" header-left">
			<a href="index-2.html" class="logo logo-small">
				<img src="<?= $ADMIN_URL ?>/assets/img/logo-icon.png" alt="Logo" width="30" height="30">
			</a>
		</div>
		<a href="javascript:void(0);" id="toggle_btn">
			<i class="fas fa-align-left"></i>
		</a>
		<a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
			<i class="fas fa-align-left"></i>
		</a>

		<ul class="nav user-menu">
			<!-- Notifications -->
			<li class="nav-item dropdown noti-dropdown">
				<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
					<i class="far fa-bell"></i> <span class="badge badge-pill"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right notifications">
					<div class="topnav-dropdown-header">
						<span class="notification-title">Notifications</span>
						<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
					</div>
					<div class="noti-content">
						<ul class="notification-list">
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-01.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Thomas Herzberg have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">15 Sep 2020 10:20 PM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-02.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Matthew Garcia have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">13 Sep 2020 03:56 AM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-03.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Yolanda Potter have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">12 Sep 2020 09:25 PM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-04.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Ricardo Flemings have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">11 Sep 2020 06:36 PM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-05.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Maritza Wasson have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">10 Sep 2020 08:42 AM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-06.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Marya Ruiz have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">9 Sep 2020 11:01 AM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
							<li class="notification-message">
								<a href="admin-notification.html">
									<div class="media">
										<span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="<?= $ADMIN_URL ?>/assets/img/provider/provider-07.jpg">
										</span>
										<div class="media-body">
											<p class="noti-details">
												<span class="noti-title">Richard Hughes have been subscribed</span>
											</p>
											<p class="noti-time">
												<span class="notification-time">8 Sep 2020 06:23 AM</span>
											</p>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="topnav-dropdown-footer">
						<a href="admin-notification.html">View all Notifications</a>
					</div>
				</div>
			</li>
			<!-- /Notifications -->

			<!-- User Menu -->
			<li class="nav-item dropdown">
				<a href="javascript:void(0)" class="dropdown-toggle user-link  nav-link" data-toggle="dropdown">
					<span class="user-img">
						<img class="rounded-circle" src="<?= $ADMIN_URL ?>/assets/img/user.jpg" width="40" alt="Admin">
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="admin-profile.html">Profile</a>
					<a class="dropdown-item" href="../auth/logout.php">Logout</a>
				</div>
			</li>
			<!-- /User Menu -->

		</ul>
	</div>
	<!-- Sidebar -->
	<div class="sidebar" id="sidebar">
		<div class="sidebar-logo">
			<a href="../home/index.php">
				<img src="<?= $ADMIN_URL ?>/assets/img/logo-icon.png" class="img-fluid" alt="">
			</a>
		</div>
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<!-- <li class="active"> -->
					<li>
						<a href="../home/index.php"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
					</li>

					<li class="">
						<a href="../list"><i class="fas fa-list-ol"></i> <span> Danh sách sản phẩm </span></a>
					</li>
					<li class="">
						<a href="../add/index.php"><i class="fas fa-plus"></i> <span> Thêm sản phẩm </span></a>
					</li>
					<li class="">
						<a href="#"><i class="fas fa-shopping-bag"></i> <span> Quản lý đơn hàng </span></a>
					</li>

					<li class="menu-title">
						<span>Pages</span>
					</li>
					<li>
						<a href="admin-profile.html"><i class="fas fa-user-plus"></i> <span>Profile</span></a>
					</li>
				</ul>
			</div>
		</div>
	</div>