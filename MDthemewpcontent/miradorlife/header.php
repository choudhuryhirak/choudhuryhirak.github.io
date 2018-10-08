<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mirador
 */

?>

<!doctype html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
	<!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-68452641-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-68452641-1');
	</script>


	<!-- Facebook Pixel Code -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '258473014795696');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=258473014795696&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->

	<!-- <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b8791d07b4f100011fe471b&product=inline-share-buttons' async='async'></script> -->
	<script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5b8791d07b4f100011fe471b&product=inline-share-buttons' async='async'></script>

	<!-- end api sharethis code -->

	<!-- look for category_name and block robots -->

	<?php if (is_category('Natural Wood') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Planter and Foliage') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Tableware and Knick Knacks') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Bamboo') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Distressed Furniture') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Cane and Natural Fabrics') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Mirrors and Arts') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Cushions And Rugs') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Cement & Stone') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Candle Stands And Vases') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Ceramics') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Arts') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>
	<?php if (is_category('Liquid Glass') === TRUE){ ?>
		<meta name="robots" content="noodp">
	<?php } ?>

	<!-- look for category_name and block robots -->


	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mirador' ); ?></a>

	<header class="site-header" id="">

		<div id="myNav" class="mverlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="mverlay-content">
				<?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
      </div>
    </div>
  	<span style="font-size:30px;cursor:pointer; padding: 2%; top: 10px; position: fixed;" onclick="openNav()" id="hmenu"><i class="fas fa-bars"></i></span>
		<a href="<?php echo site_url() ?>">
      <div id="logonav" style="background-image: url(<?php echo get_template_directory_uri(); ?>/exports/miralogodes.png);">
    </div>
    </a>

		<a href="javascript:void(0)" id="return-to-top"><i class="fas fa-chevron-up"></i></a>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
