<?php
/**
 * The header for our theme
 *
 * @package main
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="revisit-after" content="3 days">
	<meta name="robots" content="index, follow">
	<meta name="baseurl" content="<?php echo home_url(); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/public/images/favicon.ico" type="image/x-icon" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="app">
	<header-main inline-template>
		<header
		:class="[scrolled ? 'py-4' : 'py-6']"
		class="site-header bg-white fixed z-100 pin-x pin-t">
			<div class="container">
				<div class="flex justify-between relative">
					<div class="flex flex-wrap">
						<a href="<?php echo home_url(); ?>">
							<img class="justify-start" src="<?php echo get_template_directory_uri(); ?>/public/images/logo.svg">
						</a>
						<?php
							wp_nav_menu( [
								'menu' => 'primary-menu',
								'menu_class' => 'header-menu',
								'theme_location' => 'primary-menu'
							]);
						?>
						<!-- <ul class="flex font-oswald p-0 text-xs tracking-wider uppercase list-reset">
							<li class="hidden lg:block ml-12 leading-normal"><a class="text-black" href="#">Technology</a></li>
							<li class="hidden lg:block ml-12 leading-normal text-black"><a class="" href="#">Ideas</a></li>
							<li class="hidden lg:block ml-12 leading-normal"><a class="" href="#">Leadership</a></li>
							<li class="hidden lg:block ml-12 leading-normal"><a class="text-black" href="#">Video</a></li>
							<li class="hidden lg:block ml-12 leading-normal"><a class="text-black" href="#">News</a></li>
							<li class="hidden lg:block ml-12 leading-normal"><a class="text-black" href="#">Finance</a></li>
							<li class="hidden lg:block ml-12 leading-normal"><a class="text-black" href="#">Entertainment</a></li>
						</ul> -->
					</div>
					
			
					<button v-on:click="burger = !burger" class="absolute pin-r pin-t border-none">
						<svg width="27px" height="16px" viewBox="0 0 27 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<g id="Component-/-Header" transform="translate(-1373.000000, -37.000000)" fill="#1D1F24">
									<g id="Header">
										<path d="M1373,37 L1400,37 L1400,39 L1373,39 L1373,37 Z M1373,44 L1400,44 L1400,46 L1373,46 L1373,44 Z M1373,51 L1400,51 L1400,53 L1373,53 L1373,51 Z" id="Menu-icon"></path>
									</g>
								</g>
							</g>
						</svg>
					</button>
				</div>	
			</div>

			<div 
				:class="[burger ? '' : 'hidden']"
				class="container" 
				v-if="burger">
				<div class="flex absolute pin-r bg-grey-dark mt-4 z-75 w-full h-screen">
					<ul class="flex flex-col w-full items-center font-oswald text-lg md:text-xl uppercase list-reset pt-8">
						<li class="py-2 md:py-4"><a class="text-black" href="#">Technology</a></li>
						<li class="py-2 md:py-4"><a class="text-black" href="#">Ideas</a></li>
						<li class="py-2 md:py-4"><a class="text-black" href="#">Leadership</a></li>
						<li class="py-2 md:py-4"><a class="text-black" href="#">Video</a></li>
						<li class="py-2 md:py-4"><a class="text-black" href="#">News</a></li>
						<li class="py-2 md:py-4"><a class="text-black" href="#">Finance</a></li>
						<li class="py-2 md:py-4"><a class="text-black" href="#">Entertainment</a></li>
					</ul>
				</div>
			</div>
		</header>
	</header-main>
	<div class="site-content pt-header">