<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class( ' text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?> 
<!--  -->
<div id="page" class=" flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>



	<div id="content" class="site-content flex-grow">

		<!-- Start introduction -->
		<?php if ( is_front_page() ) : ?>
			<div id="content" class="site-content flex-grow">
		<!-- <div class="justify-center h-screen bg-fixed bg-center bg-cover">
		</div> -->
		<!-- <section class="background-cover slick">
    <div class="slide slide--1">
        <div>&nbsp;</div>
    </div>

    <div class="slide slide--2">
        <div>&nbsp;</div>
    </div>

    <div class="slide slide--3">
        <div>&nbsp;</div>
    </div>
</section> -->
			<!-- <h1 class="font-bold text-lg text-secondary uppercase">TailPress</h1> -->
			<!-- <img src="https://meierpartners.com/wp-content/uploads/2021/05/brand-vector-splash.png" />
			<h2 class="text-3xl lg:text-7xl tracking-tight font-extrabold my-4">Header Text <a href="#" class="text-primary">primary color</a> and <a href="#" class="text-primary">color</a>.</h2>
			<p class="max-w-screen-lg text-gray-700 text-lg font-medium mb-10">layout paragraph text only </p>
			<a href="" class="w-full sm:w-auto flex-none bg-gray-900 text-white text-lg leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none transition-colors duration-200">test only</a> -->
	
		<!-- End introduction -->
		</div>
		<?php endif; ?>

		<?php do_action( 'tailpress_content_start' ); ?>
		</div>
		<main>