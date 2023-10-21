<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Wordpress Game</title>
	<link rel="stylesheet" href="css/style.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
	

	<header class="header">
			<a href="#" class="logo">
				<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0ZM25.7499 18.1244C25.7499 18.1244 30.1272 14.803 33.033 19.5771C35.9095 24.3023 34.7891 29.4424 34.7667 29.5454L34.7663 29.547C34.5624 30.8187 33.8847 31.6688 32.6105 31.5621C31.3362 31.4558 28.5744 28.1349 28.5744 28.1349C28.3468 27.8612 27.8692 27.6377 27.5139 27.6377L20.4847 27.6389C20.1299 27.6389 19.6519 27.8625 19.4238 28.1361C19.4238 28.1361 16.6625 31.4571 15.3903 31.5633C14.1144 31.67 13.4383 30.8208 13.2332 29.5482C13.2332 29.5482 12.0624 24.3507 14.9677 19.5783C17.8739 14.8043 22.2517 18.1265 22.2517 18.1265C22.5352 18.341 23.0586 18.5174 23.4143 18.517L24.5868 18.5162C24.9425 18.5154 25.466 18.339 25.7499 18.1244ZM19.8513 23.463H21.3586C21.3586 23.463 21.6138 23.0248 21.5932 22.6388C21.5727 22.2531 21.3241 21.934 21.3241 21.934H19.9006L19.9067 20.4554C19.9067 20.4554 19.5797 20.2876 19.1334 20.2737C18.6875 20.261 18.3773 20.4271 18.3773 20.4271V21.9344H16.8696C16.8696 21.9344 16.6264 22.3221 16.6731 22.8016C16.7207 23.2812 16.8984 23.4634 16.8984 23.4634H18.3219V24.8874C18.3219 24.8874 18.5451 25.1458 19.0382 25.1532C19.5322 25.1593 19.8513 24.9157 19.8513 24.9157V23.463ZM27.0799 23.9257C27.0799 24.585 27.612 25.1187 28.2721 25.1187C28.9293 25.1187 29.4655 24.5854 29.4655 23.9257C29.4655 23.2652 28.9293 22.7327 28.2721 22.7327C27.612 22.7327 27.0799 23.2652 27.0799 23.9257ZM27.0799 20.6437C27.0799 21.303 27.612 21.8363 28.2721 21.8363C28.9293 21.8363 29.4655 21.3034 29.4655 20.6437C29.4655 19.9832 28.9293 19.4507 28.2721 19.4507C27.612 19.4507 27.0799 19.9832 27.0799 20.6437ZM30.0509 22.4053C30.0509 23.065 30.583 23.5983 31.2431 23.5983C31.9003 23.5983 32.4365 23.065 32.4365 22.4053C32.4365 21.7453 31.9003 21.2123 31.2431 21.2123C30.583 21.2123 30.0509 21.7453 30.0509 22.4053Z" fill="white"/>
					</svg>					
			</a>
		<div class="header-block">
			<div class="search"><input type="search" name="" id="" placeholder="Search anything">
			<img src="<?php echo get_template_directory_uri() ?>/img/icons/search.svg" alt="">
			</div>
			<div class="user"><img src="<?php echo get_template_directory_uri() ?>/img/user.png" alt=""><img src="<?php echo get_template_directory_uri() ?>/img/icons/arrow.svg" alt=""></div>
		</div>
	</header>

	<?php 
		wp_nav_menu( [
			'theme_location'  => 'primary',
			'container'       => 'nav',
			'container_class' => 'nav-wrap',
			'menu_class'      => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		] );
	?>

	<!-- <nav class="nav-wrap">
		<ul>
			<li class="current">
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/icons/home-run.svg" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/icons/fun.svg" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/icons/audio.svg" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/icons/clapperboard.svg" alt="">
				</a>
			</li>
			<li>
				<a href="#">
					<img src="<?php echo get_template_directory_uri() ?>/img/icons/settings.svg" alt="">
				</a>
			</li>
		</ul>
	</nav> -->