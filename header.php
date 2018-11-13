<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
</head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110655588-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110655588-1');
</script>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class( $body_classes ); ?>>
<header id=header class=cont>
	<a href="https://www.aviatorsinsurance.com/">
	<img class="logo" alt="Aviators Insurance" src="https://www.aviatorsinsurance.com/wp-content/uploads/2017/09/main-logo.png">
	</a>
	<div class=vert>
		<div class="sticky-phone flexx">
		<div class="blue-link"><a  href="/get-a-quote" >GET A QUOTE</a></div>
		<div class=call style="float:right; margin-right:20px;">Give Us A Call<br /><a href="tel:18006635118" class="phone">(800) 663 5118</a></div>
		</div>
		<nav class="main-menu-w"><?php
				$main_menu = wp_nav_menu( array(
					'theme_location' => 'main',
					'menu' =>'main-menu',
					'menu_class' => 'js--scroll-nav main-menu',
					'container' => '',
				) );
		?></nav>
	</div>
</header>
