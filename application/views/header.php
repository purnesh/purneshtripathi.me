
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php echo $title;?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="<?php echo base_url('content/css'); ?>/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo base_url('content/js'); ?>/jquery.min.js"></script>
		<script src="<?php echo base_url('content/js'); ?>/jquery.dropotron.min.js"></script>
		<script src="<?php echo base_url('content/js'); ?>/jquery.scrolly.min.js"></script>
		<script src="<?php echo base_url('content/js'); ?>/jquery.onvisible.min.js"></script>
		<script src="<?php echo base_url('content/js'); ?>/skel.min.js"></script>
		<script src="<?php echo base_url('content/js'); ?>/skel-layers.min.js"></script>
		<script src="<?php echo base_url('content/js'); ?>/init.js"></script>
			<link rel="stylesheet" href="<?php echo base_url('content/css'); ?>/skel.css" />
			<link rel="stylesheet" href="<?php echo base_url('content/css'); ?>/style.css" />
			<link rel="stylesheet" href="<?php echo base_url('content/css'); ?>/style-desktop.css" />
			<link rel="stylesheet" href="<?php echo base_url('content/css'); ?>/style-noscript.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo base_url('content/css'); ?>/ie/v8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">

		<!-- Header -->
			<div id="header">

				<!-- Inner -->
					<div class="inner">
						<header>
							<h1><a href="<?php echo base_url();?>" id="logo"><?php echo $name;?></a></h1>
						</header>
					</div>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="<?php echo base_url();?>">Home</a></li>
							<li><a href="<?php echo base_url('index.php/aboutme');?>">About Me</a></li>
							<li>
								<a href="<?php echo base_url('index.php/projects');?>">Projects</a>
								<ul>
									<li><a href="<?php echo base_url('index.php/projects/details/keylogger_resist');?>">Keylogger Resist</a></li>
									<li><a href="<?php echo base_url('index.php/projects/details/natural_log_zero');?>">Natural Log Zero</a></li>
									<li><a href="<?php echo base_url('index.php/projects/details/atcad');?>">ATCAD</a></li>
									<li><a href="<?php echo base_url('index.php/projects/details/IECS');?>">IECS</a></li>
								</ul>
							</li>
							<li><a href="<?php echo base_url('index.php/contactme');?>">Contact Me</a></li>
						</ul>
					</nav>

			</div>
			
