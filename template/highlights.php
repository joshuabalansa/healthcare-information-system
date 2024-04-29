<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | What's New</title>

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
<body class="page-body  page-fade-only" data-url="http://neon.dev">

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
				<li class="opened active has-sub">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul class="visible">
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
						<li class="active">
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
				<li class="has-sub">
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title">Tables</span>
					</a>
					<ul>
						<li>
							<a href="tables-main.html">
								<span class="title">Basic Tables</span>
							</a>
						</li>
						<li>
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

					<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>

									<a href="index.html">Dashboard</a>
							</li>
						<li class="active">

									<strong>What's New</strong>
							</li>
							</ol>

		<div class="jumbotron">
			<h1>What's new?</h1>

			<p>Here you will find the highlights about latest version of <strong>Neon</strong> theme. Learn more by scrolling down on this page. <strong>Neon</strong> contains a total number of <strong>112</strong> unique HTML files, and comes in four versions: standard, boxed, RTL and front-end version.</p>

			<p>
				<br />
				<a href="#version-highlights" class="btn btn-primary btn-lg">Current Version: <strong>v2.0</strong></a>
			</p>
		</div>


		<h2>
			<span class="label label-success">2.0</span> &nbsp; Version Highlights
		</h2>

		<ul class="version-highlights" id="version-highlights">

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-9-bootstrap-3-3-5.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Bootstrap 3.3.5 Compatible</h3>
					<p>
						This update includes the most wanted request for Neon, latest Bootstrap 3.3.5 version. That says it all.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-9-less-organized.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Better Organization of Assets</h3>
					<p>
						Less files are now organized in more intuitive and modern web development flow. So they are now moved from assets/css/ folder to assets/less/ folder which makes very easy to update styles of this theme, for example Bootstrap update, just drop latest bootstrap files to assets/less/bs-less/ folder and you are done. This was not supported before!
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-9-js-libraries-updated.png" />
					</a>
				</div>

				<div class="notes">
					<h3>JavaScripts Libraries are Updated</h3>
					<p>
						Since Neon v1.8 there were many updates for scripts used in Neon theme. There have been updated plenty of libraries worth mentioning: DataTables, Bootstrap JS, jQuery, GreenSock Animation Platform and many more (see changelog for more details). Oh also FontAwesome and Glyphicons are updated to their latest version.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-9-git-repo.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Git Repository</h3>
					<p>
						Easily know changes between Neon recent versions &ndash; 1.8 and 2.0 with our Git Repo using BitBucket.org
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-9-fixes.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Multiple Fixes &amp; More Stability</h3>
					<p>
						Responsive issues, browser incompatibility issues and other deprecated functions are now fixed and make Neon stable for every device/screen.
					</p>
				</div>
			</li>

		</ul>


		<h2>
			<span class="label label-warning">1.8</span> &nbsp; Version Highlights
		</h2>

		<ul class="version-highlights">

			<li>
				<div class="screenshot">
					<a href="extra-calendar-2.html">
						<img src="assets/images/highlights-5-1-fullcalendar.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Full Calendar 2.3</h3>
					<p>
						Newest version of Full Calendar is now implemented in Neon theme. It has almost the same API like the first version but includes more features such as internationalisation.

						<a href="extra-calendar-2.html">Try it out, click here.</a>
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-5-2-scriptscommented.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Better Inline Documentation</h3>
					<p>
						Each HTML document is correctly indented and contains information about imported resources (scripts and stylesheets) so now you will have track of what resources are included in each document.

					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-5-3-themefixes.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Bug fixes and improvements</h3>
					<p>
						This release contains many fixes and improvements like in CSS and JavaScript plugins, reported bugs are fixed, improved animation performances, indented code, plugin updates and new skins.
					</p>
				</div>
			</li>

		</ul>


		<h2>
			<span class="label label-warning">1.7</span> &nbsp; Version Highlights
		</h2>

		<ul class="version-highlights">

			<li>
				<div class="screenshot">
					<a href="layout-boxed.html">
						<img src="assets/images/highlights-4-1-boxed.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Boxed Layout</h3>
					<p>
						This version was released especially for boxed layout type. By just adding class "boxed-layout" to the body it will turn Neon to boxed mode. When you purchase neon, you will get Boxed layout files separately from the full width files.

						<a href="layout-boxed.html">Try it out, click here.</a>
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-comments.html">
						<img src="assets/images/highlights-3-1-comments.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Comments Page</h3>
					<p>
						This type of page provides UI for the commenting system in back-end. It has search, pagination, filter and edit comment form in modal. See the <a href="extra-comments.html">comments dashboard here</a>.
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-members.html">
						<img src="assets/images/highlights-3-2-members.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Members Page</h3>
					<p>
						Good looking and organized way to show your members list with image thumbnail, name and other relevant user links. See the <a href="extra-members.html">members page here</a>.
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-load-progress.html">
						<img src="assets/images/highlights-3-4-page-loading.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Page Loading Bar</h3>
					<p>
						Progress bar that indicates something is loading in the page, with full API implemented and can be used anywhere in the theme that is easy to call the JavaScript function. <a href="extra-load-progress.html">Show how it works</a>.
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-new-post.html">
						<img src="assets/images/highlights-3-2-newpost.png" />
					</a>
				</div>

				<div class="notes">
					<h3>New Post Page</h3>
					<p>
						Using already existing components we have composed an example page with UI components and created &quot;add post&quot; page. See the <a href="extra-new-post.html">add new post page here</a>.
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-settings.html">
						<img src="assets/images/highlights-3-5-settings-page.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Settings Page</h3>
					<p>
						Just like the &quot;New Post Page&quot; this is another example that combines components of Neon and shows you how to create the Settings page. See the <a href="extra-settings.html">settings page here</a>.
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-file-tree.html">
						<img src="assets/images/highlights-3-6-treeview.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Tree View</h3>
					<p>
						Parsing directory files in an easy way from your server is now available in this version of Neon, it uses PHP to retrieve the list of directories and files. To make it easier for you, we have included an example how you can retrieve directory list infos in "Event logger" field. <a href="extra-file-tree.html">See it in action</a>.
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="extra-nestable.html">
						<img src="assets/images/highlights-3-3-nestable.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Nestable List</h3>
					<p>
						This plugin gives you the ability to create lists that are managed by drag and drop, it can be used especially for menu management. See how it works <a href="extra-nestable.html">here</a>.
					</p>
				</div>
			</li>

		</ul>

		<br />
		<br />


		<h2>
			<span class="label label-warning">1.5</span> &nbsp; Version Highlights
		</h2>

		<ul class="version-highlights">

			<li>
				<div class="screenshot">
					<a href="highlights.html">
						<img src="assets/images/highlights-2-0-bootstrap.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Upgraded to Bootstrap 3.1</h3>
					<p>
						We love to keep up with latest updates. Neon is now <strong>Bootstrap 3.1</strong> compatible!
					</p>
				</div>
			</li>


			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-3-front-end.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Frontend Version</h3>
					<p>
						Now you can use Neon also on application front-end with variety of features and pages. In this version, we have created 8 front-end pages and more to come in newest version.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="index.html?rtl">
						<img src="assets/images/highlights-2-10-rtl-support.png" />
					</a>
				</div>

				<div class="notes">
					<h3>RTL Support</h3>
					<p>
						We have good news for our fellows whose primary concern is language direction, Neon now supports full "right-to-left" language direction.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="layout-right-sidebar.html">
						<img src="assets/images/highlights-2-5-right-menu.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Right Sidebar</h3>
					<p>
						By just adding <code>right-sidebar</code> class to <code>page-container</code> element you can align sidebar menu to right side. It is also supported on pages with both menus and also in collapsed mode. <a href="layout-right-sidebar.html">See how it looks</a>!
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="layout-right-sidebar-chat.html">
						<img src="assets/images/highlights-2-7-left-chat.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Left Chat</h3>
					<p>
						If you are using <strong>Right Sidebar</strong>, the chat container will automatically turn to left side and chat conversation will flip from left to right when conversation is open. <a href="layout-right-sidebar-chat.html">See it live</a>!
					</p>
				</div>
			</li>



			<li>
				<div class="screenshot">
					<a href="dashboard-3.html">
						<img src="assets/images/highlights-3-dashboard.png" />
					</a>
				</div>

				<div class="notes">
					<h3>New Dashboard Page</h3>
					<p>
						New composed page with statistics widgets, tables and panels. We introduce here the <strong>page background</strong> in this page.
					</p>
				</div>
			</li>



			<li>
				<div class="screenshot">
					<a href="index.html">
						<img src="assets/images/highlights-3-photoshop.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Extra PSD Files Included</h3>
					<p>
						New 10 PSD files are included in this version, making total 12 PSD files. These 10 PSD files are Front-end Neon.
					</p>
				</div>
			</li>

		</ul>

		<br />
		<br />


		<h2>
			<span class="label label-warning">1.1.4</span> &nbsp; Version Highlights
		</h2>

		<ul class="version-highlights">

			<li>
				<div class="screenshot">
					<a href="extra-register.html">
						<img src="assets/images/highlights-2-4-register-form.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Register &amp; Forgot Password Form</h3>
					<p>
						Extra versions of <a href="extra-login.html">Login</a> page, so now you can use these new type of pages that include <a href="extra-forgot-password.html">reset password form</a> and <a href="extra-register.html">register form</a> with steps. They both have also implemented the <strong>PHP</strong> processing via <strong>AJAX</strong> using files inside <em>data/</em> directory.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-login.html">
						<img src="assets/images/highlights-2-6-login-form.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Login Form with Validation &amp; Social Connect Buttons</h3>
					<p>
						As requested by lot of users we have improved our current login page and added the login validation to it. Also there you can include most popular Social Network connect buttons such as <strong>Facebook</strong>, <strong>Twitter</strong> and <strong>Google+</strong>.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="forms-icheck.html">
						<img src="assets/images/highlights-2-1-icheck.png" />
					</a>
				</div>

				<div class="notes">
					<h3>iCheck - Customized Checkboxes and Radio Buttons</h3>
					<p>
						Except our current checkbox and radio replace plugin, now you have the alternative to choose between the native implemented Checkbox replacemend and iCheck, which is really nice and flexible plugin. <a href="forms-icheck.html">See the checkbox options &raquo;</a>
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-search.html">
						<img src="assets/images/highlights-2-9-search-results.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Search Results</h3>
					<p>
						Search functionality of your site can use this <a href="extra-search.html">new page</a> dedicated to search and show results. Currently Neon supports two types of results displaying, <strong>title + content + link</strong> and <strong>table</strong> results.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-language-selector.html">
						<img src="assets/images/highlights-2-3-language-switcher.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Language Selector</h3>
					<p>
						If your site or application supports multilingual content, then you are able to use our language selector dropdown. Just include the implementation code (<a href="extra-language-selector.html">here</a>) to user-profile links in the header part of main content (more precisely inside <code>.user-info</code> element).
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="forms-advanced.html#spinners">
						<img src="assets/images/highlights-2-8-spinners.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Input Spinner</h3>
					<p>
						Range specified input spinner, available in variety of colors, options and sizes. The implementation code is fairly simple. See how they work here <a href="forms-advanced.html#spinners">Advanced Plugins</a>.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="forms-wysiwyg.html">
						<img src="assets/images/highlights-2-2-new-editor.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Markdown Area</h3>
					<p>
						The Markdown area allows you to write in Markdown and HTML while it generates a real-time preview. It includes a toolbar that helps you to change text appearance and add links, pictures, blockquotes and lists without having to write code. <a href="forms-wysiwyg.html">Try it</a>!
					</p>
				</div>
			</li>

		</ul>


		<br />
		<br />


		<h2>
			<span class="label label-warning">1.1.3</span> &nbsp; Version Highlights
		</h2>

		<ul class="version-highlights">

			<li>
				<div class="screenshot">
					<a href="skin-black.html">
						<img src="assets/images/highlights-1-skins.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Skins</h3>
					<p>
						We have added the support for theme skins, now  you can use custom skin for your copy of <strong>Neon</strong> theme. As a start, we have included 8 new skins, which you can also try:
						<a href="skin-blue.html"><strong>Blue</strong></a>,
						<a href="skin-red.html"><strong>Red</strong></a>,
						<a href="skin-green.html"><strong>Green</strong></a>,
						<a href="skin-purple.html"><strong>Purple</strong></a>,
						<a href="skin-yellow.html"><strong>Yellow</strong></a>,
						<a href="skin-cafe.html"><strong>Cafe</strong></a>,
						<a href="skin-black.html"><strong>Black</strong></a> and
						<a href="skin-white.html"><strong>White</strong></a>.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-profile.html">
						<img src="assets/images/highlights-2-profile.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Profile Page</h3>
					<p>A new modern way of displaying a profile info and user timeline inspired from most popular social networks. On this page you have profile header, profile tabs, status form, and three types of stories: <strong>status update</strong>, <strong>check in</strong> and <strong>photos</strong>.</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-notes.html">
						<img src="assets/images/highlights-3-notes.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Notes</h3>
					<p>
						You can use this type of page to offer <strong>User Personal Notes</strong> functionality.
						It has built-in JavaScript interface which allows you to insert, edit and delete notes. See <strong>assets/js/neon-notes.js</strong> to learn more or extend the functionality of this page.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="tables-datatable.html">
						<img src="assets/images/highlights-4-datatables.png" />
					</a>
				</div>

				<div class="notes">
					<h3>DataTables</h3>
					<p>With the requests of our customers we have extended Data Tables by providing more examples with custom plugins, that will allow you to create advanced tables features such as: <strong>Column Filter</strong>, <strong>Data Exporting</strong> and <strong>Responsive Tables</strong>. We have also included basic responsive table on <a href="tables-main.html">this page</a> (the last table).</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="dashboard-2.html">
						<img src="assets/images/highlights-5-profile_left.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Sidebar User Thumbnail</h3>
					<p>
						Display user profile right below of sidebar logo image. This feature also supports pop-up links related to user profile which is accessible when user clicks on the user thumbnail or name. <a href="dashboard-2.html">See it in action &raquo;</a>
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-timeline.html">
						<img src="assets/images/highlights-8-timeline.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Timelines</h3>
					<p>
						We have provided two types of Timelines on this update, <strong>vertical left aligned</strong> and <strong>vertical centered timeline</strong>. These are common types of timelines but they have different markup compared to each other. Try them: <a href="extra-timeline.html"><strong>Left Timeline</strong></a> and <a href="extra-timeline-centered.html"><strong>Centered Timeline</strong></a>.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-gallery.html">
						<img src="assets/images/highlights-7-gallery.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Gallery</h3>
					<p>
						New and complete gallery elements are now available on <strong>Neon</strong>. We have added <strong>Albums</strong> and <strong>Single album</strong> pages with <em>editing (cropping)</em>, <em>deleting</em>, <em>uploading</em> and <em>filtering</em> features. See them in action: <a href="extra-gallery.html"><strong>Albums</strong></a> and <a href="extra-gallery-single.html"><strong>Single Album</strong></a>.
					</p>
				</div>
			</li>

			<li>
				<div class="screenshot">
					<a href="extra-image-crop.html">
						<img src="assets/images/highlights-6-crop.png" />
					</a>
				</div>

				<div class="notes">
					<h3>Image Crop</h3>
					<p>
						Easily crop images with Jcrop plugin which offers lot of options for image manipulation (cropping). We have included four examples how it can be used: <strong>Simple Example</strong>, <strong>Event Handling</strong>, <strong>Thumbnail Generator</strong> and <strong>Live Crop (using PHP)</strong>.
					</p>
				</div>
			</li>

		</ul>

		<br />

		<h2>Textual Changelog</h2>
		<br />

		<pre>*** Neon Theme - Changelog ***

		- Nov 05, 2015 v 2.0

		IMPORTANT FIX: Compatibility with Safari 9.x on El Capitan and iOS9 added

		ADDED: Bootstrap 3.3.5 Support
		ADDED: Better organized less files, moved to assets/less/ folder.
		ADDED: Favicon.ico added in header of each file
		ADDED: Retina ready images added to whole pages
		ADDED: Git repository changes

		UPDATE: Bootstrap updated to v3.3.5
		UPDATE: jQuery updated to latest version v1.11.3
		UPDATE: DataTables updated to v1.10.9
		UPDATE: GSAP Animation Library updated to latest version v1.18.0
		UPDATE: HTML5shiv updated to latest version v3.7.2
		UPDATE: moment.js library updated to latest version v2.10.6
		UPDATE: jQuery Validate library updated to v1.14.0
		UPDATE: jQuery Knobs library updated to v1.2.11
		UPDATE: FontAwesome updated to v4.4
		UPDATE: Input Mask updated v3.2.2

		FIX: Top menu in mobile devices
		FIX: Neon Chat API issues with its own API
		FIX: Menu break on different viewports (mostly on iPad)
		FIX: Menu items that have submenus now have "has-sub" class
		FIX: Tile boxes in dashboard not aligned properly in mobile screens
		FIX: Reported responsive issues on all pages
		FIX: Forgot password form not allowing two (or more) dots after @ character



		- Jan 10, 2015 v 1.9

		FIX: Fixed Sidebar menu in smartphones not showing properly


		- Dec 10, 2014 v 1.8

		ADDED: FullCalendar version 2.3.2 (extra-calendar-2.html)
		ADDED: Detailed comments which scripts are included in pages (screenshot: http://cl.ly/YtEX)
		ADDED: New skin added (skins-facebook.html)

		FIX: Cleaner HTML content and correctly indented with tabs
		FIX: Rebuild of core layout with pure CSS, doesn't need the JS to set the height anymore
		FIX: When using fixed sidebar the browser outline is removed
		FIX: Horizontal menu not showing properly in fixed mode (perspective issues)
		FIX: Improved animation performances
		FIX: Overall theme polishing (CSS + JavaScript)

		UPDATE: Updated scripts: Select2 (3.4.5 -> 3.5.2), jQuery Validate (1.11.1 -> 1.13.1), jQuery Transit (0.9.9 -> 0.9.12)


		- May 19, 2014 v 1.7.2

		FIX: Datepicker in Dropdown Modal now its visible on the layer


		- Mar 28, 2014 v 1.7.1

		FIX: Fixed sidebar issue window height


		- Mar 28, 2014 v 1.7

		ADDED: Boxed Layout support
		ADDED: Members page (extra-members.html)
		ADDED: Comments page (extra-comments.html)
		ADDED: New post page (extra-new-post.html)
		ADDED: Settings page (extra-settings.html)
		ADDED: Nested list plugin (extra-nestable.html)
		ADDED: File tree plugin (extra-file-tree.html)
		ADDED: Progress indicator (extra-load-progress.html)
		ADDED: New front-end mobile menu

		FIX: Better organized assets files


		- Mar 25, 2014 v 1.6

		ADDED: Tabs in XS mode will display icons instead of text (ui-tabs-accordions.html)

		FIX: Group tile with stats now its properly aligned, Firefox background tiles that are pushed little lower (ui-tiles.html)
		FIX: When opening modals will not bounce the page content container (ui-modals.html)
		FIX: (CSS) IE fixes
		FIX: RTL logo on Navbar
		FIX: Front-end carousel issue in Safari
		FIX: $.noConflict() - Neon will no longer have issues with this declaration
		FIX: (CSS) DataTable width when sidebar is collapsed/expanded
		FIX: (CSS) DataTable Rows per page broken width
		FIX: Modals not opening in firefox (ui-modals.html)

		ADDED: Tabs will have icons in responsive (XS-mode, file: ui-tabs-accordions.html)


		- Feb 13, 2014 v 1.5.1

		FIX: Fixed CSS Issues
		FIX: Data folder missing


		- Feb 12, 2014 v 1.5.0

		ADDED: Front-end Interface
		ADDED: Neon is now upgraded to Bootstrap 3.1
		ADDED: Full RTL Support
		ADDED: Sidebar position on the right (+Chat left)
		ADDED: CSS files are now separated into groups for to decrease load size
		ADDED: 10 new PSD files
		ADDED: New Dashboard Page (dashboard-3.html)

		FIX: Firefox issues fixed


		- Jan 31, 2014 v 1.1.4

		ADDED: Register form page (extra-register.html)
		ADDED: Forgot password form page (extra-forgot-password.html)
		ADDED: Login form processing with PHP (extra-login.html and data/sample-login-form.php)
		ADDED: Search Result page added (extra-search.html)
		ADDED: UIKit Markdown editor (forms-wysiwyg.html)
		ADDED: iCheck replacement for radio buttons and checkboxes (forms-icheck.html)
		ADDED: Language select bar
		ADDED: Input spinner (forms-advanced.html)
		ADDED: Alternative Social networks login buttons on Login page (extra-login.html)

		FIX: Time picker in popup not showing the time popup selector
		FIX: Sidebar issue "Flash of unstyle content"
		FIX: Fixed Sidebar page, collapsed sidebar menu hover don't work
		FIX: Fixed lot of reported CSS incosistencies
		FIX: Fixed collapsing effect with tables as panel body
		FIX: Chat conversation, auto-close when collapsing chat container

		UPDATE:  jQuery updated to latest public version


		- Jan 9, 2014 v 1.1.3

		ADDED: Theme Skins are now supported! Available skins: Blue, Red, Green, Purple, Black, White, Yellow, Cafe
		ADDED: DataTables examples: Filtering Columns, Data Exporting, Responsive Data Tables
		ADDED: Image Crop plugin is now added - See extra-image-crop.html
		ADDED: 3 PSD files are included in extra/ folder


		- Jan 6, 2014 v 1.1.2

		ADDED: Profile Page added (extra-profile.html)
		ADDED: Timeline - vertical left aligned (extra-timeline.html)
		ADDED: Responsive tables (tables-main.html)

		FIX: Charts page will not render properly the profile notification tooltips.
		FIX: Improved Retina Support for logos and images


		- Jan 5, 2014 v 1.1.1

		ADDED: Gallery Albums Page (extra-gallery.html)
		ADDED: Gallery Album Single Page (extra-gallery-single.html)


		- Jan 3, 2014 v 1.1.0

		ADDED: User Info on Sidebar + Popup Menu
		ADDED: Notes Page functionality added on extra-notes.html - You can save notes. Handle file assets/js/neon-notes.js

		FIX: WYSIHTML5 editor - text colors now are applied properly. Attribute [data-stylesheet-url] solves this.
		FIX: Sliders (forms-sliders.html) are now compatible with Touch Devices.


		- Jan 1, 2014 v 1.0.2

		FIX: Calendar Week and Day Agenda not styled properly


		- Dec 22, 2013	v 1.0.1

		FIX: Overall fixes and improvements
		FIX: Fail-safe page transitions are added.
		ADDED: Modals are now shown in better way (ui-modals.html)
		ADDED: Dropzone now shows info for uploaded files (forms-file-upload.html)


		- Dec 20, 2015 v 1.0 -

		First Release
		P.S: Great things soon to come =)</pre>
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




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>