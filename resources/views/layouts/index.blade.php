<!DOCTYPE html>
<html lang="en">

<!-- HEAD -->

<head>
	<meta charset="utf-8" />
	<title>{{ $title . " | " . env('APP_NAME') }}</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="Recruitment Department System" name="description" />
	<meta content="David Mendoza" name="author" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{ asset("css/vendor.min.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/default/app.min.css") }}" rel="stylesheet" />

	<script src="https://kit.fontawesome.com/ea9aac3390.js" crossorigin="anonymous"></script>

	<link href="{{ asset("plugins/jvectormap-next/jquery-jvectormap.css") }}" rel="stylesheet" />
	<link href="{{ asset("plugins/nvd3/build/nv.d3.css") }}" rel="stylesheet" />
	<link href="{{ asset("plugins/bootstrap-daterangepicker/daterangepicker.css") }}" rel="stylesheet" />
</head>

<!-- BODY -->
<body>

	<!-- SPINNER -->
	<div id="loader" class="app-loader">
		<span class="spinner"></span>
	</div>

	<!-- APP HEADER -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">

		<!-- HEADER -->
		<div id="header" class="app-header">
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
				<button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- NAVBAR -->
			<div class="navbar-nav">
				<!-- SEARCH -->
				<div class="navbar-item navbar-form">
					<form action="#" method="POST" name="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</div>

				<!-- NOTIFICATION DROPDOWN -->
				<div class="navbar-item dropdown">
					<a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle icon">
						<i class="fa fa-bell"></i>
						<span class="badge">5</span>
					</a>

					<!-- NOTIF HEADER -->
					<div class="dropdown-menu media-list dropdown-menu-end">
						<div class="dropdown-header">NOTIFICATIONS (5)</div>

						<!-- 1st notif -->
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-bug media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
								<div class="text-muted fs-10px">3 minutes ago</div>
							</div>
						</a>

						<!-- 2nd notif -->
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="{{ asset("img/user/user-1.jpg") }}" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">John Smith</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">25 minutes ago</div>
							</div>
						</a>

						<!-- 2nd notif -->
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<img src="{{ asset("img/user/user-2.jpg") }}" class="media-object" alt="" />
								<i class="fab fa-facebook-messenger text-blue media-object-icon"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading">Olivia</h6>
								<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
								<div class="text-muted fs-10px">35 minutes ago</div>
							</div>
						</a>

						<!-- 3rd notif -->
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-plus media-object bg-gray-500"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New User Registered</h6>
								<div class="text-muted fs-10px">1 hour ago</div>
							</div>
						</a>

						<!-- 4th notif -->
						<a href="javascript:;" class="dropdown-item media">
							<div class="media-left">
								<i class="fa fa-envelope media-object bg-gray-500"></i>
								<i class="fab fa-google text-warning media-object-icon fs-14px"></i>
							</div>
							<div class="media-body">
								<h6 class="media-heading"> New Email From John</h6>
								<div class="text-muted fs-10px">2 hour ago</div>
							</div>
						</a>

						<!-- VIEW MORE -->
						<div class="dropdown-footer text-center">
							<a href="javascript:;" class="text-decoration-none">View more</a>
						</div>
					</div>
				</div>
				<!-- END OF NOTIF DROPDOWN -->

				<!-- USER NAV -->
				<div class="navbar-item navbar-user dropdown">

					<a href="#" class="navbar-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown">
						<img src="{{ asset("img/user/user-13.jpg") }}" alt="" />
						<span>
							<span class="d-none d-md-inline">Adam Schwartz</span>
							<b class="caret"></b>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-end me-1">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge bg-danger float-end rounded-pill">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</div>
			</div>
			<!-- END OF NAVBAR -->
		</div>
		<!-- END OF HEADER -->

		<!-- SIDEBAR -->
		<div id="sidebar" class="app-sidebar">
			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
				<div class="menu">
					<!-- MENU PROFILE -->
					<div class="menu-profile">
						<a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile" data-target="#appSidebarProfileMenu">
							<div class="menu-profile-cover with-shadow"></div>

							<div class="menu-profile-image">
								<img src="{{ asset("img/user/user-13.jpg") }}" alt="" />
							</div>

							<div class="menu-profile-info">
								<div class="d-flex align-items-center">
									<div class="flex-grow-1">
										Sean Ngu
									</div>

									<div class="menu-caret ms-auto"></div>
								</div>
								<small>Front end developer</small>
							</div>
						</a>
					</div>

					<!-- PROFILE MEN -->
					<div id="appSidebarProfileMenu" class="collapse">
						<div class="menu-item pt-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-cog"></i></div>
								<div class="menu-text">Settings</div>
							</a>
						</div>

						<div class="menu-item">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
								<div class="menu-text"> Send Feedback</div>
							</a>
						</div>

						<div class="menu-item pb-5px">
							<a href="javascript:;" class="menu-link">
								<div class="menu-icon"><i class="fa fa-question-circle"></i></div>
								<div class="menu-text"> Helps</div>
							</a>
						</div>
						<div class="menu-divider m-0"></div>
					</div>

					<!-- SIDEBAR MENU HEADER -->
					<div class="menu-header">Navigation</div>

					<!-- 1st MENU -->
					<div class="menu-item has-sub active">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-th-large"></i>
							</div>
							<div class="menu-text">Dashboard</div>
							<div class="menu-caret"></div>
						</a>
						<!-- 1st MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="index.html" class="menu-link"><div class="menu-text">Dashboard v1</div></a>
							</div>
							<div class="menu-item">
								<a href="index_v2.html" class="menu-link"><div class="menu-text">Dashboard v2</div></a>
							</div>
							<div class="menu-item active">
								<a href="index_v3.html" class="menu-link"><div class="menu-text">Dashboard v3</div></a>
							</div>
						</div>
					</div>

					<!-- 2ND MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-hdd"></i>
							</div>
							<div class="menu-text">Email</div>
							<div class="menu-badge">10</div>
						</a>
						<!-- 2ND MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="email_inbox.html" class="menu-link">
									<div class="menu-text">Inbox</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_compose.html" class="menu-link">
									<div class="menu-text">Compose</div>
								</a>
							</div>
							<div class="menu-item">
								<a href="email_detail.html" class="menu-link">
									<div class="menu-text">Detail</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 3rd menu -->
					<div class="menu-item">
						<a href="widget.html" class="menu-link">
							<div class="menu-icon">
								<i class="fab fa-simplybuilt"></i>
							</div>
							<div class="menu-text">Widgets <span class="menu-label">NEW</span></div>
						</a>
					</div>

					<!-- 4th MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-gem"></i>
							</div>
							<div class="menu-text">UI Elements <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>
						<!-- 5th MENU SUBMENU -->
						<div class="menu-submenu">

							<div class="menu-item">
								<a href="ui_general.html" class="menu-link">
									<div class="menu-text">General <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_typography.html" class="menu-link">
									<div class="menu-text">Typography</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_tabs_accordions.html" class="menu-link">
									<div class="menu-text">Tabs & Accordions</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_unlimited_tabs.html" class="menu-link">
									<div class="menu-text">Unlimited Nav Tabs</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_modal_notification.html" class="menu-link">
									<div class="menu-text">Modal & Notification <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_widget_boxes.html" class="menu-link">
									<div class="menu-text">Widget Boxes</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_media_object.html" class="menu-link">
									<div class="menu-text">Media Object</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_buttons.html" class="menu-link">
									<div class="menu-text">Buttons <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_icons.html" class="menu-link">
									<div class="menu-text">Icons</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_simple_line_icons.html" class="menu-link">
									<div class="menu-text">Simple Line Icons</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_ionicons.html" class="menu-link">
									<div class="menu-text">Ionicons</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_tree.html" class="menu-link">
									<div class="menu-text">Tree View</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_language_bar_icon.html" class="menu-link">
									<div class="menu-text">Language Bar & Icon</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_social_buttons.html" class="menu-link">
									<div class="menu-text">Social Buttons</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_tour.html" class="menu-link">
									<div class="menu-text">Intro JS</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="ui_offcanvas_toasts.html" class="menu-link">
									<div class="menu-text">Offcanvas & Toasts <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- 5TH MENU -->
					<div class="menu-item ">
						<a href="bootstrap_5.html" class="menu-link">
							<div class="menu-icon-img">
								<img src="{{ asset("img/logo/logo-bs5.png") }}" alt="" />
							</div>
							<div class="menu-text">Bootstrap 5 <span class="menu-label">NEW</span></div>
						</a>
					</div>

					<!-- 6TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-list-ol"></i>
							</div>
							<div class="menu-text">Form Stuff <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>

						<!-- 6th MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="form_elements.html" class="menu-link">
									<div class="menu-text">Form Elements <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_plugins.html" class="menu-link">
									<div class="menu-text">Form Plugins <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_slider_switcher.html" class="menu-link">
									<div class="menu-text">Form Slider + Switcher</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_validation.html" class="menu-link">
									<div class="menu-text">Form Validation</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_wizards.html" class="menu-link">
									<div class="menu-text">Wizards <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_wysiwyg.html" class="menu-link">
									<div class="menu-text">WYSIWYG</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_editable.html" class="menu-link">
									<div class="menu-text">X-Editable</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_multiple_upload.html" class="menu-link">
									<div class="menu-text">Multiple File Upload</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_summernote.html" class="menu-link">
									<div class="menu-text">Summernote</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="form_dropzone.html" class="menu-link">
									<div class="menu-text">Dropzone</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 7TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-table"></i>
							</div>
							<div class="menu-text">Tables</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 7TH MENU SUBMENU -->
						<div class="menu-submenu">

							<div class="menu-item">
								<a href="table_basic.html" class="menu-link">
									<div class="menu-text">Basic Tables</div>
								</a>
							</div>

							<!-- 7TH SUBMENU SUBMENU -->
							<div class="menu-item has-sub">
								<a href="javascript:;" class="menu-link">
									<div class="menu-text">Managed Tables</div>
									<div class="menu-caret"></div>
								</a>

								<div class="menu-submenu">
									<div class="menu-item">
										<a href="table_manage.html" class="menu-link">
											<div class="menu-text">Default</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_buttons.html" class="menu-link">
											<div class="menu-text">Buttons</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_colreorder.html" class="menu-link">
											<div class="menu-text">ColReorder</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_fixed_columns.html" class="menu-link">
											<div class="menu-text">Fixed Column</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_fixed_header.html" class="menu-link">
											<div class="menu-text">Fixed Header</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_keytable.html" class="menu-link">
											<div class="menu-text">KeyTable</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_responsive.html" class="menu-link">
											<div class="menu-text">Responsive</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_rowreorder.html" class="menu-link">
											<div class="menu-text">RowReorder</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_scroller.html" class="menu-link">
											<div class="menu-text">Scroller</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_select.html" class="menu-link">
											<div class="menu-text">Select</div>
										</a>
									</div>

									<div class="menu-item">
										<a href="table_manage_combine.html" class="menu-link">
											<div class="menu-text">Extension Combination</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- 8TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-cash-register"></i>
							</div>
							<div class="menu-text">POS System <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>

						<!-- 8TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="pos_customer_order.html" target="_blank" class="menu-link">
									<div class="menu-text">Customer Order</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="pos_kitchen_order.html" target="_blank" class="menu-link">
									<div class="menu-text">Kitchen Order</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="pos_counter_checkout.html" target="_blank" class="menu-link">
									<div class="menu-text">Counter Checkout</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="pos_table_booking.html" target="_blank" class="menu-link">
									<div class="menu-text">Table Booking</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="pos_menu_stock.html" target="_blank" class="menu-link">
									<div class="menu-text">Menu Stock</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 9th MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-star"></i>
							</div>
							<div class="menu-text">Front End <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>

						<!-- 9TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/frontend/one-page-parallax/index.html" target="_blank" class="menu-link">
									<div class="menu-text">One Page Parallax</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/frontend/blog/index.html" target="_blank" class="menu-link">
									<div class="menu-text">Blog</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/frontend/forum/index.html" target="_blank" class="menu-link">
									<div class="menu-text">Forum</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/frontend/e-commerce/index.html" target="_blank" class="menu-link">
									<div class="menu-text">E-Commerce</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/frontend/corporate/index.html" target="_blank" class="menu-link">
									<div class="menu-text">Corporate <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- 10TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-envelope"></i>
							</div>
							<div class="menu-text">Email Template</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 10TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="email_system.html" class="menu-link">
									<div class="menu-text">System Template</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="email_newsletter.html" class="menu-link">
									<div class="menu-text">Newsletter Template</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 11TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-chart-pie"></i>
							</div>
							<div class="menu-text">Chart</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 11TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="chart-flot.html" class="menu-link">
									<div class="menu-text">Flot Chart</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="chart-js.html" class="menu-link">
									<div class="menu-text">Chart JS</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="chart-d3.html" class="menu-link">
									<div class="menu-text">d3 Chart</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="chart-apex.html" class="menu-link">
									<div class="menu-text">Apex Chart</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 12TH MENU -->
					<div class="menu-item">
						<a href="calendar.html" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-calendar"></i>
							</div>
							<div class="menu-text">Calendar</div>
						</a>
					</div>

					<!-- 13TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-map"></i>
							</div>
							<div class="menu-text">Map</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 13TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="map_vector.html" class="menu-link">
									<div class="menu-text">Vector Map</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="map_google.html" class="menu-link">
									<div class="menu-text">Google Map</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 14TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-image"></i>
							</div>
							<div class="menu-text">Gallery</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 14TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="gallery.html" class="menu-link">
									<div class="menu-text">Gallery v1</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="gallery_v2.html" class="menu-link">
									<div class="menu-text">Gallery v2</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 15TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-cogs"></i>
							</div>
							<div class="menu-text">Page Options <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>

						<!-- 15TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="page_blank.html" class="menu-link">
									<div class="menu-text">Blank Page</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_footer.html" class="menu-link">
									<div class="menu-text">Page with Footer</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_fixed_footer.html" class="menu-link">
									<div class="menu-text">Page with Fixed Footer <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_without_sidebar.html" class="menu-link">
									<div class="menu-text">Page without Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_right_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Right Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_minified_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Minified Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_two_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Two Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_line_icons.html" class="menu-link">
									<div class="menu-text">Page with Line Icons</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_ionicons.html" class="menu-link">
									<div class="menu-text">Page with Ionicons</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_full_height.html" class="menu-link">
									<div class="menu-text">Full Height Content</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_wide_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Wide Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_light_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Light Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_mega_menu.html" class="menu-link">
									<div class="menu-text">Page with Mega Menu</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_top_menu.html" class="menu-link">
									<div class="menu-text">Page with Top Menu</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_boxed_layout.html" class="menu-link">
									<div class="menu-text">Page with Boxed Layout</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_mixed_menu.html" class="menu-link">
									<div class="menu-text">Page with Mixed Menu</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_boxed_layout_with_mixed_menu.html" class="menu-link">
									<div class="menu-text">Boxed Layout with Mixed Menu</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_transparent_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Transparent Sidebar</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="page_with_search_sidebar.html" class="menu-link">
									<div class="menu-text">Page with Search Sidebar <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- 16TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-gift"></i>
							</div>
							<div class="menu-text">Extra <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>

						<!-- 16TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="extra_timeline.html" class="menu-link">
									<div class="menu-text">Timeline</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_coming_soon.html" class="menu-link">
									<div class="menu-text">Coming Soon Page</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_search_results.html" class="menu-link">
									<div class="menu-text">Search Results</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_invoice.html" class="menu-link">
									<div class="menu-text">Invoice</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_404_error.html" class="menu-link">
									<div class="menu-text">404 Error Page</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_profile.html" class="menu-link">
									<div class="menu-text">Profile Page</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_scrum_board.html" class="menu-link">
									<div class="menu-text">Scrum Board <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="extra_cookie_acceptance_banner.html" class="menu-link">
									<div class="menu-text">Cookie Acceptance Banner <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- 17TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-key"></i>
							</div>
							<div class="menu-text">Login & Register</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 17TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="login.html" class="menu-link">
									<div class="menu-text">Login</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="login_v2.html" class="menu-link">
									<div class="menu-text">Login v2</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="login_v3.html" class="menu-link">
									<div class="menu-text">Login v3</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="register_v3.html" class="menu-link">
									<div class="menu-text">Register v3</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 18TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-cubes"></i>
							</div>
							<div class="menu-text">Version <span class="menu-label">NEW</span></div>
							<div class="menu-caret"></div>
						</a>

						<!-- 18TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="index_v3.html" class="menu-link">
									<div class="menu-text">HTML</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/ajax/" class="menu-link">
									<div class="menu-text">AJAX</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/angularjs/" class="menu-link">
									<div class="menu-text">ANGULAR JS</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/angularjs11/" class="menu-link">
									<div class="menu-text">ANGULAR JS 11</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="javascript:alert('Laravel Version only available in downloaded version.');" class="menu-link">
									<div class="menu-text">LARAVEL</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/vuejs/" class="menu-link">
									<div class="menu-text">VUE JS</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/reactjs/" class="menu-link">
									<div class="menu-text">REACT JS</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="javascript:alert('.NET Core 5.0 MVC Version only available in downloaded version.');" class="menu-link">
									<div class="menu-text">ASP.NET <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/material/index_v3.html" class="menu-link">
									<div class="menu-text">MATERIAL DESIGN</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/apple/index_v3.html" class="menu-link">
									<div class="menu-text">APPLE DESIGN</div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/transparent/index_v3.html" class="menu-link">
									<div class="menu-text">TRANSPARENT DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/facebook/index_v3.html" class="menu-link">
									<div class="menu-text">FACEBOOK DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>

							<div class="menu-item">
								<a href="https://seantheme.com/color-admin/admin/google/index_v3.html" class="menu-link">
									<div class="menu-text">GOOGLE DESIGN <i class="fa fa-paper-plane text-theme"></i></div>
								</a>
							</div>
						</div>
					</div>

					<!-- 19TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-medkit"></i>
							</div>
							<div class="menu-text">Helper</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 19T MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item">
								<a href="helper_css.html" class="menu-link">
									<div class="menu-text">Predefined CSS Classes</div>
								</a>
							</div>
						</div>
					</div>

					<!-- 20TH MENU -->
					<div class="menu-item has-sub">
						<a href="javascript:;" class="menu-link">
							<div class="menu-icon">
								<i class="fa fa-align-left"></i>
							</div>
							<div class="menu-text">Menu Level</div>
							<div class="menu-caret"></div>
						</a>

						<!-- 20TH MENU SUBMENU -->
						<div class="menu-submenu">
							<div class="menu-item has-sub">
								<a href="javascript:;" class="menu-link">
									<div class="menu-text">Menu 1.1</div>
									<div class="menu-caret"></div>
								</a>

								<div class="menu-submenu">
									<div class="menu-item has-sub">
										<a href="javascript:;" class="menu-link">
											<div class="menu-text">Menu 2.1</div>
											<div class="menu-caret"></div>
										</a>
										<div class="menu-submenu">
											<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 3.1</div></a></div>
											<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 3.2</div></a></div>
										</div>
									</div>
									<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 2.2</div></a></div>
									<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 2.3</div></a></div>
								</div>
							</div>
							<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 1.2</div></a></div>
							<div class="menu-item"><a href="javascript:;" class="menu-link"><div class="menu-text">Menu 1.3</div></a></div>
						</div>
					</div>

					<div class="menu-item d-flex">
						<a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i class="fa fa-angle-double-left"></i></a>
					</div>
				</div>
				<!-- MENU END -->
			</div>
			<!-- SIDEBAR-CONTENT END -->
		</div>
		<!-- SIDEBAR END -->

		<div class="app-sidebar-bg"></div>
		<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a></div>

		<!-- CONTENT -->
		<div id="content" class="app-content">

			<ol class="breadcrumb float-xl-end">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
				<li class="breadcrumb-item active">Dashboard v3</li>
			</ol>

			<h1 class="page-header mb-3">Dashboard v3</h1>

			<div class="d-sm-flex align-items-center mb-3">
				<a href="#" class="btn btn-inverse me-2 text-truncate" id="daterange-filter">
					<i class="fa fa-calendar fa-fw text-white-transparent-5 ms-n1"></i>
						<span>1 Jun 2021 - 7 Jun 2021</span>
					<b class="caret ms-1 opacity-5"></b>
				</a>
				<div class="text-muted fw-bold mt-2 mt-sm-0">
					compared to <span id="daterange-prev-date">24 Mar-30 Apr 2021</span>
				</div>
			</div>

			<!-- 1ST ROW -->
			<div class="row">
				<div class="col-xl-6">
					<div class="card border-0 mb-3 overflow-hidden bg-gray-800 text-white">
						<div class="card-body">
							<div class="row">
								<div class="col-xl-7 col-lg-8">
									<div class="mb-3 text-gray-500">
										<b>TOTAL SALES</b>
										<span class="ms-2">
											<i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Total sales" data-bs-placement="top" data-bs-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
										</span>
									</div>

									<div class="d-flex mb-1">
										<h2 class="mb-0">$<span data-animation="number" data-value="64559.25">0.00</span></h2>
										<div class="ms-auto mt-n1 mb-n1">
											<div id="total-sales-sparkline"></div>
										</div>
									</div>

									<div class="mb-3 text-gray-500">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="33.21">0.00</span>% compare to last week
									</div>

									<hr class="bg-white-transparent-5" />

									<div class="row text-truncate">

										<div class="col-6">
											<div class="fs-12px text-gray-500">Total sales order</div>
											<div class="fs-18px mb-5px fw-bold" data-animation="number" data-value="1568">0</div>
											<div class="progress h-5px rounded-3 bg-gray-900 mb-5px">
											<div class="progress-bar progress-bar-striped rounded-right bg-teal" data-animation="width" data-value="55%" style="width: 0%"></div>
											</div>
										</div>

										<div class="col-6">
											<div class="fs-12px text-gray-500">Avg. sales per order</div>
											<div class="fs-18px mb-5px fw-bold">$<span data-animation="number" data-value="41.20">0.00</span></div>
											<div class="progress h-5px rounded-3 bg-gray-900 mb-5px">
												<div class="progress-bar progress-bar-striped rounded-right" data-animation="width" data-value="55%" style="width: 0%"></div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-5 col-lg-4 align-items-center d-flex justify-content-center">
									<img src="{{ asset("img/svg/img-1.svg") }}" height="150px" class="d-none d-lg-block" />
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-6">
					<div class="row">
						<div class="col-sm-6">
							<div class="card border-0 text-truncate mb-3 bg-gray-800 text-white">
								<div class="card-body">
									<div class="mb-3 text-gray-500">
										<b class="mb-3">CONVERSION RATE</b>
										<span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Conversion Rate" data-bs-placement="top" data-bs-content="Percentage of sessions that resulted in orders from total number of sessions." data-original-title="" title=""></i></span>
									</div>

									<div class="d-flex align-items-center mb-1">
										<h2 class="text-white mb-0"><span data-animation="number" data-value="2.19">0.00</span>%</h2>
										<div class="ms-auto">
											<div id="conversion-rate-sparkline"></div>
										</div>
									</div>

									<div class="mb-4 text-gray-500 ">
										<i class="fa fa-caret-down"></i> <span data-animation="number" data-value="0.50">0.00</span>% compare to last week
									</div>

									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-red fs-8px me-2"></i>
											Added to cart
										</div>
										<div class="d-flex align-items-center ms-auto">
											<div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="262">0</span>%</div>
											<div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="3.79">0.00</span>%</div>
										</div>
									</div>

									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-warning fs-8px me-2"></i>
											Reached checkout
										</div>
										<div class="d-flex align-items-center ms-auto">
											<div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="11">0</span>%</div>
											<div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="3.85">0.00</span>%</div>
										</div>
									</div>

									<div class="d-flex">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-lime fs-8px me-2"></i>
											Sessions converted
										</div>
										<div class="d-flex align-items-center ms-auto">
											<div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="57">0</span>%</div>
											<div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="2.19">0.00</span>%</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6">
							<div class="card border-0 text-truncate mb-3 bg-gray-800 text-white">
								<div class="card-body">
									<div class="mb-3 text-gray-500">
										<b class="mb-3">STORE SESSIONS</b>
										<span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Store Sessions" data-bs-placement="top" data-bs-content="Number of sessions on your online store. A session is a period of continuous activity from a visitor." data-original-title="" title=""></i></span>
									</div>

									<div class="d-flex align-items-center mb-1">
										<h2 class="text-white mb-0"><span data-animation="number" data-value="70719">0</span></h2>
										<div class="ms-auto">
											<div id="store-session-sparkline"></div>
										</div>
									</div>

									<div class="mb-4 text-gray-500 ">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="9.5">0.00</span>% compare to last week
									</div>

									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-teal fs-8px me-2"></i>
											Mobile
										</div>

										<div class="d-flex align-items-center ms-auto">
											<div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="25.7">0.00</span>%</div>
											<div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="53210">0</span></div>
										</div>
									</div>

									<div class="d-flex mb-2">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-blue fs-8px me-2"></i>
											Desktop
										</div>
										<div class="d-flex align-items-center ms-auto">
											<div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="16.0">0.00</span>%</div>
											<div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="11959">0</span></div>
										</div>
									</div>

									<div class="d-flex">
										<div class="d-flex align-items-center">
											<i class="fa fa-circle text-cyan fs-8px me-2"></i>
											Tablet
										</div>
										<div class="d-flex align-items-center ms-auto">
											<div class="text-gray-500 fs-11px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="7.9">0.00</span>%</div>
											<div class="w-50px text-end ps-2 fw-bold"><span data-animation="number" data-value="5545">0</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 2ND ROW -->
			<div class="row">
				<div class="col-xl-8 col-lg-6">
					<div class="card border-0 mb-3 bg-gray-800 text-white">
						<div class="card-body">
							<div class="mb-3 text-gray-500 ">
								<b>VISITORS ANALYTICS</b> 
								<span class="ms-2">
									<i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Top products with units sold" data-bs-placement="top" data-bs-content="Products with the most individual units sold. Includes orders from all sales channels." data-original-title="" title=""></i>
								</span>
							</div>

							<div class="row">
								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="127.1">0</span>K</h3>
									<div>New Visitors</div>
									<div class="text-gray-500 fs-11px text-truncate">
										<i class="fa fa-caret-up"></i> 
										<span data-animation="number" data-value="25.5">0.00</span>% from previous 7 days
									</div>
								</div>

								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="179.9">0</span>K</h3>
									<div>Returning Visitors</div>
									<div class="text-gray-500 fs-11px text-truncate">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="5.33">0.00</span>% from previous 7 days
									</div>
								</div>

								<div class="col-xl-3 col-4">
									<h3 class="mb-1"><span data-animation="number" data-value="766.8">0</span>K</h3>
									<div>Total Page Views</div>
									<div class="text-gray-500 fs-11px text-truncate">
										<i class="fa fa-caret-up"></i> <span data-animation="number" data-value="0.html">0.00</span>% from previous 7 days
									</div>
								</div>
							</div>
						</div>

						<div class="card-body p-0">
							<div style="height: 269px">
								<div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 254px"></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">
					<div class="card border-0 mb-3 bg-gray-800 text-white">
						<div class="card-body">
							<div class="mb-2 text-gray-500">
								<b>SESSION BY LOCATION</b>
								<span class="ms-2">
									<i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Total sales" data-bs-placement="top" data-bs-content="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i>
								</span>
							</div>

							<!-- MAP -->
							<div id="visitors-map" class="mb-2" style="height: 200px"></div>
							<div>
								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse me-2 w-40px" style="background-image: url({{ asset("img/flag/us.jpg") }})"></div>`

									<div class="d-flex w-100">
										<div>United States</div>
										<div class="ms-auto text-gray-500"><span data-animation="number" data-value="39.85">0.00</span>%</div>
									</div>
								</div>

								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse me-2 w-40px" style="background-image: url({{ asset("img/flag/cn.jpg") }})"></div>
									<div class="d-flex w-100">
										<div>China</div>
										<div class="ms-auto text-gray-500"><span data-animation="number" data-value="14.23">0.00</span>%</div>
									</div>
								</div>

								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse me-2 w-40px" style="background-image: url({{ asset("img/flag/de.jpg") }})"></div>
									<div class="d-flex w-100">
										<div>Germany</div>
										<div class="ms-auto text-gray-500"><span data-animation="number" data-value="12.83">0.00</span>%</div>
									</div>
								</div>

								<div class="d-flex align-items-center text-white mb-2">
									<div class="widget-img widget-img-xs rounded bg-inverse me-2 w-40px" style="background-image: url({{ asset("img/flag/fr.jpg") }})"></div>
									<div class="d-flex w-100">
										<div>France</div>
										<div class="ms-auto text-gray-500"><span data-animation="number" data-value="11.14">0.00</span>%</div>
									</div>
								</div>

								<div class="d-flex align-items-center text-white mb-0">
									<div class="widget-img widget-img-xs rounded bg-inverse me-2 w-40px" style="background-image: url({{ asset("img/flag/jp.jpg") }})"></div>
									<div class="d-flex w-100">
										<div>Japan</div>
										<div class="ms-auto text-gray-500"><span data-animation="number" data-value="10.75">0.00</span>%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- 3RD ROW -->
			<div class="row">
				<div class="col-xl-4 col-lg-6">
					<div class="card border-0 mb-3 bg-gray-900 text-white">
						<div class="card-body" style="background: no-repeat bottom right; background-image: url("{{ asset("img/svg/img-4.svg") }}"); background-size: auto 60%;">
							<div class="mb-3 text-gray-500 ">
								<b>SALES BY SOCIAL SOURCE</b>
								<span class="text-gray-500 ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Sales by social source" data-bs-placement="top" data-bs-content="Total online store sales that came from a social referrer source."></i></span>
							</div>

							<h3 class="mb-10px">$<span data-animation="number" data-value="55547.89">0.00</span></h3>
							<div class="text-gray-500 mb-1px"><i class="fa fa-caret-up"></i> <span data-animation="number" data-value="45.76">0.00</span>% increased</div>
						</div>

						<div class="widget-list rounded-bottom inverse-mode">

							<a href="#" class="widget-list-item rounded-0 pt-3px">
								<div class="widget-list-media icon">
									<i class="fab fa-apple bg-indigo text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Apple Store</div>
								</div>
								<div class="widget-list-action text-nowrap text-gray-500">
									$<span data-animation="number" data-value="34840.17">0.00</span>
								</div>
							</a>

							<a href="#" class="widget-list-item">
								<div class="widget-list-media icon">
									<i class="fab fa-facebook-f bg-blue text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Facebook</div>
								</div>
								<div class="widget-list-action text-nowrap text-gray-500">
									$<span data-animation="number" data-value="12502.67">0.00</span>
								</div>
							</a>

							<a href="#" class="widget-list-item">
								<div class="widget-list-media icon">
									<i class="fab fa-twitter bg-info text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Twitter</div>
								</div>
								<div class="widget-list-action text-nowrap text-gray-500">
									$<span data-animation="number" data-value="4799.20">0.00</span>
								</div>
							</a>

							<a href="#" class="widget-list-item">
								<div class="widget-list-media icon">
									<i class="fab fa-google bg-red text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Google Adwords</div>
								</div>
								<div class="widget-list-action text-nowrap text-gray-500">
									$<span data-animation="number" data-value="3405.85">0.00</span>
								</div>
							</a>

							<a href="#" class="widget-list-item pb-3px rounded-bottom">
								<div class="widget-list-media icon">
									<i class="fab fa-instagram bg-pink text-white"></i>
								</div>
								<div class="widget-list-content">
									<div class="widget-list-title">Instagram</div>
								</div>
								<div class="widget-list-action text-nowrap text-gray-500">
									$<span data-animation="number" data-value="0.00">0.00</span>
								</div>
							</a>
						</div>
					</div>
				</div>

				<div class="col-xl-4 col-lg-6">

					<div class="card border-0 mb-3 bg-gray-800 text-white">

						<div class="card-body">

							<div class="mb-3 text-gray-500">
								<b>TOP PRODUCTS BY UNITS SOLD</b>
								<span class="ms-2 "><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Top products with units sold" data-bs-placement="top" data-bs-content="Products with the most individual units sold. Includes orders from all sales channels."></i></span>
							</div>

							<div class="d-flex align-items-center mb-15px">
								<div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
									<div class="h-100 w-100" style="background: url({{ asset("img/product/product-8.jpg") }}) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Apple iPhone XR (2021)</div>
									<div class="text-gray-500">$799.00</div>
								</div>
								<div class="ms-auto text-center">
									<div class="fs-13px"><span data-animation="number" data-value="195">0</span></div>
									<div class="text-gray-500 fs-10px">sold</div>
								</div>
							</div>

							<div class="d-flex align-items-center mb-15px">
								<div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
									<div class="h-100 w-100" style="background: url({{ asset("img/product/product-9.jpg") }}) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Apple iPhone XS (2021)</div>
									<div class="text-gray-500">$1,199.00</div>
								</div>
								<div class="ms-auto text-center">
									<div class="fs-13px"><span data-animation="number" data-value="185">0</span></div>
									<div class="text-gray-500 fs-10px">sold</div>
								</div>
							</div>

							<div class="d-flex align-items-center mb-15px">
								<div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
									<div class="h-100 w-100" style="background: url({{ asset("img/product/product-10.jpg") }}) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Apple iPhone XS Max (2021)</div>
									<div class="text-gray-500">$3,399</div>
								</div>
								<div class="ms-auto text-center">
									<div class="fs-13px"><span data-animation="number" data-value="129">0</span></div>
									<div class="text-gray-500 fs-10px">sold</div>
								</div>
							</div>

							<div class="d-flex align-items-center mb-15px">
								<div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
									<div class="h-100 w-100" style="background: url({{ asset("img/product/product-11.jpg") }}) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Huawei Y5 (2021)</div>
									<div class="text-gray-500">$99.00</div>
								</div>
								<div class="ms-auto text-center">
									<div class="fs-13px"><span data-animation="number" data-value="96">0</span></div>
									<div class="text-gray-500 fs-10px">sold</div>
								</div>
							</div>

							<div class="d-flex align-items-center">
								<div class="widget-img rounded-3 me-10px bg-white p-3px w-30px">
									<div class="h-100 w-100" style="background: url({{ asset("img/product/product-12.jpg") }}) center no-repeat; background-size: auto 100%;"></div>
								</div>
								<div class="text-truncate">
									<div>Huawei Nova 4 (2021)</div>
									<div class="text-gray-500">$499.00</div>
								</div>
								<div class="ms-auto text-center">
									<div class="fs-13px"><span data-animation="number" data-value="55">0</span></div>
									<div class="text-gray-500 fs-10px">sold</div>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="col-xl-4 col-lg-6">

					<div class="card border-0 mb-3 bg-gray-800 text-white">

						<div class="card-body">

							<div class="mb-3 text-gray-500 ">
								<b>MARKETING CAMPAIGN</b>
								<span class="ms-2"><i class="fa fa-info-circle" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-title="Marketing Campaign" data-bs-placement="top" data-bs-content="Campaign that run for getting more returning customers."></i></span>
							</div>

							<div class="row align-items-center pb-1px">

								<div class="col-4">
									<div class="h-100px d-flex align-items-center justify-content-center">
										<img src="{{ asset("img/svg/img-2.svg") }}" class="mw-100 mh-100" />
									</div>
								</div>

								<div class="col-8">
									<div class="mb-2px text-truncate">Email Marketing Campaign</div>
									<div class="mb-2px  text-gray-500  fs-11px">Mon 12/6 - Sun 18/6</div>

									<div class="d-flex align-items-center mb-2px">
										<div class="flex-grow-1">
											<div class="progress h-5px rounded-pill bg-white-transparent-1">
												<div class="progress-bar progress-bar-striped bg-indigo" data-animation="width" data-value="80%" style="width: 0%"></div>
											</div>
										</div>
										<div class="ms-2 fs-11px w-30px text-center"><span data-animation="number" data-value="80">0</span>%</div>
									</div>

									<div class="text-gray-500 fs-11px mb-15px text-truncate">
									57.5% people click the email
									</div>

									<a href="#" class="btn btn-xs btn-indigo fs-10px ps-2 pe-2">View campaign</a>
								</div>
							</div>

							<hr class=" bg-white-transparent-2 mt-20px mb-20px" />

							<div class="row align-items-center">

								<div class="col-4">
									<div class="h-100px d-flex align-items-center justify-content-center">
										<img src="{{ asset("img/svg/img-3.svg") }}" class="mw-100 mh-100" />
									</div>
								</div>

								<div class="col-8">
									<div class="mb-2px text-truncate">Facebook Marketing Campaign</div>
									<div class="mb-2px  text-gray-500  fs-11px">Sat 10/6 - Sun 18/6</div>

									<div class="d-flex align-items-center mb-2px">
										<div class="flex-grow-1">
											<div class="progress h-5px rounded-pill bg-white-transparent-1">
												<div class="progress-bar progress-bar-striped bg-warning" data-animation="width" data-value="60%" style="width: 0%"></div>
											</div>
										</div>
										<div class="ms-2 fs-11px w-30px text-center"><span data-animation="number" data-value="60">0</span>%</div>
									</div>

									<div class="text-gray-500 fs-11px mb-15px text-truncate">
									+124k visitors from facebook
									</div>

									<a href="#" class="btn btn-xs btn-warning fs-10px ps-2 pe-2">View campaign</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HEADER -->

		<!-- THEME -->
		<div class="theme-panel">
			<a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn">
				<i class="fa fa-cog"></i>
			</a>

			<div class="theme-panel-content" data-scrollbar="true" data-height="100%">
				<h5>App Settings</h5>

				<div class="theme-list">
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-red" data-theme="red" data-theme-file="css/default/theme/red.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-pink" data-theme="pink" data-theme-file="css/default/theme/pink.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-orange" data-theme="orange" data-theme-file="css/default/theme/orange.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-yellow" data-theme="yellow" data-theme-file="css/default/theme/yellow.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-lime" data-theme="lime" data-theme-file="css/default/theme/lime.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-green" data-theme="green" data-theme-file="css/default/theme/green.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a>
					</div>
					<div class="theme-list-item active">
						<a href="javascript:;" class="theme-list-link bg-teal" data-theme="default" data-theme-file="" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-cyan" data-theme="cyan" data-theme-file="css/default/theme/cyan.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-blue" data-theme="blue" data-theme-file="css/default/theme/blue.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-purple" data-theme="purple" data-theme-file="css/default/theme/purple.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-indigo" data-theme="indigo" data-theme-file="css/default/theme/indigo.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a>
					</div>
					<div class="theme-list-item">
						<a href="javascript:;" class="theme-list-link bg-black" data-theme="black" data-theme-file="css/default/theme/black.min.css" data-toggle="theme-selector" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a>
					</div>
				</div>

				<div class="theme-panel-divider"></div>

				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Header Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-fixed" id="appHeaderFixed" value="1" checked />
							<label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
						</div>
					</div>
				</div>

				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Header Inverse</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-header-inverse" id="appHeaderInverse" value="1" />
							<label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
						</div>
					</div>
				</div>

				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Sidebar Fixed</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-fixed" id="appSidebarFixed" value="1" checked />
							<label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
						</div>
					</div>
				</div>

				<div class="row mt-10px align-items-center">
					<div class="col-8 control-label text-inverse fw-bold">Sidebar Grid</div>
					<div class="col-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-sidebar-grid" id="appSidebarGrid" value="1" />
							<label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
						</div>
					</div>
				</div>

				<div class="row mt-10px align-items-center">
					<div class="col-md-8 control-label text-inverse fw-bold">Gradient Enabled</div>
					<div class="col-md-4 d-flex">
						<div class="form-check form-switch ms-auto mb-0">
							<input type="checkbox" class="form-check-input" name="app-gradient-enabled" id="appGradientEnabled" value="1" />
							<label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
						</div>
					</div>
				</div>

				<div class="theme-panel-divider"></div>
				<h5>Admin Design (5)</h5>

				<div class="theme-version">
					<div class="theme-version-item">
						<a href="index_v2.html" class="theme-version-link active">
							<span style="background-image: url({{ asset("img/theme/default.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/transparent/index_v2.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/transparent.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/apple/index_v2.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/apple.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/material/index_v2.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/material.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/facebook/index_v2.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/facebook.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/google/index_v2.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/google.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>
				</div>

				<div class="theme-panel-divider"></div>
				<h5>Language Version (7)</h5>

				<div class="theme-version">
					<div class="theme-version-item">
						<a href="index.html" class="theme-version-link active">
							<span style="background-image: url({{ asset("img/version/html.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/ajax/index.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/ajax.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/angularjs/index.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/angular1x.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/angularjs11/index.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/angular10x.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="javascript:alert('Laravel Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/laravel.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/vuejs/index.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/vuejs.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/admin/reactjs/index.html" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/reactjs.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="javascript:alert('.NET Core 5.0 MVC Version only available in downloaded version.');" class="theme-version-link">
							<span style="background-image: url({{ asset("img/version/dotnet.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>
				</div>

				<div class="theme-panel-divider"></div>
				<h5>Frontend Design (5)</h5>

				<div class="theme-version">
					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/frontend/one-page-parallax/index.html" target="_blank" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/one-page") }}-parallax.jpg);" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/frontend/e-commerce/index.html" target="_blank" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/e-commerce") }}.jpg);" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/frontend/blog/index.html" target="_blank" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/blog.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/frontend/forum/index.html" target="_blank" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/forum.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>

					<div class="theme-version-item">
						<a href="https://seantheme.com/color-admin/frontend/corporate/index.html" target="_blank" class="theme-version-link">
							<span style="background-image: url({{ asset("img/theme/corporate.jpg") }});" class="theme-version-cover"></span>
						</a>
					</div>
				</div>

				<div class="theme-panel-divider"></div>
				<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-inverse d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
				<a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill" data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
			</div>
		</div>

		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
	</div>
	<!-- APP HEADER END -->

	<!-- SCRIPTS -->
	<script src="{{ asset("js/vendor.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("js/app.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("js/theme/default.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/d3/d3.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/nvd3/build/nv.d3.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/jvectormap-next/jquery-jvectormap.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/jvectormap-next/jquery-jvectormap-world-mill.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/apexcharts/dist/apexcharts.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/moment/min/moment.min.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/bootstrap-daterangepicker/daterangepicker.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("js/demo/dashboard-v3.js") }}" type="c518a293edb44bd79baa4d19-text/javascript"></script>
	<script src="{{ asset("plugins/rocket-loader/rocket-loader.min.js") }}" data-cf-settings="c518a293edb44bd79baa4d19-|49" defer=""></script>

</body>
</html>