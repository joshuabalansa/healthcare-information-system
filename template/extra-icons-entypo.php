<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | Entypo</title>

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
								<li class="active">
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
					<h1>Entypo Icon Set</h1>

		<em>Entypo is a set of 250+ carefully crafted pictograms. All released for free under the Creative Commons license CC BY-SA.</em>

		<div class="row">
			<div class="col-md-3">
				<div id="toc"></div>
			</div>

			<div class="col-md-9">

				<div class="tocify-content">


					<section id="social">
						<h2>Main Icons</h2>

						<div class="row showcase-icon-list">

							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-note"></i> entypo-note</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-logo-db"></i> entypo-logo-db</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-music"></i> entypo-music</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-search"></i> entypo-search</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flashlight"></i> entypo-flashlight</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-mail"></i> entypo-mail</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-heart"></i> entypo-heart</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-heart-empty"></i> entypo-heart-empty</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-star"></i> entypo-star</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-star-empty"></i> entypo-star-empty</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-user"></i> entypo-user</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-users"></i> entypo-users</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-user-add"></i> entypo-user-add</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-video"></i> entypo-video</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-picture"></i> entypo-picture</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-camera"></i> entypo-camera</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-layout"></i> entypo-layout</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-menu"></i> entypo-menu</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-check"></i> entypo-check</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cancel"></i> entypo-cancel</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cancel-circled"></i> entypo-cancel-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cancel-squared"></i> entypo-cancel-squared</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-plus"></i> entypo-plus</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-plus-circled"></i> entypo-plus-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-plus-squared"></i> entypo-plus-squared</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-minus"></i> entypo-minus</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-minus-circled"></i> entypo-minus-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-minus-squared"></i> entypo-minus-squared</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-help"></i> entypo-help</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-help-circled"></i> entypo-help-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-info"></i> entypo-info</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-info-circled"></i> entypo-info-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-back"></i> entypo-back</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-home"></i> entypo-home</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-link"></i> entypo-link</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-attach"></i> entypo-attach</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-lock"></i> entypo-lock</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-lock-open"></i> entypo-lock-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-eye"></i> entypo-eye</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-tag"></i> entypo-tag</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-bookmark"></i> entypo-bookmark</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-bookmarks"></i> entypo-bookmarks</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flag"></i> entypo-flag</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-thumbs-up"></i> entypo-thumbs-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-thumbs-down"></i> entypo-thumbs-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-download"></i> entypo-download</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-upload"></i> entypo-upload</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-upload-cloud"></i> entypo-upload-cloud</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-reply"></i> entypo-reply</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-reply-all"></i> entypo-reply-all</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-forward"></i> entypo-forward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-quote"></i> entypo-quote</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-code"></i> entypo-code</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-export"></i> entypo-export</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-pencil"></i> entypo-pencil</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-feather"></i> entypo-feather</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-print"></i> entypo-print</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-retweet"></i> entypo-retweet</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-keyboard"></i> entypo-keyboard</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-comment"></i> entypo-comment</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-chat"></i> entypo-chat</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-bell"></i> entypo-bell</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-attention"></i> entypo-attention</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-alert"></i> entypo-alert</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-vcard"></i> entypo-vcard</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-address"></i> entypo-address</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-location"></i> entypo-location</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-map"></i> entypo-map</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-direction"></i> entypo-direction</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-compass"></i> entypo-compass</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cup"></i> entypo-cup</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-trash"></i> entypo-trash</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-doc"></i> entypo-doc</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-docs"></i> entypo-docs</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-doc-landscape"></i> entypo-doc-landscape</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-doc-text"></i> entypo-doc-text</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-doc-text-inv"></i> entypo-doc-text-inv</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-newspaper"></i> entypo-newspaper</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-book-open"></i> entypo-book-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-book"></i> entypo-book</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-folder"></i> entypo-folder</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-archive"></i> entypo-archive</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-box"></i> entypo-box</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-rss"></i> entypo-rss</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-phone"></i> entypo-phone</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cog"></i> entypo-cog</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-tools"></i> entypo-tools</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-share"></i> entypo-share</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-shareable"></i> entypo-shareable</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-basket"></i> entypo-basket</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-bag"></i> entypo-bag</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-calendar"></i> entypo-calendar</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-login"></i> entypo-login</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-logout"></i> entypo-logout</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-mic"></i> entypo-mic</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-mute"></i> entypo-mute</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-sound"></i> entypo-sound</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-volume"></i> entypo-volume</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-clock"></i> entypo-clock</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-hourglass"></i> entypo-hourglass</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-lamp"></i> entypo-lamp</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-light-down"></i> entypo-light-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-light-up"></i> entypo-light-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-adjust"></i> entypo-adjust</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-block"></i> entypo-block</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-resize-full"></i> entypo-resize-full</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-resize-small"></i> entypo-resize-small</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-popup"></i> entypo-popup</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-publish"></i> entypo-publish</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-window"></i> entypo-window</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-arrow-combo"></i> entypo-arrow-combo</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-circled"></i> entypo-down-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-circled"></i> entypo-left-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-circled"></i> entypo-right-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-circled"></i> entypo-up-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-open"></i> entypo-down-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-open"></i> entypo-left-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-open"></i> entypo-right-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-open"></i> entypo-up-open</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-open-mini"></i> entypo-down-open-mini</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-open-mini"></i> entypo-left-open-mini</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-open-mini"></i> entypo-right-open-mini</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-open-mini"></i> entypo-up-open-mini</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-open-big"></i> entypo-down-open-big</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-open-big"></i> entypo-left-open-big</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-open-big"></i> entypo-right-open-big</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-open-big"></i> entypo-up-open-big</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down"></i> entypo-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left"></i> entypo-left</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right"></i> entypo-right</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up"></i> entypo-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-dir"></i> entypo-down-dir</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-dir"></i> entypo-left-dir</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-dir"></i> entypo-right-dir</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-dir"></i> entypo-up-dir</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-bold"></i> entypo-down-bold</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-bold"></i> entypo-left-bold</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-bold"></i> entypo-right-bold</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-bold"></i> entypo-up-bold</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-down-thin"></i> entypo-down-thin</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-left-thin"></i> entypo-left-thin</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-right-thin"></i> entypo-right-thin</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-note-beamed"></i> entypo-note-beamed</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-ccw"></i> entypo-ccw</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cw"></i> entypo-cw</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-arrows-ccw"></i> entypo-arrows-ccw</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-level-down"></i> entypo-level-down</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-level-up"></i> entypo-level-up</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-shuffle"></i> entypo-shuffle</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-loop"></i> entypo-loop</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-switch"></i> entypo-switch</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-play"></i> entypo-play</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-stop"></i> entypo-stop</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-pause"></i> entypo-pause</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-record"></i> entypo-record</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-to-end"></i> entypo-to-end</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-to-start"></i> entypo-to-start</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-fast-forward"></i> entypo-fast-forward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-fast-backward"></i> entypo-fast-backward</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-progress-0"></i> entypo-progress-0</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-progress-1"></i> entypo-progress-1</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-progress-2"></i> entypo-progress-2</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-progress-3"></i> entypo-progress-3</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-target"></i> entypo-target</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-palette"></i> entypo-palette</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-list"></i> entypo-list</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-list-add"></i> entypo-list-add</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-signal"></i> entypo-signal</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-trophy"></i> entypo-trophy</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-battery"></i> entypo-battery</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-back-in-time"></i> entypo-back-in-time</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-monitor"></i> entypo-monitor</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-mobile"></i> entypo-mobile</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-network"></i> entypo-network</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cd"></i> entypo-cd</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-inbox"></i> entypo-inbox</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-install"></i> entypo-install</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-globe"></i> entypo-globe</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cloud"></i> entypo-cloud</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cloud-thunder"></i> entypo-cloud-thunder</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flash"></i> entypo-flash</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-moon"></i> entypo-moon</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flight"></i> entypo-flight</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-paper-plane"></i> entypo-paper-plane</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-leaf"></i> entypo-leaf</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-lifebuoy"></i> entypo-lifebuoy</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-mouse"></i> entypo-mouse</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-briefcase"></i> entypo-briefcase</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-suitcase"></i> entypo-suitcase</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-dot"></i> entypo-dot</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-dot-2"></i> entypo-dot-2</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-dot-3"></i> entypo-dot-3</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-brush"></i> entypo-brush</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-magnet"></i> entypo-magnet</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-infinity"></i> entypo-infinity</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-erase"></i> entypo-erase</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-chart-pie"></i> entypo-chart-pie</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-chart-line"></i> entypo-chart-line</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-chart-bar"></i> entypo-chart-bar</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-chart-area"></i> entypo-chart-area</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-tape"></i> entypo-tape</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-graduation-cap"></i> entypo-graduation-cap</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-language"></i> entypo-language</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-ticket"></i> entypo-ticket</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-water"></i> entypo-water</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-droplet"></i> entypo-droplet</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-air"></i> entypo-air</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-credit-card"></i> entypo-credit-card</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-floppy"></i> entypo-floppy</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-clipboard"></i> entypo-clipboard</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-megaphone"></i> entypo-megaphone</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-database"></i> entypo-database</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-drive"></i> entypo-drive</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-bucket"></i> entypo-bucket</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-thermometer"></i> entypo-thermometer</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-key"></i> entypo-key</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flow-cascade"></i> entypo-flow-cascade</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flow-branch"></i> entypo-flow-branch</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flow-tree"></i> entypo-flow-tree</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flow-line"></i> entypo-flow-line</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flow-parallel"></i> entypo-flow-parallel</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-rocket"></i> entypo-rocket</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-gauge"></i> entypo-gauge</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-traffic-cone"></i> entypo-traffic-cone</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc"></i> entypo-cc</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-by"></i> entypo-cc-by</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-nc"></i> entypo-cc-nc</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-nc-eu"></i> entypo-cc-nc-eu</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-nc-jp"></i> entypo-cc-nc-jp</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-sa"></i> entypo-cc-sa</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-nd"></i> entypo-cc-nd</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-pd"></i> entypo-cc-pd</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-zero"></i> entypo-cc-zero</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-share"></i> entypo-cc-share</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-cc-remix"></i> entypo-cc-remix</a></div>


						</div>
					</section>


					<section id="social">
						<h2>Social Icons</h2>

						<div class="row showcase-icon-list">

							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-github"></i> entypo-github</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-github-circled"></i> entypo-github-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flickr"></i> entypo-flickr</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flickr-circled"></i> entypo-flickr-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-vimeo"></i> entypo-vimeo</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-vimeo-circled"></i> entypo-vimeo-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-twitter"></i> entypo-twitter</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-twitter-circled"></i> entypo-twitter-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-facebook"></i> entypo-facebook</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-facebook-circled"></i> entypo-facebook-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-facebook-squared"></i> entypo-facebook-squared</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-gplus"></i> entypo-gplus</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-gplus-circled"></i> entypo-gplus-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-pinterest"></i> entypo-pinterest</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-pinterest-circled"></i> entypo-pinterest-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-tumblr"></i> entypo-tumblr</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-tumblr-circled"></i> entypo-tumblr-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-linkedin"></i> entypo-linkedin</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-linkedin-circled"></i> entypo-linkedin-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-dribbble"></i> entypo-dribbble</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-dribbble-circled"></i> entypo-dribbble-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-stumbleupon"></i> entypo-stumbleupon</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-stumbleupon-circled"></i> entypo-stumbleupon-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-lastfm"></i> entypo-lastfm</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-lastfm-circled"></i> entypo-lastfm-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-rdio"></i> entypo-rdio</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-rdio-circled"></i> entypo-rdio-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-spotify"></i> entypo-spotify</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-spotify-circled"></i> entypo-spotify-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-qq"></i> entypo-qq</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-instagram"></i> entypo-instagram</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-dropbox"></i> entypo-dropbox</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-evernote"></i> entypo-evernote</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-flattr"></i> entypo-flattr</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-skype"></i> entypo-skype</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-skype-circled"></i> entypo-skype-circled</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-renren"></i> entypo-renren</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-sina-weibo"></i> entypo-sina-weibo</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-paypal"></i> entypo-paypal</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-picasa"></i> entypo-picasa</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-soundcloud"></i> entypo-soundcloud</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-mixi"></i> entypo-mixi</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-behance"></i> entypo-behance</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-google-circles"></i> entypo-google-circles</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-vkontakte"></i> entypo-vkontakte</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-smashing"></i> entypo-smashing</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-sweden"></i> entypo-sweden</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-db-shape"></i> entypo-db-shape</a></div>
							<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="entypo-up-thin"></i> entypo-up-thin</a></div>

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