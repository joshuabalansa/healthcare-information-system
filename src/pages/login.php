<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />

    <!-- <link rel="icon" href="assets/images/favicon.ico"> -->

    <title>Login</title>

    <link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">

    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/neon-core.css">
    <link rel="stylesheet" href="assets/css/neon-theme.css">
    <link rel="stylesheet" href="assets/css/neon-forms.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <script src="assets/js/jquery-1.11.3.min.js"></script>

</head>

<body class="page-body login-page login-form-fall">



    <script type="text/javascript">
        var baseurl = '';
    </script>

    <div class="login-container">

        <div class="login-header login-caret">

            <div class="login-content">

                <a href="index.html" class="logo">
                    <img src="assets/images/app_logo.jpg" width="120" alt="" />
                    <h2 style="color: #fff">Vaccination And Family Planning</h2>
                </a>

                <!-- <p class="description">Dear user, log in to access the admin area!</p> -->


                <div class="login-progressbar-indicator">
                    <h3>43%</h3>
                    <span>logging in...</span>
                </div>
            </div>

        </div>

        <div class="login-progressbar">
            <div></div>
        </div>

        <!-- <div class="login-form"> -->
        <div class="login-content">

            <form method="post" role="form" action="class/Login.php" id="form_login">

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-user"></i>
                        </div>

                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
                    </div>

                </div>

                <div class="form-group">

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="entypo-key"></i>
                        </div>

                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login">
                        <i class="entypo-login"></i>
                        Login In
                    </button>
                    <br>
                    <span style="color: #f00"><?= $_SESSION['error'] ?? '' ?></span>
                </div>

                <div class="form-group">
                    <em>- or -</em>
                </div>

                <div class="form-group">

                    <a href="pages/registration?appointment=<?= $_SESSION['vaccination'] = 'vaccination' ?>" class="btn btn-dark">
                        Vaccination Appointment
                    </a>
                    <a href="pages/registration?appointment=<?= $_SESSION['vaccination'] = 'family_planning' ?>" class="btn btn-dark">
                        Family Planning Appointment
                    </a>
                </div>

            </form>


            <div class="login-bottom-links">

                <a href="extra-forgot-password.html" class="link">Forgot your password?</a>

                <br />

            </div>

        </div>
        <!-- </div> -->

    </div>


    <!-- Bottom scripts (common) -->
    <script src="assets/js/gsap/TweenMax.min.js"></script>
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- <script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script> -->


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="assets/js/neon-demo.js"></script>

</body>

</html>