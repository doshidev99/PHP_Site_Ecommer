	<!-- Header -->
	<div class="header fixed-header"">
		<div class="header-left">
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
			<a href="index-2.html">
				<img src="<?= $ADMIN_URL ?>/assets/img/logo-icon.png" class="img-fluid" alt="">
			</a>
		</div>
		<div class="sidebar-inner slimscroll">
			<div id="sidebar-menu" class="sidebar-menu">
				<ul>
					<li class="active">
						<a href="index-2.html"><i class="fas fa-columns"></i> <span>Dashboard</span></a>
					</li>
					<li>
						<a href="categories.html"><i class="fas fa-layer-group"></i> <span>Categories</span></a>
					</li>
					<li>
						<a href="subcategories.html"><i class="fab fa-buffer"></i> <span>Sub Categories</span></a>
					</li>
					<li>
						<a href="service-list.html"><i class="fas fa-bullhorn"></i> <span> Services</span></a>
					</li>
					<li>
						<a href="total-report.html"><i class="far fa-calendar-check"></i> <span> Booking List</span></a>
					</li>
					<li>
						<a href="payment_list.html"><i class="fas fa-hashtag"></i> <span>Payments</span></a>
					</li>
					<li>
						<a href="ratingstype.html"><i class="fas fa-star-half-alt"></i> <span>Rating Type</span></a>
					</li>
					<li>
						<a href="review-reports.html"><i class="fas fa-star"></i> <span>Ratings</span></a>
					</li>
					<li>
						<a href="subscriptions.html"><i class="far fa-calendar-alt"></i> <span>Subscriptions</span></a>
					</li>
					<li>
						<a href="wallet.html"><i class="fas fa-wallet"></i> <span> Wallet</span></a>
					</li>
					<li>
						<a href="service-providers.html"><i class="fas fa-user-tie"></i> <span> Service Providers</span></a>
					</li>
					<li>
						<a href="settings.html"><i class="fas fa-cog"></i> <span> Settings</span></a>
					</li>
					<li class="submenu">
						<a href="#"><i class="fas fa-border-all"></i> <span> Application</span> <span class="menu-arrow"></span></a>
						<ul style="display: none;">
							<li><a href="chat.html">Chat</a></li>
							<li><a href="calendar.html">Calendar</a></li>
							<li><a href="inbox.html">Email</a></li>
						</ul>
					</li>
					<li class="menu-title">
						<span>Pages</span>
					</li>
					<li>
						<a href="admin-profile.html"><i class="fas fa-user-plus"></i> <span>Profile</span></a>
					</li>
					<li class="submenu">
						<a href="#"><i class="fas fa-user-lock"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
						<ul style="display: none;">
							<li><a href="login.html"> Login </a></li>
							<li><a href="register.html"> Register </a></li>
							<li><a href="forgot-password.html"> Forgot Password </a></li>
							<li><a href="lock-screen.html"> Lock Screen </a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#"><i class="fas fa-exclamation-circle"></i> <span> Error Pages </span> <span class="menu-arrow"></span></a>
						<ul style="display: none;">
							<li><a href="error-404.html">404 Error </a></li>
							<li><a href="error-500.html">500 Error </a></li>
						</ul>
					</li>
					<li>
						<a href="users.html"><i class="fas fa-users"></i> <span>Users</span></a>
					</li>
					<li>
						<a href="blank-page.html"><i class="far fa-file"></i> <span>Blank Page</span></a>
					</li>
					<li>
						<a href="maps-vector.html"><i class="far fa-map"></i> <span>Vector Maps</span></a>
					</li>
					<li class="menu-title">
						<span>UI Interface</span>
					</li>
					<li>
						<a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
					</li>
					<li class="submenu">
						<a href="#"><i class="fab fa-wpforms"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
						<ul style="display: none;">
							<li><a href="form-basic-inputs.html">Basic Inputs </a></li>
							<li><a href="form-input-groups.html">Input Groups </a></li>
							<li><a href="form-horizontal.html">Horizontal Form </a></li>
							<li><a href="form-vertical.html"> Vertical Form </a></li>
							<li><a href="form-mask.html"> Form Mask </a></li>
							<li><a href="form-validation.html"> Form Validation </a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
						<ul style="display: none;">
							<li><a href="tables-basic.html">Basic Tables </a></li>
							<li><a href="data-tables.html">Data Table </a></li>
						</ul>
					</li>
					<li class="submenu">
						<a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
						<ul style="display: none;">
							<li class="submenu">
								<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
									<li class="submenu">
										<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
										<ul style="display: none;">
											<li><a href="javascript:void(0);">Level 3</a></li>
											<li><a href="javascript:void(0);">Level 3</a></li>
										</ul>
									</li>
									<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);"> <span>Level 1</span></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>