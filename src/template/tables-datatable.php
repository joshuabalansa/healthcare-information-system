<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | Data Tables</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>

<body class="page-body" data-url="http://neon.dev">

	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

		<div class="sidebar-menu">

			<div class="sidebar-menu-inner">

				<header class="logo-env">

					<!-- logo -->
					<div class="logo">
						<a href="index.html">
							<img src="assets/images/logo@2x.png" width="120" alt="" />
						</a>
					</div>

					<!-- logo collapse icon -->
					<div class="sidebar-collapse">
						<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
							<i class="entypo-menu"></i>
						</a>
					</div>


					<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
					<div class="sidebar-mobile-menu visible-xs">
						<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
							<i class="entypo-menu"></i>
						</a>
					</div>

				</header>


				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li class="has-sub">
						<a href="index.html">
							<i class="entypo-gauge"></i>
							<span class="title">Dashboard</span>
						</a>
						<ul>
							<li>
								<a href="index.html">
									<span class="title">Dashboard 1</span>
								</a>
							</li>
							<li>
								<a href="dashboard-2.html">
									<span class="title">Dashboard 2</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">Dashboard 3</span>
								</a>
							</li>
							<li class="has-sub">
								<a href="skin-black.html">
									<span class="title">Skins</span>
								</a>
								<ul>
									<li>
										<a href="skin-black.html">
											<span class="title">Black Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-white.html">
											<span class="title">White Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-purple.html">
											<span class="title">Purple Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-cafe.html">
											<span class="title">Cafe Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-red.html">
											<span class="title">Red Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-green.html">
											<span class="title">Green Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-yellow.html">
											<span class="title">Yellow Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-blue.html">
											<span class="title">Blue Skin</span>
										</a>
									</li>
									<li>
										<a href="skin-facebook.html">
											<span class="title">Facebook Skin</span>
											<span class="badge badge-secondary badge-roundless">New</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="highlights.html">
									<span class="title">What's New</span>
									<span class="badge badge-success badge-roundless">v2.0</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="layout-api.html">
							<i class="entypo-layout"></i>
							<span class="title">Layouts</span>
						</a>
						<ul>
							<li>
								<a href="layout-api.html">
									<span class="title">Layout API</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">Collapsed Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-fixed-sidebar.html">
									<span class="title">Fixed Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-chat-open.html">
									<span class="title">Chat Open</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-boxed.html">
									<span class="title">Horizontal Menu Boxed</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-fluid.html">
									<span class="title">Horizontal Menu Fluid</span>
								</a>
							</li>
							<li>
								<a href="layout-mixed-menus.html">
									<span class="title">Mixed Menus</span>
								</a>
							</li>
							<li>
								<a href="layout-right-sidebar.html">
									<span class="title">Right Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-both-menus-right-sidebar.html">
									<span class="title">Both Menus (Right Sidebar)</span>
								</a>
							</li>
							<li class="has-sub">
								<a href="layout-page-transition-fade.html">
									<span class="title">Page Enter Transitions</span>
								</a>
								<ul>
									<li>
										<a href="layout-page-transition-fade.html">
											<span class="title">Fade Scale</span>
										</a>
									</li>
									<li>
										<a href="layout-page-transition-left-in.html">
											<span class="title">Left In</span>
										</a>
									</li>
									<li>
										<a href="layout-page-transition-right-in.html">
											<span class="title">Right In</span>
										</a>
									</li>
									<li>
										<a href="layout-page-transition-fade-only.html">
											<span class="title">Fade Only</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="layout-boxed.html">
									<span class="title">Boxed Layout</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="index.html" target="_blank">
							<i class="entypo-monitor"></i>
							<span class="title">Frontend</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="ui-panels.html">
							<i class="entypo-newspaper"></i>
							<span class="title">UI Elements</span>
						</a>
						<ul>
							<li>
								<a href="ui-panels.html">
									<span class="title">Panels</span>
								</a>
							</li>
							<li>
								<a href="ui-tiles.html">
									<span class="title">Tiles</span>
								</a>
							</li>
							<li>
								<a href="forms-buttons.html">
									<span class="title">Buttons</span>
								</a>
							</li>
							<li>
								<a href="ui-typography.html">
									<span class="title">Typography</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">Tabs &amp; Accordions</span>
								</a>
							</li>
							<li>
								<a href="ui-tooltips-popovers.html">
									<span class="title">Tooltips &amp; Popovers</span>
								</a>
							</li>
							<li>
								<a href="ui-navbars.html">
									<span class="title">Navbars</span>
								</a>
							</li>
							<li>
								<a href="ui-breadcrumbs.html">
									<span class="title">Breadcrumbs</span>
								</a>
							</li>
							<li>
								<a href="ui-badges-labels.html">
									<span class="title">Badges &amp; Labels</span>
								</a>
							</li>
							<li>
								<a href="ui-progress-bars.html">
									<span class="title">Progress Bars</span>
								</a>
							</li>
							<li>
								<a href="ui-modals.html">
									<span class="title">Modals</span>
								</a>
							</li>
							<li>
								<a href="ui-blockquotes.html">
									<span class="title">Blockquotes</span>
								</a>
							</li>
							<li>
								<a href="ui-alerts.html">
									<span class="title">Alerts</span>
								</a>
							</li>
							<li>
								<a href="ui-pagination.html">
									<span class="title">Pagination</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="mailbox.html">
							<i class="entypo-mail"></i>
							<span class="title">Mailbox</span>
							<span class="badge badge-secondary">8</span>
						</a>
						<ul>
							<li>
								<a href="mailbox.html">
									<i class="entypo-inbox"></i>
									<span class="title">Inbox</span>
								</a>
							</li>
							<li>
								<a href="mailbox-compose.html">
									<i class="entypo-pencil"></i>
									<span class="title">Compose Message</span>
								</a>
							</li>
							<li>
								<a href="mailbox-message.html">
									<i class="entypo-attach"></i>
									<span class="title">View Message</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="forms-main.html">
							<i class="entypo-doc-text"></i>
							<span class="title">Forms</span>
						</a>
						<ul>
							<li>
								<a href="forms-main.html">
									<span class="title">Basic Elements</span>
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									<span class="title">Advanced Plugins</span>
								</a>
							</li>
							<li>
								<a href="forms-wizard.html">
									<span class="title">Form Wizard</span>
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									<span class="title">Data Validation</span>
								</a>
							</li>
							<li>
								<a href="forms-masks.html">
									<span class="title">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="forms-sliders.html">
									<span class="title">Sliders</span>
								</a>
							</li>
							<li>
								<a href="forms-file-upload.html">
									<span class="title">File Upload</span>
								</a>
							</li>
							<li>
								<a href="forms-wysiwyg.html">
									<span class="title">Editors</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="opened active has-sub">
						<a href="tables-main.html">
							<i class="entypo-window"></i>
							<span class="title">Tables</span>
						</a>
						<ul class="visible">
							<li>
								<a href="tables-main.html">
									<span class="title">Basic Tables</span>
								</a>
							</li>
							<li class="active">
								<a href="tables-datatable.html">
									<span class="title">Data Tables</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="extra-icons.html">
							<i class="entypo-bag"></i>
							<span class="title">Extra</span>
							<span class="badge badge-info badge-roundless">New Items</span>
						</a>
						<ul>
							<li class="has-sub">
								<a href="extra-icons.html">
									<span class="title">Icons</span>
									<span class="badge badge-success">3</span>
								</a>
								<ul>
									<li>
										<a href="extra-icons.html">
											<span class="title">Font Awesome</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-entypo.html">
											<span class="title">Entypo</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-glyphicons.html">
											<span class="title">Glyph Icons</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-portlets.html">
									<span class="title">Portlets</span>
								</a>
							</li>
							<li class="has-sub">
								<a href="extra-google-maps.html">
									<span class="title">Maps</span>
								</a>
								<ul>
									<li>
										<a href="extra-google-maps.html">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="extra-vector-maps.html">
											<span class="title">Vector Maps</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-chat-api.html">
									<span class="title">Chat API</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar.html">
									<span class="title">Calendar</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar-2.html">
									<span class="title">Calendar 2</span>
									<span class="badge badge-secondary badge-roundless">New</span>
								</a>
							</li>
							<li>
								<a href="extra-notes.html">
									<span class="title">Notes</span>
								</a>
							</li>
							<li>
								<a href="extra-lockscreen.html">
									<span class="title">Lockscreen</span>
								</a>
							</li>
							<li>
								<a href="extra-login.html">
									<span class="title">Login</span>
								</a>
							</li>
							<li>
								<a href="extra-register.html">
									<span class="title">Register</span>
								</a>
							</li>
							<li>
								<a href="extra-invoice.html">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li class="has-sub">
								<a href="extra-gallery.html">
									<span class="title">Gallery</span>
								</a>
								<ul>
									<li>
										<a href="extra-gallery.html">
											<span class="title">Albums</span>
										</a>
									</li>
									<li>
										<a href="extra-gallery-single.html">
											<span class="title">Single Album</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-members.html">
									<span class="title">Members</span>
								</a>
							</li>
							<li>
								<a href="extra-profile.html">
									<span class="title">Profile</span>
								</a>
							</li>
							<li>
								<a href="extra-404.html">
									<span class="title">404 Page</span>
								</a>
							</li>
							<li>
								<a href="extra-blank-page.html">
									<span class="title">Blank Page</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline.html">
									<span class="title">Timeline</span>
								</a>
							</li>
							<li>
								<a href="extra-comments.html">
									<span class="title">Comments</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline-centered.html">
									<span class="title">Timeline Centered</span>
								</a>
							</li>
							<li>
								<a href="extra-tocify.html">
									<span class="title">Tocify</span>
								</a>
							</li>
							<li>
								<a href="ui-notifications.html">
									<span class="title">Notifications</span>
								</a>
							</li>
							<li>
								<a href="extra-new-post.html">
									<span class="title">New Post</span>
								</a>
							</li>
							<li>
								<a href="extra-settings.html">
									<span class="title">Settings</span>
								</a>
							</li>
							<li>
								<a href="extra-scrollbox.html">
									<span class="title">Scrollbox</span>
								</a>
							</li>
							<li>
								<a href="extra-image-crop.html">
									<span class="title">Image Crop</span>
								</a>
							</li>
							<li>
								<a href="extra-search.html">
									<span class="title">Search Page</span>
								</a>
							</li>
							<li>
								<a href="extra-language-selector.html">
									<span class="title">Language Selector</span>
								</a>
							</li>
							<li>
								<a href="extra-nestable.html">
									<span class="title">Nestable Lists</span>
								</a>
							</li>
							<li>
								<a href="extra-file-tree.html">
									<span class="title">File Tree</span>
								</a>
							</li>
							<li>
								<a href="extra-load-progress.html">
									<span class="title">Load Progress</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts.html">
							<i class="entypo-chart-bar"></i>
							<span class="title">Charts</span>
						</a>
					</li>
					<li class="has-sub">
						<a href="#">
							<i class="entypo-flow-tree"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li class="has-sub">
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li class="has-sub">
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li class="has-sub">
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>

			</div>

		</div>

		<div class="main-content">

			<div class="row">

				<!-- Profile Info and Notifications -->
				<div class="col-md-6 col-sm-8 clearfix">

					<ul class="user-info pull-left pull-none-xsm">

						<!-- Profile Info -->
						<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
								John Henderson
							</a>

							<ul class="dropdown-menu">

								<!-- Reverse Caret -->
								<li class="caret"></li>

								<!-- Profile sub-links -->
								<li>
									<a href="extra-timeline.html">
										<i class="entypo-user"></i>
										Edit Profile
									</a>
								</li>

								<li>
									<a href="mailbox.html">
										<i class="entypo-mail"></i>
										Inbox
									</a>
								</li>

								<li>
									<a href="extra-calendar.html">
										<i class="entypo-calendar"></i>
										Calendar
									</a>
								</li>

								<li>
									<a href="#">
										<i class="entypo-clipboard"></i>
										Tasks
									</a>
								</li>
							</ul>
						</li>

					</ul>

					<ul class="user-info pull-left pull-right-xs pull-none-xsm">

						<!-- Raw Notifications -->
						<li class="notifications dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="entypo-attention"></i>
								<span class="badge badge-info">6</span>
							</a>

							<ul class="dropdown-menu">
								<li class="top">
									<p class="small">
										<a href="#" class="pull-right">Mark all Read</a>
										You have <strong>3</strong> new notifications.
									</p>
								</li>

								<li>
									<ul class="dropdown-menu-list scroller">
										<li class="unread notification-success">
											<a href="#">
												<i class="entypo-user-add pull-right"></i>

												<span class="line">
													<strong>New user registered</strong>
												</span>

												<span class="line small">
													30 seconds ago
												</span>
											</a>
										</li>

										<li class="unread notification-secondary">
											<a href="#">
												<i class="entypo-heart pull-right"></i>

												<span class="line">
													<strong>Someone special liked this</strong>
												</span>

												<span class="line small">
													2 minutes ago
												</span>
											</a>
										</li>

										<li class="notification-primary">
											<a href="#">
												<i class="entypo-user pull-right"></i>

												<span class="line">
													<strong>Privacy settings have been changed</strong>
												</span>

												<span class="line small">
													3 hours ago
												</span>
											</a>
										</li>

										<li class="notification-danger">
											<a href="#">
												<i class="entypo-cancel-circled pull-right"></i>

												<span class="line">
													John cancelled the event
												</span>

												<span class="line small">
													9 hours ago
												</span>
											</a>
										</li>

										<li class="notification-info">
											<a href="#">
												<i class="entypo-info pull-right"></i>

												<span class="line">
													The server is status is stable
												</span>

												<span class="line small">
													yesterday at 10:30am
												</span>
											</a>
										</li>

										<li class="notification-warning">
											<a href="#">
												<i class="entypo-rss pull-right"></i>

												<span class="line">
													New comments waiting approval
												</span>

												<span class="line small">
													last week
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="external">
									<a href="#">View all notifications</a>
								</li>
							</ul>

						</li>

						<!-- Message Notifications -->
						<li class="notifications dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="entypo-mail"></i>
								<span class="badge badge-secondary">10</span>
							</a>

							<ul class="dropdown-menu">
								<li>
									<form class="top-dropdown-search">

										<div class="form-group">
											<input type="text" class="form-control" placeholder="Search anything..." name="s" />
										</div>

									</form>

									<ul class="dropdown-menu-list scroller">
										<li class="active">
											<a href="#">
												<span class="image pull-right">
													<img src="assets/images/thumb-1@2x.png" width="44" alt="" class="img-circle" />
												</span>

												<span class="line">
													<strong>Luc Chartier</strong>
													- yesterday
												</span>

												<span class="line desc small">
													This ain’t our first item, it is the best of the rest.
												</span>
											</a>
										</li>

										<li class="active">
											<a href="#">
												<span class="image pull-right">
													<img src="assets/images/thumb-2@2x.png" width="44" alt="" class="img-circle" />
												</span>

												<span class="line">
													<strong>Salma Nyberg</strong>
													- 2 days ago
												</span>

												<span class="line desc small">
													Oh he decisively impression attachment friendship so if everything.
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<span class="image pull-right">
													<img src="assets/images/thumb-3@2x.png" width="44" alt="" class="img-circle" />
												</span>

												<span class="line">
													Hayden Cartwright
													- a week ago
												</span>

												<span class="line desc small">
													Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<span class="image pull-right">
													<img src="assets/images/thumb-4@2x.png" width="44" alt="" class="img-circle" />
												</span>

												<span class="line">
													Sandra Eberhardt
													- 16 days ago
												</span>

												<span class="line desc small">
													On so attention necessary at by provision otherwise existence direction.
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="external">
									<a href="mailbox.html">All Messages</a>
								</li>
							</ul>

						</li>

						<!-- Task Notifications -->
						<li class="notifications dropdown">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<i class="entypo-list"></i>
								<span class="badge badge-warning">1</span>
							</a>

							<ul class="dropdown-menu">
								<li class="top">
									<p>You have 6 pending tasks</p>
								</li>

								<li>
									<ul class="dropdown-menu-list scroller">
										<li>
											<a href="#">
												<span class="task">
													<span class="desc">Procurement</span>
													<span class="percent">27%</span>
												</span>

												<span class="progress">
													<span style="width: 27%;" class="progress-bar progress-bar-success">
														<span class="sr-only">27% Complete</span>
													</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="task">
													<span class="desc">App Development</span>
													<span class="percent">83%</span>
												</span>

												<span class="progress progress-striped">
													<span style="width: 83%;" class="progress-bar progress-bar-danger">
														<span class="sr-only">83% Complete</span>
													</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="task">
													<span class="desc">HTML Slicing</span>
													<span class="percent">91%</span>
												</span>

												<span class="progress">
													<span style="width: 91%;" class="progress-bar progress-bar-success">
														<span class="sr-only">91% Complete</span>
													</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="task">
													<span class="desc">Database Repair</span>
													<span class="percent">12%</span>
												</span>

												<span class="progress progress-striped">
													<span style="width: 12%;" class="progress-bar progress-bar-warning">
														<span class="sr-only">12% Complete</span>
													</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="task">
													<span class="desc">Backup Create Progress</span>
													<span class="percent">54%</span>
												</span>

												<span class="progress progress-striped">
													<span style="width: 54%;" class="progress-bar progress-bar-info">
														<span class="sr-only">54% Complete</span>
													</span>
												</span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="task">
													<span class="desc">Upgrade Progress</span>
													<span class="percent">17%</span>
												</span>

												<span class="progress progress-striped">
													<span style="width: 17%;" class="progress-bar progress-bar-important">
														<span class="sr-only">17% Complete</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="external">
									<a href="#">See all tasks</a>
								</li>
							</ul>

						</li>

					</ul>

				</div>


				<!-- Raw Links -->
				<div class="col-md-6 col-sm-4 clearfix hidden-xs">

					<ul class="list-inline links-list pull-right">

						<!-- Language Selector -->
						<li class="dropdown language-selector">

							Language: &nbsp;
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
								<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
							</a>

							<ul class="dropdown-menu pull-right">
								<li>
									<a href="#">
										<img src="assets/images/flags/flag-de.png" width="16" height="16" />
										<span>Deutsch</span>
									</a>
								</li>
								<li class="active">
									<a href="#">
										<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
										<span>English</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/images/flags/flag-fr.png" width="16" height="16" />
										<span>François</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/images/flags/flag-al.png" width="16" height="16" />
										<span>Shqip</span>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="assets/images/flags/flag-es.png" width="16" height="16" />
										<span>Español</span>
									</a>
								</li>
							</ul>

						</li>

						<li class="sep"></li>


						<li>
							<a href="#" data-toggle="chat" data-collapse-sidebar="1">
								<i class="entypo-chat"></i>
								Chat

								<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
							</a>
						</li>

						<li class="sep"></li>

						<li>
							<a href="extra-login.html">
								Log Out <i class="entypo-logout right"></i>
							</a>
						</li>
					</ul>

				</div>

			</div>

			<hr />

			<ol class="breadcrumb bc-3">
				<li>
					<a href="index.html"><i class="fa-home"></i>Home</a>
				</li>
				<li>

					<a href="tables-main.html">Tables</a>
				</li>
				<li class="active">

					<strong>Data Tables</strong>
				</li>
			</ol>

			<h2>Data Tables</h2>

			<br />

			<script type="text/javascript">
				jQuery(document).ready(function($) {
					var $table1 = jQuery('#table-1');

					// Initialize DataTable
					$table1.DataTable({
						"aLengthMenu": [
							[10, 25, 50, -1],
							[10, 25, 50, "All"]
						],
						"bStateSave": true
					});

					// Initalize Select Dropdown after DataTables is created
					$table1.closest('.dataTables_wrapper').find('select').select2({
						minimumResultsForSearch: -1
					});
				});
			</script>

			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th data-hide="phone">Rendering engine</th>
						<th>Browser</th>
						<th data-hide="phone">Platform(s)</th>
						<th data-hide="phone,tablet">Engine version</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td class="center">4</td>
						<td class="center">X</td>
					</tr>
					<tr class="even gradeC">
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td class="center">5</td>
						<td class="center">C</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td class="center">5.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td class="center">7</td>
						<td class="center">A</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="center">1.9</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.2</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.4</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.6</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td class="center">125.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="center">312.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td class="center">419.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="center">522.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td class="center">420</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td class="center">420.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="center">413</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="center">8.5</td>
						<td class="center">C/A<sup>1</sup>
						</td>
					</tr>
					<tr class="gradeC">
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td class="center">3.1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="center">3.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td class="center">3.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeU">
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td class="center">-</td>
						<td class="center">U</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</tfoot>
			</table>

			<br />


			<h3>Table without DataTable Header</h3>

			<script type="text/javascript">
				jQuery(window).load(function() {
					var $table2 = jQuery("#table-2");

					// Initialize DataTable
					$table2.DataTable({
						"sDom": "tip",
						"bStateSave": false,
						"iDisplayLength": 8,
						"aoColumns": [{
								"bSortable": false
							},
							null,
							null,
							null,
							null
						],
						"bStateSave": true
					});

					// Highlighted rows
					$table2.find("tbody input[type=checkbox]").each(function(i, el) {
						var $this = $(el),
							$p = $this.closest('tr');

						$(el).on('change', function() {
							var is_checked = $this.is(':checked');

							$p[is_checked ? 'addClass' : 'removeClass']('highlight');
						});
					});

					// Replace Checboxes
					$table2.find(".pagination a").click(function(ev) {
						replaceCheckboxes();
					});
				});

				// Sample Function to add new row
				var giCount = 1;

				function fnClickAddRow() {
					jQuery('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount + ".1", giCount + ".2", giCount + ".3", giCount + ".4"]);
					replaceCheckboxes(); // because there is checkbox, replace it
					giCount++;
				}
			</script>

			<table class="table table-bordered table-striped datatable" id="table-2">
				<thead>
					<tr>
						<th>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</th>
						<th>Student Name</th>
						<th>Average Grade</th>
						<th>Curriculum / Occupation</th>
						<th>Actions</th>
					</tr>
				</thead>

				<tbody>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Ellen C. Jones</td>
						<td>7.2</td>
						<td>Education and development manager</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Randy S. Smith</td>
						<td>8.7</td>
						<td>Social and human service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Jennifer J. Jefferson</td>
						<td>10</td>
						<td>Maxillofacial surgeon</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Carl D. Kaya</td>
						<td>9.5</td>
						<td>Express Merchant Service</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>Lillian J. Earl</td>
						<td>7.6</td>
						<td>Social and human service assistant</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

					<tr>
						<td>
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-1">
							</div>
						</td>
						<td>April L. Baker <span class="label label-success">New Applicant</span></td>
						<td>6.8</td>
						<td>Set and exhibit designer</td>
						<td>
							<a href="#" class="btn btn-default btn-sm btn-icon icon-left">
								<i class="entypo-pencil"></i>
								Edit
							</a>

							<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
								<i class="entypo-cancel"></i>
								Delete
							</a>

							<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
								<i class="entypo-info"></i>
								Profile
							</a>
						</td>
					</tr>

				</tbody>
			</table>

			<br />

			<a href="javascript: fnClickAddRow();" class="btn btn-primary">
				<i class="entypo-plus"></i>
				Add Row
			</a>



			<br />
			<br />


			<h3>Table with Column Filtering</h3>
			<br />

			<script type="text/javascript">
				jQuery(document).ready(function($) {
					var $table3 = jQuery("#table-3");

					var table3 = $table3.DataTable({
						"aLengthMenu": [
							[10, 25, 50, -1],
							[10, 25, 50, "All"]
						]
					});

					// Initalize Select Dropdown after DataTables is created
					$table3.closest('.dataTables_wrapper').find('select').select2({
						minimumResultsForSearch: -1
					});

					// Setup - add a text input to each footer cell
					$('#table-3 tfoot th').each(function() {
						var title = $('#table-3 thead th').eq($(this).index()).text();
						$(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
					});

					// Apply the search
					table3.columns().every(function() {
						var that = this;

						$('input', this.footer()).on('keyup change', function() {
							if (that.search() !== this.value) {
								that
									.search(this.value)
									.draw();
							}
						});
					});
				});
			</script>

			<table class="table table-bordered datatable" id="table-3">
				<thead>
					<tr class="replace-inputs">
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td class="center">4</td>
						<td class="center">X</td>
					</tr>
					<tr class="even gradeC">
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td class="center">5</td>
						<td class="center">C</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td class="center">5.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td class="center">7</td>
						<td class="center">A</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="center">1.9</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.2</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.4</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.6</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td class="center">125.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="center">312.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td class="center">419.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="center">522.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td class="center">420</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td class="center">420.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="center">413</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="center">8.5</td>
						<td class="center">C/A<sup>1</sup>
						</td>
					</tr>
					<tr class="gradeC">
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td class="center">3.1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="center">3.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td class="center">3.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeU">
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td class="center">-</td>
						<td class="center">U</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</tfoot>
			</table>

			<br />


			<h3>Exporting Table Data</h3>
			<br />

			<script type="text/javascript">
				jQuery(document).ready(function($) {
					var $table4 = jQuery("#table-4");

					$table4.DataTable({
						dom: 'Bfrtip',
						buttons: [
							'copyHtml5',
							'excelHtml5',
							'csvHtml5',
							'pdfHtml5'
						]
					});
				});
			</script>

			<table class="table table-bordered datatable" id="table-4">
				<thead>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</thead>
				<tbody>
					<tr class="odd gradeX">
						<td>Trident</td>
						<td>Internet Explorer 4.0</td>
						<td>Win 95+</td>
						<td class="center">4</td>
						<td class="center">X</td>
					</tr>
					<tr class="even gradeC">
						<td>Trident</td>
						<td>Internet Explorer 5.0</td>
						<td>Win 95+</td>
						<td class="center">5</td>
						<td class="center">C</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td>Internet Explorer 5.5</td>
						<td>Win 95+</td>
						<td class="center">5.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>Internet Explorer 6</td>
						<td>Win 98+</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<tr class="odd gradeA">
						<td>Trident</td>
						<td>Internet Explorer 7</td>
						<td>Win XP SP2+</td>
						<td class="center">7</td>
						<td class="center">A</td>
					</tr>
					<tr class="even gradeA">
						<td>Trident</td>
						<td>AOL browser (AOL desktop)</td>
						<td>Win XP</td>
						<td class="center">6</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 1.5</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 2.0</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Firefox 3.0</td>
						<td>Win 2k+ / OSX.3+</td>
						<td class="center">1.9</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.0</td>
						<td>OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Camino 1.5</td>
						<td>OSX.3+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape 7.2</td>
						<td>Win 95+ / Mac OS 8.6-9.2</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Browser 8</td>
						<td>Win 98SE+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Netscape Navigator 9</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.1</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.2</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.2</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.3</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.4</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.4</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.5</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.6</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">1.6</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.7</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.7</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Mozilla 1.8</td>
						<td>Win 98+ / OSX.1+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Seamonkey 1.1</td>
						<td>Win 98+ / OSX.2+</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Gecko</td>
						<td>Epiphany 2.20</td>
						<td>Gnome</td>
						<td class="center">1.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.2</td>
						<td>OSX.3</td>
						<td class="center">125.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 1.3</td>
						<td>OSX.3</td>
						<td class="center">312.8</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 2.0</td>
						<td>OSX.4+</td>
						<td class="center">419.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>Safari 3.0</td>
						<td>OSX.4+</td>
						<td class="center">522.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>OmniWeb 5.5</td>
						<td>OSX.4+</td>
						<td class="center">420</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>iPod Touch / iPhone</td>
						<td>iPod</td>
						<td class="center">420.1</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Webkit</td>
						<td>S60</td>
						<td>S60</td>
						<td class="center">413</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.0</td>
						<td>Win 95+ / OSX.1+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 7.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.0</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 8.5</td>
						<td>Win 95+ / OSX.2+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.0</td>
						<td>Win 95+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.2</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera 9.5</td>
						<td>Win 88+ / OSX.3+</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Opera for Wii</td>
						<td>Wii</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nokia N800</td>
						<td>N800</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>Presto</td>
						<td>Nintendo DS browser</td>
						<td>Nintendo DS</td>
						<td class="center">8.5</td>
						<td class="center">C/A<sup>1</sup>
						</td>
					</tr>
					<tr class="gradeC">
						<td>KHTML</td>
						<td>Konqureror 3.1</td>
						<td>KDE 3.1</td>
						<td class="center">3.1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.3</td>
						<td>KDE 3.3</td>
						<td class="center">3.3</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeA">
						<td>KHTML</td>
						<td>Konqureror 3.5</td>
						<td>KDE 3.5</td>
						<td class="center">3.5</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeX">
						<td>Tasman</td>
						<td>Internet Explorer 4.5</td>
						<td>Mac OS 8-9</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.1</td>
						<td>Mac OS 7.6-9</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeC">
						<td>Tasman</td>
						<td>Internet Explorer 5.2</td>
						<td>Mac OS 8-X</td>
						<td class="center">1</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.1</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeA">
						<td>Misc</td>
						<td>NetFront 3.4</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">A</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Dillo 0.8</td>
						<td>Embedded devices</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Links</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeX">
						<td>Misc</td>
						<td>Lynx</td>
						<td>Text only</td>
						<td class="center">-</td>
						<td class="center">X</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>IE Mobile</td>
						<td>Windows Mobile 6</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeC">
						<td>Misc</td>
						<td>PSP browser</td>
						<td>PSP</td>
						<td class="center">-</td>
						<td class="center">C</td>
					</tr>
					<tr class="gradeU">
						<td>Other browsers</td>
						<td>All others</td>
						<td>-</td>
						<td class="center">-</td>
						<td class="center">U</td>
					</tr>
				</tbody>
				<tfoot>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</tfoot>
			</table>

			<br />
			<!-- Footer -->
			<footer class="main">

				&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

			</footer>
		</div>


		<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">

			<div class="chat-inner">


				<h2 class="chat-header">
					<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>

					<i class="entypo-users"></i>
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>


				<div class="chat-group" id="group-1">
					<strong>Favorites</strong>

					<a href="#" id="sample-user-123" data-conversation-history="#sample_history"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
				</div>


				<div class="chat-group" id="group-2">
					<strong>Work</strong>

					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#" data-conversation-history="#sample_history_2"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
				</div>


				<div class="chat-group" id="group-3">
					<strong>Social</strong>

					<a href="#"><span class="user-status is-busy"></span> <em>Velma G. Pearson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Kathleen M. Canales</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a>
				</div>

			</div>

			<!-- conversation template -->
			<div class="chat-conversation">

				<div class="conversation-header">
					<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>

					<span class="user-status"></span>
					<span class="display-name"></span>
					<small></small>
				</div>

				<ul class="conversation-body">
				</ul>

				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>

			</div>

		</div>


		<!-- Chat Histories -->
		<ul class="chat-history" id="sample_history">
			<li>
				<span class="user">Art Ramadani</span>
				<p>Are you here?</p>
				<span class="time">09:00</span>
			</li>

			<li class="opponent">
				<span class="user">Catherine J. Watkins</span>
				<p>This message is pre-queued.</p>
				<span class="time">09:25</span>
			</li>

			<li class="opponent">
				<span class="user">Catherine J. Watkins</span>
				<p>Whohoo!</p>
				<span class="time">09:26</span>
			</li>

			<li class="opponent unread">
				<span class="user">Catherine J. Watkins</span>
				<p>Do you like it?</p>
				<span class="time">09:27</span>
			</li>
		</ul>




		<!-- Chat Histories -->
		<ul class="chat-history" id="sample_history_2">
			<li class="opponent unread">
				<span class="user">Daniel A. Pena</span>
				<p>I am going out.</p>
				<span class="time">08:21</span>
			</li>

			<li class="opponent unread">
				<span class="user">Daniel A. Pena</span>
				<p>Call me when you see this message.</p>
				<span class="time">08:27</span>
			</li>
		</ul>


	</div>





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>

</html>