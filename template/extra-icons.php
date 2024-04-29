<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Neon | Extra</title>

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
				<li class="active opened active opened active has-sub">
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title">Extra</span>
						<span class="badge badge-info badge-roundless">New Items</span>
					</a>
					<ul class="visible">
						<li class="active opened active has-sub">
							<a href="extra-icons.html">
								<span class="title">Icons</span>
								<span class="badge badge-success">3</span>
							</a>
							<ul class="visible">
								<li class="active">
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

									<strong>Font Awesome</strong>
							</li>
							</ol>
					<h1>Font Awesome Icon Set</h1>

		<em>Font Awesome gives you scalable vector icons that can instantly be customized &mdash; size, color, drop shadow, and anything that can be done with the power of CSS.</em>

		<div class="row">
			<div class="col-md-3">
				<div id="toc"></div>
			</div>

			<div class="col-md-9">

				<div class="tocify-content">


					<div id="new">
					  <h2 class="page-header">66 New Icons in 4.4</h2>


					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-500px"></i> 500px</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-amazon"></i> amazon</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-balance-scale"></i> balance-scale</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-0"></i> battery-0 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-1"></i> battery-1 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-2"></i> battery-2 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-3"></i> battery-3 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-4"></i> battery-4 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-empty"></i> battery-empty</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-full"></i> battery-full</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-half"></i> battery-half</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-quarter"></i> battery-quarter</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-three-quarters"></i> battery-three-quarters</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-black-tie"></i> black-tie</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-check-o"></i> calendar-check-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-minus-o"></i> calendar-minus-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-plus-o"></i> calendar-plus-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-times-o"></i> calendar-times-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-diners-club"></i> cc-diners-club</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-jcb"></i> cc-jcb</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chrome"></i> chrome</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-clone"></i> clone</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-commenting"></i> commenting</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-commenting-o"></i> commenting-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-contao"></i> contao</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-creative-commons"></i> creative-commons</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-expeditedssl"></i> expeditedssl</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-firefox"></i> firefox</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fonticons"></i> fonticons</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-genderless"></i> genderless</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-get-pocket"></i> get-pocket</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gg"></i> gg</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gg-circle"></i> gg-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-paper-o"></i> hand-paper-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-peace-o"></i> hand-peace-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-rock-o"></i> hand-rock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-spock-o"></i> hand-spock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass"></i> hourglass</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-1"></i> hourglass-1 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-2"></i> hourglass-2 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-3"></i> hourglass-3 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-end"></i> hourglass-end</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-half"></i> hourglass-half</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-o"></i> hourglass-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-start"></i> hourglass-start</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-houzz"></i> houzz</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-i-cursor"></i> i-cursor</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-industry"></i> industry</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-internet-explorer"></i> internet-explorer</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map"></i> map</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-o"></i> map-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-pin"></i> map-pin</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-signs"></i> map-signs</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mouse-pointer"></i> mouse-pointer</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-object-group"></i> object-group</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-object-ungroup"></i> object-ungroup</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-odnoklassniki"></i> odnoklassniki</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-odnoklassniki-square"></i> odnoklassniki-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-opencart"></i> opencart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-opera"></i> opera</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-optin-monster"></i> optin-monster</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-registered"></i> registered</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-safari"></i> safari</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sticky-note"></i> sticky-note</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sticky-note-o"></i> sticky-note-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-television"></i> television</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-trademark"></i> trademark</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tripadvisor"></i> tripadvisor</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tv"></i> tv <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-vimeo"></i> vimeo</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wikipedia-w"></i> wikipedia-w</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-y-combinator"></i> y-combinator</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-yc"></i> yc <span class="text-muted">(alias)</span></a></div>

					  </div>

					</div>

					<div id="web-application">
					  <h2 class="page-header">Web Application Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-adjust"></i> adjust</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-anchor"></i> anchor</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-archive"></i> archive</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-area-chart"></i> area-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows"></i> arrows</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows-h"></i> arrows-h</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows-v"></i> arrows-v</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-asterisk"></i> asterisk</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-at"></i> at</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-balance-scale"></i> balance-scale</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ban"></i> ban</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bank"></i> bank <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bar-chart"></i> bar-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-barcode"></i> barcode</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bars"></i> bars</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-0"></i> battery-0 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-1"></i> battery-1 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-2"></i> battery-2 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-3"></i> battery-3 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-4"></i> battery-4 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-empty"></i> battery-empty</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-full"></i> battery-full</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-half"></i> battery-half</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-quarter"></i> battery-quarter</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-battery-three-quarters"></i> battery-three-quarters</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bed"></i> bed</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-beer"></i> beer</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bell"></i> bell</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bell-o"></i> bell-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bell-slash"></i> bell-slash</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bell-slash-o"></i> bell-slash-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bicycle"></i> bicycle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-binoculars"></i> binoculars</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-birthday-cake"></i> birthday-cake</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bolt"></i> bolt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bomb"></i> bomb</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-book"></i> book</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bookmark"></i> bookmark</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bookmark-o"></i> bookmark-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-briefcase"></i> briefcase</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bug"></i> bug</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-building"></i> building</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-building-o"></i> building-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bullhorn"></i> bullhorn</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bullseye"></i> bullseye</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bus"></i> bus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calculator"></i> calculator</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar"></i> calendar</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-check-o"></i> calendar-check-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-minus-o"></i> calendar-minus-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-o"></i> calendar-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-plus-o"></i> calendar-plus-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-calendar-times-o"></i> calendar-times-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-camera"></i> camera</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-camera-retro"></i> camera-retro</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-car"></i> car</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cart-arrow-down"></i> cart-arrow-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cart-plus"></i> cart-plus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc"></i> cc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-certificate"></i> certificate</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check"></i> check</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check-circle"></i> check-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check-circle-o"></i> check-circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check-square"></i> check-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check-square-o"></i> check-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-child"></i> child</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle"></i> circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle-o"></i> circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle-thin"></i> circle-thin</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-clock-o"></i> clock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-clone"></i> clone</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-close"></i> close <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cloud"></i> cloud</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cloud-download"></i> cloud-download</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cloud-upload"></i> cloud-upload</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-code"></i> code</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-code-fork"></i> code-fork</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-coffee"></i> coffee</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cog"></i> cog</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cogs"></i> cogs</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-comment"></i> comment</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-comment-o"></i> comment-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-commenting"></i> commenting</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-commenting-o"></i> commenting-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-comments"></i> comments</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-comments-o"></i> comments-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-compass"></i> compass</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-copyright"></i> copyright</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-creative-commons"></i> creative-commons</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-credit-card"></i> credit-card</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-crop"></i> crop</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-crosshairs"></i> crosshairs</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cube"></i> cube</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cubes"></i> cubes</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cutlery"></i> cutlery</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dashboard"></i> dashboard <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-database"></i> database</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-desktop"></i> desktop</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-diamond"></i> diamond</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dot-circle-o"></i> dot-circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-download"></i> download</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-edit"></i> edit <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ellipsis-h"></i> ellipsis-h</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ellipsis-v"></i> ellipsis-v</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-envelope"></i> envelope</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-envelope-o"></i> envelope-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-envelope-square"></i> envelope-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eraser"></i> eraser</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-exchange"></i> exchange</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-exclamation"></i> exclamation</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-exclamation-circle"></i> exclamation-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-exclamation-triangle"></i> exclamation-triangle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-external-link"></i> external-link</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-external-link-square"></i> external-link-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eye"></i> eye</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eye-slash"></i> eye-slash</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eyedropper"></i> eyedropper</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fax"></i> fax</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-feed"></i> feed <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-female"></i> female</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fighter-jet"></i> fighter-jet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-archive-o"></i> file-archive-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-audio-o"></i> file-audio-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-code-o"></i> file-code-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-excel-o"></i> file-excel-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-image-o"></i> file-image-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-video-o"></i> file-video-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-word-o"></i> file-word-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-film"></i> film</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-filter"></i> filter</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fire"></i> fire</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fire-extinguisher"></i> fire-extinguisher</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-flag"></i> flag</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-flag-checkered"></i> flag-checkered</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-flag-o"></i> flag-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-flash"></i> flash <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-flask"></i> flask</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-folder"></i> folder</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-folder-o"></i> folder-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-folder-open"></i> folder-open</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-folder-open-o"></i> folder-open-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-frown-o"></i> frown-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-futbol-o"></i> futbol-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gamepad"></i> gamepad</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gavel"></i> gavel</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gears"></i> gears <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gift"></i> gift</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-glass"></i> glass</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-globe"></i> globe</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-graduation-cap"></i> graduation-cap</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-group"></i> group <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-paper-o"></i> hand-paper-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-peace-o"></i> hand-peace-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-rock-o"></i> hand-rock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-spock-o"></i> hand-spock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hdd-o"></i> hdd-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-headphones"></i> headphones</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-heart"></i> heart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-heart-o"></i> heart-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-heartbeat"></i> heartbeat</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-history"></i> history</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-home"></i> home</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hotel"></i> hotel <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass"></i> hourglass</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-1"></i> hourglass-1 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-2"></i> hourglass-2 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-3"></i> hourglass-3 <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-end"></i> hourglass-end</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-half"></i> hourglass-half</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-o"></i> hourglass-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hourglass-start"></i> hourglass-start</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-i-cursor"></i> i-cursor</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-image"></i> image <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-inbox"></i> inbox</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-industry"></i> industry</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-info"></i> info</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-info-circle"></i> info-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-institution"></i> institution <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-key"></i> key</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-keyboard-o"></i> keyboard-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-language"></i> language</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-laptop"></i> laptop</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-leaf"></i> leaf</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-legal"></i> legal <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-lemon-o"></i> lemon-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-level-down"></i> level-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-level-up"></i> level-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-life-bouy"></i> life-bouy <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-life-buoy"></i> life-buoy <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-life-ring"></i> life-ring</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-life-saver"></i> life-saver <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-lightbulb-o"></i> lightbulb-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-line-chart"></i> line-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-location-arrow"></i> location-arrow</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-lock"></i> lock</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-magic"></i> magic</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-magnet"></i> magnet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mail-forward"></i> mail-forward <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mail-reply"></i> mail-reply <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mail-reply-all"></i> mail-reply-all <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-male"></i> male</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map"></i> map</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-marker"></i> map-marker</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-o"></i> map-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-pin"></i> map-pin</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-map-signs"></i> map-signs</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-meh-o"></i> meh-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-microphone"></i> microphone</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-microphone-slash"></i> microphone-slash</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-minus"></i> minus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-minus-circle"></i> minus-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-minus-square"></i> minus-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-minus-square-o"></i> minus-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mobile"></i> mobile</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mobile-phone"></i> mobile-phone <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-money"></i> money</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-moon-o"></i> moon-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mortar-board"></i> mortar-board <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-motorcycle"></i> motorcycle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mouse-pointer"></i> mouse-pointer</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-music"></i> music</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-navicon"></i> navicon <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-newspaper-o"></i> newspaper-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-object-group"></i> object-group</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-object-ungroup"></i> object-ungroup</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paint-brush"></i> paint-brush</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paper-plane"></i> paper-plane</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paper-plane-o"></i> paper-plane-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paw"></i> paw</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pencil"></i> pencil</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pencil-square"></i> pencil-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pencil-square-o"></i> pencil-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-phone"></i> phone</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-phone-square"></i> phone-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-photo"></i> photo <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-picture-o"></i> picture-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pie-chart"></i> pie-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plane"></i> plane</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plug"></i> plug</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus"></i> plus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus-circle"></i> plus-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus-square"></i> plus-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus-square-o"></i> plus-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-power-off"></i> power-off</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-print"></i> print</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-puzzle-piece"></i> puzzle-piece</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-qrcode"></i> qrcode</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-question"></i> question</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-question-circle"></i> question-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-quote-left"></i> quote-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-quote-right"></i> quote-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-random"></i> random</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-recycle"></i> recycle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-refresh"></i> refresh</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-registered"></i> registered</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-remove"></i> remove <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-reorder"></i> reorder <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-reply"></i> reply</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-reply-all"></i> reply-all</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-retweet"></i> retweet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-road"></i> road</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rocket"></i> rocket</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rss"></i> rss</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rss-square"></i> rss-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-search"></i> search</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-search-minus"></i> search-minus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-search-plus"></i> search-plus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-send"></i> send <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-send-o"></i> send-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-server"></i> server</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share"></i> share</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share-alt"></i> share-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share-alt-square"></i> share-alt-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share-square"></i> share-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share-square-o"></i> share-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-shield"></i> shield</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ship"></i> ship</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-shopping-cart"></i> shopping-cart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sign-in"></i> sign-in</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sign-out"></i> sign-out</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-signal"></i> signal</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sitemap"></i> sitemap</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sliders"></i> sliders</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-smile-o"></i> smile-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-soccer-ball-o"></i> soccer-ball-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort"></i> sort</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-alpha-asc"></i> sort-alpha-asc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-alpha-desc"></i> sort-alpha-desc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-amount-asc"></i> sort-amount-asc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-amount-desc"></i> sort-amount-desc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-asc"></i> sort-asc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-desc"></i> sort-desc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-down"></i> sort-down <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-numeric-asc"></i> sort-numeric-asc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-numeric-desc"></i> sort-numeric-desc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sort-up"></i> sort-up <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-space-shuttle"></i> space-shuttle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-spinner"></i> spinner</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-spoon"></i> spoon</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-square"></i> square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-square-o"></i> square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-star"></i> star</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-star-half"></i> star-half</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-star-half-empty"></i> star-half-empty <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-star-half-full"></i> star-half-full <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-star-half-o"></i> star-half-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-star-o"></i> star-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sticky-note"></i> sticky-note</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sticky-note-o"></i> sticky-note-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-street-view"></i> street-view</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-suitcase"></i> suitcase</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sun-o"></i> sun-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-support"></i> support <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tablet"></i> tablet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tachometer"></i> tachometer</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tag"></i> tag</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tags"></i> tags</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tasks"></i> tasks</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-taxi"></i> taxi</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-television"></i> television</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-terminal"></i> terminal</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumb-tack"></i> thumb-tack</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-down"></i> thumbs-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-up"></i> thumbs-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ticket"></i> ticket</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-times"></i> times</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-times-circle"></i> times-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-times-circle-o"></i> times-circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tint"></i> tint</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-off"></i> toggle-off</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-on"></i> toggle-on</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-trademark"></i> trademark</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-trash"></i> trash</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-trash-o"></i> trash-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tree"></i> tree</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-trophy"></i> trophy</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-truck"></i> truck</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tty"></i> tty</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tv"></i> tv <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-umbrella"></i> umbrella</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-university"></i> university</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-unlock"></i> unlock</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-unlock-alt"></i> unlock-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-unsorted"></i> unsorted <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-upload"></i> upload</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-user"></i> user</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-user-plus"></i> user-plus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-user-secret"></i> user-secret</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-user-times"></i> user-times</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-users"></i> users</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-video-camera"></i> video-camera</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-volume-down"></i> volume-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-volume-off"></i> volume-off</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-volume-up"></i> volume-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-warning"></i> warning <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wheelchair"></i> wheelchair</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wifi"></i> wifi</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wrench"></i> wrench</a></div>

					  </div>

					</div>

					<div id="hand">
					  <h2 class="page-header">Hand Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-grab-o"></i> hand-grab-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-lizard-o"></i> hand-lizard-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-down"></i> hand-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-left"></i> hand-o-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-right"></i> hand-o-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-up"></i> hand-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-paper-o"></i> hand-paper-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-peace-o"></i> hand-peace-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-pointer-o"></i> hand-pointer-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-rock-o"></i> hand-rock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-scissors-o"></i> hand-scissors-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-spock-o"></i> hand-spock-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-stop-o"></i> hand-stop-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-down"></i> thumbs-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-o-down"></i> thumbs-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-o-up"></i> thumbs-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-thumbs-up"></i> thumbs-up</a></div>

					  </div>

					</div>

					<div id="transportation">
					  <h2 class="page-header">Transportation Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ambulance"></i> ambulance</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-automobile"></i> automobile <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bicycle"></i> bicycle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bus"></i> bus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cab"></i> cab <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-car"></i> car</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fighter-jet"></i> fighter-jet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-motorcycle"></i> motorcycle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plane"></i> plane</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rocket"></i> rocket</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ship"></i> ship</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-space-shuttle"></i> space-shuttle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-subway"></i> subway</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-taxi"></i> taxi</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-train"></i> train</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-truck"></i> truck</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wheelchair"></i> wheelchair</a></div>

					  </div>

					</div>

					<div id="gender">
					  <h2 class="page-header">Gender Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-genderless"></i> genderless</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-intersex"></i> intersex <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mars"></i> mars</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mars-double"></i> mars-double</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mars-stroke"></i> mars-stroke</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mars-stroke-h"></i> mars-stroke-h</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mars-stroke-v"></i> mars-stroke-v</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-mercury"></i> mercury</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-neuter"></i> neuter</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-transgender"></i> transgender</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-transgender-alt"></i> transgender-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-venus"></i> venus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-venus-double"></i> venus-double</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-venus-mars"></i> venus-mars</a></div>

					  </div>

					</div>

					<div id="file-type">
					  <h2 class="page-header">File Type Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file"></i> file</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-archive-o"></i> file-archive-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-audio-o"></i> file-audio-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-code-o"></i> file-code-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-excel-o"></i> file-excel-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-image-o"></i> file-image-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-movie-o"></i> file-movie-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-o"></i> file-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-pdf-o"></i> file-pdf-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-photo-o"></i> file-photo-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-picture-o"></i> file-picture-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-powerpoint-o"></i> file-powerpoint-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-sound-o"></i> file-sound-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-text"></i> file-text</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-text-o"></i> file-text-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-video-o"></i> file-video-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-word-o"></i> file-word-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-zip-o"></i> file-zip-o <span class="text-muted">(alias)</span></a></div>

					  </div>

					</div>

					<div id="spinner">
					  <h2 class="page-header">Spinner Icons</h2>

					  <div class="alert alert-success">
					    <ul class="fa-ul">
					      <li>
					        <i class="fa fa-info-circle fa-lg fa-li"></i>
					        These icons work great with the <code>fa-spin</code> class. Check out the
					        <a href="#" class="alert-link">spinning icons example</a>.
					      </li>
					    </ul>
					  </div>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle-o-notch"></i> circle-o-notch</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cog"></i> cog</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gear"></i> gear <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-refresh"></i> refresh</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-spinner"></i> spinner</a></div>

					  </div>
					</div>

					<div id="form-control">
					  <h2 class="page-header">Form Control Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check-square"></i> check-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-check-square-o"></i> check-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle"></i> circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-circle-o"></i> circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dot-circle-o"></i> dot-circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-minus-square"></i> minus-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-minus-square-o"></i> minus-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus-square"></i> plus-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus-square-o"></i> plus-square-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-square"></i> square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-square-o"></i> square-o</a></div>

					  </div>
					</div>

					<div id="payment">
					  <h2 class="page-header">Payment Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-amex"></i> cc-amex</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-diners-club"></i> cc-diners-club</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-discover"></i> cc-discover</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-jcb"></i> cc-jcb</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-mastercard"></i> cc-mastercard</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-paypal"></i> cc-paypal</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-stripe"></i> cc-stripe</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-visa"></i> cc-visa</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-credit-card"></i> credit-card</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-google-wallet"></i> google-wallet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paypal"></i> paypal</a></div>

					  </div>

					</div>

					<div id="chart">
					  <h2 class="page-header">Chart Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-area-chart"></i> area-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bar-chart"></i> bar-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bar-chart-o"></i> bar-chart-o <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-line-chart"></i> line-chart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pie-chart"></i> pie-chart</a></div>

					  </div>

					</div>

					<div id="currency">
					  <h2 class="page-header">Currency Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-btc"></i> btc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cny"></i> cny <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dollar"></i> dollar <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eur"></i> eur</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-euro"></i> euro <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gbp"></i> gbp</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gg"></i> gg</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gg-circle"></i> gg-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ils"></i> ils</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-inr"></i> inr</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-jpy"></i> jpy</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-krw"></i> krw</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-money"></i> money</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rmb"></i> rmb <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rouble"></i> rouble <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rub"></i> rub</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ruble"></i> ruble <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rupee"></i> rupee <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-shekel"></i> shekel <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sheqel"></i> sheqel <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-try"></i> try</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-turkish-lira"></i> turkish-lira <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-usd"></i> usd</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-won"></i> won <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-yen"></i> yen <span class="text-muted">(alias)</span></a></div>

					  </div>

					</div>

					<div id="text-editor">
					  <h2 class="page-header">Text Editor Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-align-center"></i> align-center</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-align-justify"></i> align-justify</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-align-left"></i> align-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-align-right"></i> align-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bold"></i> bold</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chain"></i> chain <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chain-broken"></i> chain-broken</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-clipboard"></i> clipboard</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-columns"></i> columns</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-copy"></i> copy <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cut"></i> cut <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dedent"></i> dedent <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eraser"></i> eraser</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file"></i> file</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-o"></i> file-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-text"></i> file-text</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-file-text-o"></i> file-text-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-files-o"></i> files-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-floppy-o"></i> floppy-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-font"></i> font</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-header"></i> header</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-indent"></i> indent</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-italic"></i> italic</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-link"></i> link</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-list"></i> list</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-list-alt"></i> list-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-list-ol"></i> list-ol</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-list-ul"></i> list-ul</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-outdent"></i> outdent</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paperclip"></i> paperclip</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paragraph"></i> paragraph</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paste"></i> paste <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-repeat"></i> repeat</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rotate-left"></i> rotate-left <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rotate-right"></i> rotate-right <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-save"></i> save <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-scissors"></i> scissors</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-strikethrough"></i> strikethrough</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-subscript"></i> subscript</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-superscript"></i> superscript</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-table"></i> table</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-text-height"></i> text-height</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-text-width"></i> text-width</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-th"></i> th</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-th-large"></i> th-large</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-th-list"></i> th-list</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-underline"></i> underline</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-undo"></i> undo</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-unlink"></i> unlink <span class="text-muted">(alias)</span></a></div>

					  </div>

					</div>

					<div id="directional">
					  <h2 class="page-header">Directional Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-double-down"></i> angle-double-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-double-left"></i> angle-double-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-double-right"></i> angle-double-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-double-up"></i> angle-double-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-down"></i> angle-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-left"></i> angle-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-right"></i> angle-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angle-up"></i> angle-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-down"></i> arrow-circle-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-left"></i> arrow-circle-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-o-down"></i> arrow-circle-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-o-left"></i> arrow-circle-o-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-o-right"></i> arrow-circle-o-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-o-up"></i> arrow-circle-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-right"></i> arrow-circle-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-circle-up"></i> arrow-circle-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-down"></i> arrow-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-left"></i> arrow-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-right"></i> arrow-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrow-up"></i> arrow-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows"></i> arrows</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows-alt"></i> arrows-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows-h"></i> arrows-h</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows-v"></i> arrows-v</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-down"></i> caret-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-left"></i> caret-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-right"></i> caret-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-down"></i> caret-square-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-left"></i> caret-square-o-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-right"></i> caret-square-o-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-square-o-up"></i> caret-square-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-caret-up"></i> caret-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-circle-down"></i> chevron-circle-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-circle-left"></i> chevron-circle-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-circle-right"></i> chevron-circle-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-circle-up"></i> chevron-circle-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-down"></i> chevron-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-left"></i> chevron-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-right"></i> chevron-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chevron-up"></i> chevron-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-exchange"></i> exchange</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-down"></i> hand-o-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-left"></i> hand-o-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-right"></i> hand-o-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hand-o-up"></i> hand-o-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-long-arrow-down"></i> long-arrow-down</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-long-arrow-left"></i> long-arrow-left</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-long-arrow-right"></i> long-arrow-right</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-long-arrow-up"></i> long-arrow-up</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-down"></i> toggle-down <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-left"></i> toggle-left <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-right"></i> toggle-right <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-toggle-up"></i> toggle-up <span class="text-muted">(alias)</span></a></div>

					  </div>

					</div>

					<div id="video-player">
					  <h2 class="page-header">Video Player Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-arrows-alt"></i> arrows-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-backward"></i> backward</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-compress"></i> compress</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-eject"></i> eject</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-expand"></i> expand</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fast-backward"></i> fast-backward</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fast-forward"></i> fast-forward</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-forward"></i> forward</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pause"></i> pause</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-play"></i> play</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-play-circle"></i> play-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-play-circle-o"></i> play-circle-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-random"></i> random</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-step-backward"></i> step-backward</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-step-forward"></i> step-forward</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-stop"></i> stop</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-youtube-play"></i> youtube-play</a></div>

					  </div>

					</div>

					<div id="brand">
					  <h2 class="page-header">Brand Icons</h2>

					  <div class="alert alert-warning">
					    <h4><i class="fa fa-warning"></i> Warning!</h4>
					Apparently, Adblock Plus can remove Font Awesome brand icons with their "Remove Social
					Media Buttons" setting. We will not use hacks to force them to display. Please
					<a href="#" class="alert-link">report an issue with Adblock Plus</a> if you believe this to be
					an error. To work around this, you'll need to modify the social icon class names.

					  </div>

					  <div class="row showcase-icon-list margin-bottom-lg">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-500px"></i> 500px</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-adn"></i> adn</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-amazon"></i> amazon</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-android"></i> android</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-angellist"></i> angellist</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-apple"></i> apple</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-behance"></i> behance</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-behance-square"></i> behance-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bitbucket"></i> bitbucket</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bitbucket-square"></i> bitbucket-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-bitcoin"></i> bitcoin <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-black-tie"></i> black-tie</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-btc"></i> btc</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-buysellads"></i> buysellads</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-amex"></i> cc-amex</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-diners-club"></i> cc-diners-club</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-discover"></i> cc-discover</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-jcb"></i> cc-jcb</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-mastercard"></i> cc-mastercard</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-paypal"></i> cc-paypal</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-stripe"></i> cc-stripe</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-cc-visa"></i> cc-visa</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-chrome"></i> chrome</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-codepen"></i> codepen</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-connectdevelop"></i> connectdevelop</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-contao"></i> contao</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-css3"></i> css3</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dashcube"></i> dashcube</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-delicious"></i> delicious</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-deviantart"></i> deviantart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-digg"></i> digg</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dribbble"></i> dribbble</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-dropbox"></i> dropbox</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-drupal"></i> drupal</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-empire"></i> empire</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-expeditedssl"></i> expeditedssl</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-facebook"></i> facebook</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-facebook-f"></i> facebook-f <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-facebook-official"></i> facebook-official</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-facebook-square"></i> facebook-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-firefox"></i> firefox</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-flickr"></i> flickr</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-fonticons"></i> fonticons</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-forumbee"></i> forumbee</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-foursquare"></i> foursquare</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ge"></i> ge <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-get-pocket"></i> get-pocket</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gg"></i> gg</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gg-circle"></i> gg-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-git"></i> git</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-git-square"></i> git-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-github"></i> github</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-github-alt"></i> github-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-github-square"></i> github-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gittip"></i> gittip <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-google"></i> google</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-google-plus"></i> google-plus</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-google-plus-square"></i> google-plus-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-google-wallet"></i> google-wallet</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-gratipay"></i> gratipay</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hacker-news"></i> hacker-news</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-houzz"></i> houzz</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-html5"></i> html5</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-instagram"></i> instagram</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-internet-explorer"></i> internet-explorer</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ioxhost"></i> ioxhost</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-joomla"></i> joomla</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-jsfiddle"></i> jsfiddle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-lastfm"></i> lastfm</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-lastfm-square"></i> lastfm-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-leanpub"></i> leanpub</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-linkedin"></i> linkedin</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-linkedin-square"></i> linkedin-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-linux"></i> linux</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-maxcdn"></i> maxcdn</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-meanpath"></i> meanpath</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-medium"></i> medium</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-odnoklassniki"></i> odnoklassniki</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-odnoklassniki-square"></i> odnoklassniki-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-opencart"></i> opencart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-openid"></i> openid</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-opera"></i> opera</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-optin-monster"></i> optin-monster</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pagelines"></i> pagelines</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-paypal"></i> paypal</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pied-piper"></i> pied-piper</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pied-piper-alt"></i> pied-piper-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pinterest"></i> pinterest</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pinterest-p"></i> pinterest-p</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-pinterest-square"></i> pinterest-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-qq"></i> qq</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ra"></i> ra <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-rebel"></i> rebel</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-reddit"></i> reddit</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-reddit-square"></i> reddit-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-renren"></i> renren</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-safari"></i> safari</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-sellsy"></i> sellsy</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share-alt"></i> share-alt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-share-alt-square"></i> share-alt-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-shirtsinbulk"></i> shirtsinbulk</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-simplybuilt"></i> simplybuilt</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-skyatlas"></i> skyatlas</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-skype"></i> skype</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-slack"></i> slack</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-slideshare"></i> slideshare</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-soundcloud"></i> soundcloud</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-spotify"></i> spotify</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-stack-exchange"></i> stack-exchange</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-stack-overflow"></i> stack-overflow</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-steam"></i> steam</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-steam-square"></i> steam-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-stumbleupon"></i> stumbleupon</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-stumbleupon-circle"></i> stumbleupon-circle</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tencent-weibo"></i> tencent-weibo</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-trello"></i> trello</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tripadvisor"></i> tripadvisor</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tumblr"></i> tumblr</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-tumblr-square"></i> tumblr-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-twitch"></i> twitch</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-twitter"></i> twitter</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-twitter-square"></i> twitter-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-viacoin"></i> viacoin</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-vimeo"></i> vimeo</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-vimeo-square"></i> vimeo-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-vine"></i> vine</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-vk"></i> vk</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wechat"></i> wechat <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-weibo"></i> weibo</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-weixin"></i> weixin</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-whatsapp"></i> whatsapp</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wikipedia-w"></i> wikipedia-w</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-windows"></i> windows</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wordpress"></i> wordpress</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-xing"></i> xing</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-xing-square"></i> xing-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-y-combinator"></i> y-combinator</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-y-combinator-square"></i> y-combinator-square <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-yahoo"></i> yahoo</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-yc"></i> yc <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-yc-square"></i> yc-square <span class="text-muted">(alias)</span></a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-yelp"></i> yelp</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-youtube"></i> youtube</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-youtube-play"></i> youtube-play</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-youtube-square"></i> youtube-square</a></div>

					  </div>

					  <div class="alert alert-success">
					    <ul class="margin-bottom-none padding-left-lg">
					  <li>All brand icons are trademarks of their respective owners.</li>
					  <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
					</ul>

					  </div>
					</div>

					<div id="medical">
					  <h2 class="page-header">Medical Icons</h2>

					  <div class="row showcase-icon-list">


						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-ambulance"></i> ambulance</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-h-square"></i> h-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-heart"></i> heart</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-heart-o"></i> heart-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-heartbeat"></i> heartbeat</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-hospital-o"></i> hospital-o</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-medkit"></i> medkit</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-plus-square"></i> plus-square</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-stethoscope"></i> stethoscope</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-user-md"></i> user-md</a></div>
						<div class="icon-el col-md-3 col-sm-4"><a href="#"><i class="fa fa-wheelchair"></i> wheelchair</a></div>

					  </div>

					</div>

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