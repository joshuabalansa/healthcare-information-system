<style>
	* {
		transition: none !important;
	}

	a {
		transition: none !important;
	}

	.no-transition {
		transition: none !important;
	}

	#no-transition-element {
		transition: none !important;
	}
</style>
<!--  -->
<link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
<link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">

<link rel="stylesheet" href="../assets/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/neon-core.css">
<link rel="stylesheet" href="../assets/css/neon-theme.css">
<link rel="stylesheet" href="../assets/css/neon-forms.css">
<link rel="stylesheet" href="../assets/css/custom.css">
<script src="../assets/js/jquery-1.11.3.min.js"></script>

<!-- Imported styles on this page -->
<link rel="stylesheet" href="../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="../assets/js/rickshaw/rickshaw.min.css">

<!-- Bottom scripts (common) -->
<script src="../assets/js/gsap/TweenMax.min.js"></script>
<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="../assets/js/bootstrap.js"></script>
<script src="../assets/js/joinable.js"></script>
<script src="../assets/js/resizeable.js"></script>
<script src="../assets/js/neon-api.js"></script>
<script src="../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


<!-- Imported scripts on this page -->
<script src="../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
<script src="../assets/js/jquery.sparkline.min.js"></script>
<script src="../assets/js/rickshaw/vendor/d3.v3.js"></script>
<script src="../assets/js/rickshaw/rickshaw.min.js"></script>
<script src="../assets/js/raphael-min.js"></script>
<script src="../assets/js/morris.min.js"></script>
<script src="../assets/js/toastr.js"></script>
<script src="../assets/js/neon-chat.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="../assets/js/neon-custom.js"></script>


<!-- Demo Settings -->
<script src="../assets/js/neon-demo.js"></script>

<link rel="stylesheet" href="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
<link rel="stylesheet" href="../../assets/js/rickshaw/rickshaw.min.css">

<!-- Bottom scripts (common) -->
<script src="../../assets/js/gsap/TweenMax.min.js"></script>
<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/joinable.js"></script>
<script src="../../assets/js/resizeable.js"></script>
<script src="../../assets/js/neon-api.js"></script>
<script src="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


<!-- Imported scripts on this page -->
<script src="../../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
<script src="../../assets/js/jquery.sparkline.min.js"></script>
<script src="../../assets/js/rickshaw/vendor/d3.v3.js"></script>
<script src="../../assets/js/rickshaw/rickshaw.min.js"></script>
<script src="../../assets/js/raphael-min.js"></script>
<script src="../../assets/js/morris.min.js"></script>
<script src="../../assets/js/toastr.js"></script>
<script src="../../assets/js/neon-chat.js"></script>


<!-- JavaScripts initializations and stuff -->
<script src="../../assets/js/neon-custom.js"></script>


<!-- Demo Settings -->
<script src="../../assets/js/neon-demo.js"></script>

<!-- Imported styles on this page -->
<link rel="stylesheet" href="../../assets/js/datatables/datatables.css">
<link rel="stylesheet" href="../../assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="../../assets/js/select2/select2.css">
<script src="../../assets/js/datatables/datatables.js"></script>
<script src="../../assets/js/select2/select2.min.js"></script>
<script src="../../assets/js/neon-chat.js"></script>
<script src="../../assets/datatable/datatable.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--  -->

<?php
// Define an array of notifications
$notifications = array(
	array(
		'icon' => 'entypo-user-add',
		'class' => 'notification-success',
		'text' => 'New user registered',
		'time' => '30 seconds ago'
	),
	array(
		'icon' => 'entypo-heart',
		'class' => 'notification-secondary',
		'text' => 'Someone special liked this',
		'time' => '2 minutes ago'
	),
	array(
		'icon' => 'entypo-user',
		'class' => 'notification-primary',
		'text' => 'Privacy settings have been changed',
		'time' => '3 hours ago'
	),
	array(
		'icon' => 'entypo-cancel-circled',
		'class' => 'notification-danger',
		'text' => 'John cancelled the event',
		'time' => '9 hours ago'
	),
	array(
		'icon' => 'entypo-info',
		'class' => 'notification-info',
		'text' => 'The server status is stable',
		'time' => 'yesterday at 10:30am'
	),
	array(
		'icon' => 'entypo-rss',
		'class' => 'notification-warning',
		'text' => 'New comments waiting approval',
		'time' => 'last week'
	)
);

$numNotifications = count($notifications);
?>
<div class="row">

	<div class="col-md-6 col-sm-8 clearfix">

		<ul class="user-info pull-left pull-right-xs pull-none-xsm">
			<li class="notifications dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<i class="entypo-attention"></i>
					<span class="badge badge-info"><?php echo $numNotifications; ?></span>
				</a>
				<ul class="dropdown-menu">
					<li class="top">
						<p class="small">
							<a href="#" class="pull-right">Mark all Read</a>
							You have <strong><?php echo $numNotifications; ?></strong> new notifications.
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller">
							<?php foreach ($notifications as $notification) { ?>
								<li class="unread <?php echo $notification['class']; ?>">
									<a href="#">
										<i class="<?php echo $notification['icon']; ?> pull-right"></i>
										<span class="line"><strong><?php echo $notification['text']; ?></strong></span>
										<span class="line small"><?php echo $notification['time']; ?></span>
									</a>
								</li>
							<?php } ?>
						</ul>
					</li>
					<li class="external">
						<a href="#">View all notifications</a>
					</li>
				</ul>
			</li>
		</ul>

	</div>

	<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		<ul class="list-inline links-list pull-right">

			<li class="sep"></li>

			<li>
				<a href="#" onclick="logout()">
					Log Out <i class="entypo-logout right"></i>
				</a>
			</li>
		</ul>
	</div>

</div>

<script>
	function logout() {
		var confirmation = confirm("Are you sure you want to logout?")

		if (confirmation) {
			window.location.href = "<?php echo $_SESSION['base_url']; ?>class/Logout"
		}
	}
</script>