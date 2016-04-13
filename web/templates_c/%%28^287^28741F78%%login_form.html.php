<?php /* Smarty version 2.6.10, created on 2015-03-28 09:54:06
         compiled from login_form.html */ ?>
<!DOCTYPE html>
<!--
	Interphase by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Generic - Interphase by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">Interphase</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="student.html">Student Login</a></li>
						<li><a href="teacher.html">Teacher Login</a></li>
					</ul>
				</nav>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
            	<form method="post" action="login.php">
					<div class="row uniform 50%">
                        <div class="container">
                            <div class="6u 12u$(xsmall)">
                                <input type="text" name="account" id="account" value="" placeholder="Name" />
                            </div>
                            <div class="6u$ 12u$(xsmall)">
                                <input type="Password" name="passwd" id="passwd" value="" placeholder="Password" />
                            </div>
                        </div>
                	</div>
                    <div class="12u$">
                        <ul class="actions">
                            <li><input type="submit" value="Login" class="special" /></li>
                        </ul>
                    </div>
             	</form>
			</section>

	</body>
</html>