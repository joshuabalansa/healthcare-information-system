<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | Glyph Icons</title>

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
				<li class="opened active has-sub">
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title">Extra</span>
						<span class="badge badge-info badge-roundless">New Items</span>
					</a>
					<ul class="visible">
						<li class="opened active has-sub">
							<a href="extra-icons.html">
								<span class="title">Icons</span>
								<span class="badge badge-success">3</span>
							</a>
							<ul class="visible">
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
								<li class="active">
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
							<ol class="breadcrumb bc-3" >
								<li>
						<a href="index.html"><i class="fa-home"></i>Home</a>
					</li>
							<li>

									<a href="extra-icons.html">Extra</a>
							</li>
						<li>

									<a href="extra-icons.html">Icons</a>
							</li>
						<li class="active">

									<strong>Entypo</strong>
							</li>
							</ol>
					<h1>Glyphicons Icon Set</h1>

		<em>Includes 200 glyphs in font format from the Glyphicon Halflings set. Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you to include a link back to Glyphicons whenever possible.</em>

		<div class="row">
			<div class="col-md-3">
				<div id="toc"></div>
			</div>

			<div class="col-md-9">

				<div class="tocify-content">


					<section id="social">
						<h2>Main Icons</h2>

						<div class="row showcase-icon-list">

							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-asterisk"></i> glyphicon-asterisk</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-minus"></i> glyphicon-minus</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-cloud"></i> glyphicon-cloud</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-envelope"></i> glyphicon-envelope</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-pencil"></i> glyphicon-pencil</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-glass"></i> glyphicon-glass</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-music"></i> glyphicon-music</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-search"></i> glyphicon-search</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-heart"></i> glyphicon-heart</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-star"></i> glyphicon-star</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-star-empty"></i> glyphicon-star-empty</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-user"></i> glyphicon-user</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-film"></i> glyphicon-film</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-th-large"></i> glyphicon-th-large</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-th"></i> glyphicon-th</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-th-list"></i> glyphicon-th-list</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ok"></i> glyphicon-ok</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-remove"></i> glyphicon-remove</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-zoom-in"></i> glyphicon-zoom-in</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-zoom-out"></i> glyphicon-zoom-out</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-off"></i> glyphicon-off</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-signal"></i> glyphicon-signal</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-cog"></i> glyphicon-cog</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-trash"></i> glyphicon-trash</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-home"></i> glyphicon-home</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-file"></i> glyphicon-file</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-time"></i> glyphicon-time</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-road"></i> glyphicon-road</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-download-alt"></i> glyphicon-download-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-download"></i> glyphicon-download</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-upload"></i> glyphicon-upload</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-inbox"></i> glyphicon-inbox</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-play-circle"></i> glyphicon-play-circle</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-repeat"></i> glyphicon-repeat</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-refresh"></i> glyphicon-refresh</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-list-alt"></i> glyphicon-list-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-lock"></i> glyphicon-lock</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-flag"></i> glyphicon-flag</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-headphones"></i> glyphicon-headphones</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-volume-off"></i> glyphicon-volume-off</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-volume-down"></i> glyphicon-volume-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-volume-up"></i> glyphicon-volume-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-qrcode"></i> glyphicon-qrcode</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-barcode"></i> glyphicon-barcode</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tag"></i> glyphicon-tag</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tags"></i> glyphicon-tags</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-book"></i> glyphicon-book</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bookmark"></i> glyphicon-bookmark</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-print"></i> glyphicon-print</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-camera"></i> glyphicon-camera</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-font"></i> glyphicon-font</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bold"></i> glyphicon-bold</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-italic"></i> glyphicon-italic</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-text-height"></i> glyphicon-text-height</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-text-width"></i> glyphicon-text-width</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-align-left"></i> glyphicon-align-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-align-center"></i> glyphicon-align-center</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-align-right"></i> glyphicon-align-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-align-justify"></i> glyphicon-align-justify</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-list"></i> glyphicon-list</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-indent-left"></i> glyphicon-indent-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-indent-right"></i> glyphicon-indent-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-facetime-video"></i> glyphicon-facetime-video</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-picture"></i> glyphicon-picture</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-map-marker"></i> glyphicon-map-marker</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-adjust"></i> glyphicon-adjust</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tint"></i> glyphicon-tint</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-edit"></i> glyphicon-edit</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-share"></i> glyphicon-share</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-check"></i> glyphicon-check</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-move"></i> glyphicon-move</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-step-backward"></i> glyphicon-step-backward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-fast-backward"></i> glyphicon-fast-backward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-backward"></i> glyphicon-backward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-play"></i> glyphicon-play</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-pause"></i> glyphicon-pause</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-stop"></i> glyphicon-stop</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-forward"></i> glyphicon-forward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-fast-forward"></i> glyphicon-fast-forward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-step-forward"></i> glyphicon-step-forward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-eject"></i> glyphicon-eject</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-chevron-left"></i> glyphicon-chevron-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-chevron-right"></i> glyphicon-chevron-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-plus-sign"></i> glyphicon-plus-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-minus-sign"></i> glyphicon-minus-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-remove-sign"></i> glyphicon-remove-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ok-sign"></i> glyphicon-ok-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-question-sign"></i> glyphicon-question-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-info-sign"></i> glyphicon-info-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-screenshot"></i> glyphicon-screenshot</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-remove-circle"></i> glyphicon-remove-circle</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ok-circle"></i> glyphicon-ok-circle</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ban-circle"></i> glyphicon-ban-circle</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-arrow-left"></i> glyphicon-arrow-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-arrow-right"></i> glyphicon-arrow-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-arrow-up"></i> glyphicon-arrow-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-arrow-down"></i> glyphicon-arrow-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-share-alt"></i> glyphicon-share-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-resize-full"></i> glyphicon-resize-full</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-resize-small"></i> glyphicon-resize-small</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> glyphicon-exclamation-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-gift"></i> glyphicon-gift</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-leaf"></i> glyphicon-leaf</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-fire"></i> glyphicon-fire</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-eye-open"></i> glyphicon-eye-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-eye-close"></i> glyphicon-eye-close</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-warning-sign"></i> glyphicon-warning-sign</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-plane"></i> glyphicon-plane</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-calendar"></i> glyphicon-calendar</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-random"></i> glyphicon-random</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-comment"></i> glyphicon-comment</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-magnet"></i> glyphicon-magnet</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-chevron-up"></i> glyphicon-chevron-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-chevron-down"></i> glyphicon-chevron-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-retweet"></i> glyphicon-retweet</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-shopping-cart"></i> glyphicon-shopping-cart</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-folder-close"></i> glyphicon-folder-close</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-folder-open"></i> glyphicon-folder-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-resize-vertical"></i> glyphicon-resize-vertical</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-resize-horizontal"></i> glyphicon-resize-horizontal</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hdd"></i> glyphicon-hdd</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> glyphicon-bullhorn</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bell"></i> glyphicon-bell</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-certificate"></i> glyphicon-certificate</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-thumbs-up"></i> glyphicon-thumbs-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-thumbs-down"></i> glyphicon-thumbs-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hand-right"></i> glyphicon-hand-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hand-left"></i> glyphicon-hand-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hand-up"></i> glyphicon-hand-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hand-down"></i> glyphicon-hand-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-circle-arrow-right"></i> glyphicon-circle-arrow-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-circle-arrow-left"></i> glyphicon-circle-arrow-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-circle-arrow-up"></i> glyphicon-circle-arrow-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-circle-arrow-down"></i> glyphicon-circle-arrow-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-globe"></i> glyphicon-globe</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-wrench"></i> glyphicon-wrench</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tasks"></i> glyphicon-tasks</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-filter"></i> glyphicon-filter</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-briefcase"></i> glyphicon-briefcase</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-fullscreen"></i> glyphicon-fullscreen</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-dashboard"></i> glyphicon-dashboard</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-paperclip"></i> glyphicon-paperclip</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-heart-empty"></i> glyphicon-heart-empty</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-link"></i> glyphicon-link</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-phone"></i> glyphicon-phone</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-pushpin"></i> glyphicon-pushpin</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-usd"></i> glyphicon-usd</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-gbp"></i> glyphicon-gbp</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort"></i> glyphicon-sort</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort-by-alphabet"></i> glyphicon-sort-by-alphabet</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort-by-alphabet-alt"></i> glyphicon-sort-by-alphabet-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort-by-order"></i> glyphicon-sort-by-order</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort-by-order-alt"></i> glyphicon-sort-by-order-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort-by-attributes"></i> glyphicon-sort-by-attributes</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sort-by-attributes-alt"></i> glyphicon-sort-by-attributes-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-unchecked"></i> glyphicon-unchecked</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-expand"></i> glyphicon-expand</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-collapse-down"></i> glyphicon-collapse-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-collapse-up"></i> glyphicon-collapse-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-log-in"></i> glyphicon-log-in</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-flash"></i> glyphicon-flash</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-log-out"></i> glyphicon-log-out</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-new-window"></i> glyphicon-new-window</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-record"></i> glyphicon-record</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-save"></i> glyphicon-save</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-open"></i> glyphicon-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-saved"></i> glyphicon-saved</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-import"></i> glyphicon-import</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-export"></i> glyphicon-export</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-send"></i> glyphicon-send</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-floppy-disk"></i> glyphicon-floppy-disk</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-floppy-saved"></i> glyphicon-floppy-saved</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-floppy-remove"></i> glyphicon-floppy-remove</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-floppy-save"></i> glyphicon-floppy-save</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-floppy-open"></i> glyphicon-floppy-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-credit-card"></i> glyphicon-credit-card</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-transfer"></i> glyphicon-transfer</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-cutlery"></i> glyphicon-cutlery</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-header"></i> glyphicon-header</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-compressed"></i> glyphicon-compressed</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-earphone"></i> glyphicon-earphone</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-phone-alt"></i> glyphicon-phone-alt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tower"></i> glyphicon-tower</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-stats"></i> glyphicon-stats</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sd-video"></i> glyphicon-sd-video</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hd-video"></i> glyphicon-hd-video</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-subtitles"></i> glyphicon-subtitles</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sound-stereo"></i> glyphicon-sound-stereo</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sound-dolby"></i> glyphicon-sound-dolby</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sound-5-1"></i> glyphicon-sound-5-1</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sound-6-1"></i> glyphicon-sound-6-1</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sound-7-1"></i> glyphicon-sound-7-1</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-copyright-mark"></i> glyphicon-copyright-mark</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-registration-mark"></i> glyphicon-registration-mark</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-cloud-download"></i> glyphicon-cloud-download</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-cloud-upload"></i> glyphicon-cloud-upload</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tree-conifer"></i> glyphicon-tree-conifer</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tree-deciduous"></i> glyphicon-tree-deciduous</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-cd"></i> glyphicon-cd</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-save-file"></i> glyphicon-save-file</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-open-file"></i> glyphicon-open-file</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-level-up"></i> glyphicon-level-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-copy"></i> glyphicon-copy</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-paste"></i> glyphicon-paste</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-alert"></i> glyphicon-alert</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-equalizer"></i> glyphicon-equalizer</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-king"></i> glyphicon-king</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-queen"></i> glyphicon-queen</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-pawn"></i> glyphicon-pawn</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bishop"></i> glyphicon-bishop</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-knight"></i> glyphicon-knight</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-baby-formula"></i> glyphicon-baby-formula</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-tent"></i> glyphicon-tent</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-blackboard"></i> glyphicon-blackboard</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bed"></i> glyphicon-bed</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-apple"></i> glyphicon-apple</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-erase"></i> glyphicon-erase</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-hourglass"></i> glyphicon-hourglass</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-lamp"></i> glyphicon-lamp</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-duplicate"></i> glyphicon-duplicate</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-piggy-bank"></i> glyphicon-piggy-bank</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-scissors"></i> glyphicon-scissors</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-bitcoin"></i> glyphicon-bitcoin</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-btc"></i> glyphicon-btc</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-xbt"></i> glyphicon-xbt</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-yen"></i> glyphicon-yen</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-jpy"></i> glyphicon-jpy</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ruble"></i> glyphicon-ruble</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-rub"></i> glyphicon-rub</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-scale"></i> glyphicon-scale</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ice-lolly"></i> glyphicon-ice-lolly</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-ice-lolly-tasted"></i> glyphicon-ice-lolly-tasted</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-education"></i> glyphicon-education</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> glyphicon-option-horizontal</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-option-vertical"></i> glyphicon-option-vertical</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> glyphicon-menu-hamburger</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-modal-window"></i> glyphicon-modal-window</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-oil"></i> glyphicon-oil</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-grain"></i> glyphicon-grain</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-sunglasses"></i> glyphicon-sunglasses</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-text-size"></i> glyphicon-text-size</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-text-color"></i> glyphicon-text-color</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-text-background"></i> glyphicon-text-background</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-object-align-top"></i> glyphicon-object-align-top</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-object-align-bottom"></i> glyphicon-object-align-bottom</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-object-align-horizontal"></i> glyphicon-object-align-horizontal</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-object-align-left"></i> glyphicon-object-align-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-object-align-vertical"></i> glyphicon-object-align-vertical</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-object-align-right"></i> glyphicon-object-align-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-triangle-right"></i> glyphicon-triangle-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-triangle-left"></i> glyphicon-triangle-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-triangle-bottom"></i> glyphicon-triangle-bottom</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-triangle-top"></i> glyphicon-triangle-top</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-console"></i> glyphicon-console</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-superscript"></i> glyphicon-superscript</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-subscript"></i> glyphicon-subscript</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-menu-left"></i> glyphicon-menu-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-menu-right"></i> glyphicon-menu-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-menu-down"></i> glyphicon-menu-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="glyphicon glyphicon-menu-up"></i> glyphicon-menu-up</a></div>

						</div>
					</section>


				</div>

			</div>
		</div>


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
	<link rel="stylesheet" href="assets/css/font-icons/font-awesome/css/font-awesome.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/tocify/jquery.tocify.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>