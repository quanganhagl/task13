<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>Home | Tranning Wordpress</title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
<header class="c-header">
	<div class="l-container">
		<div class="c-header__top">
			<div class="logo">
				<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="税理士法人下平会計事務所"></a>
			</div>
			<div class="contact">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hed_tel.png" alt=""><br/>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hed_con_no.png" alt="" class="js-imglink">

			</div>
		</div>

		<nav class="c-gnav">
			<ul>
				<li><a href="#">私たちの想い</a></li>
				<li><a href="#">6つの強み</a></li>
				<li><a href="service.html">サービス</a></li>
				<li><a href="#">所員の紹介</a></li>
				<li><a href="#">事務所案内</a></li>
			</ul>
		</nav>
	</div>
    <?php wp_head() ?>

</header>