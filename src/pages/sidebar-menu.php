<?php
require_once '../functions/Helpers.php';
$helper = new Helpers;
$helper->validateUserSession($_SESSION['user_id']);
?>

<div class="sidebar-menu">

	<div class="sidebar-menu-inner">

		<header class="logo-env">

			<!-- logo -->
			<div class="logo">
				<a href="dashboard.php">
					<p class="lead">Public Health System</p>
					<p>@<?= $username ?></p>
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


			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Dashboard</span>
				</a>

			</li>
			<?php if ($role == 2) : ?>
				<li>
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">General</span>
					</a>

				</li>
			<?php endif; ?>

			<?php if ($role == 2 || $role == 3) : ?>
				<li>
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Schedules</span>
					</a>

				</li>
			<?php endif ?>

			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Records</span>
				</a>

			</li>
			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Vaccination</span>
				</a>

			</li>
			<?php if ($role == 1) : ?>
				<li>
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Appointments</span>
					</a>

				</li>
			<?php endif ?>
			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Patients</span>
				</a>

			</li>
			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Vaccine Management</span>
				</a>

			</li>
			<?php if ($role == 2 || $role == 3) : ?>
				<li>
					<a href="#">
						<i class="entypo-gauge"></i>
						<span class="title">Family Planning</span>
					</a>

				</li>
			<?php endif; ?>
			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Reports</span>
				</a>

			</li>
			<li>
				<a href="#">
					<i class="entypo-gauge"></i>
					<span class="title">Users</span>
				</a>

			</li>


			<li class="has-sub">
				<a href="tables-main.php">
					<i class="entypo-window"></i>
					<span class="title">Profile</span>
				</a>

				<ul>
					<li>
						<a href="tables-main.php">
							<span class="title">Edit Information</span>
						</a>
					</li>
					<li>
						<a href="tables-datatable.php">
							<span class="title">Logout</span>
						</a>
					</li>
				</ul>
			</li>
		</ul>

	</div>
</div>