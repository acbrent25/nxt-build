<?php
/**
 * header-always-sticky.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Champagne
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'champagne' ); ?></a>

			<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0}">
				<div class="header-body">
					<div class="header-top">
						<div class="header-top-container container">
							<div class="header-row">
								<div class="header-column justify-content-start">
									<span class="d-none d-sm-flex align-items-center">
										<i class="fas fa-map-marker-alt mr-1"></i>
										1234 Street Name, City Name
									</span>
									<span class="d-none d-sm-flex align-items-center ml-4">
										<i class="fas fa-phone mr-1"></i>
										<a href="tel:+1234567890">123-456-7890</a>
									</span>
								</div>
								<div class="header-column justify-content-end">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link" href="contact-us-1.html">Contact Us</a>
										</li>
									</ul>
									<ul class="header-top-social-icons social-icons social-icons-transparent d-none d-md-block">
										<li class="social-icons-facebook">
											<a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
										</li>
										<li class="social-icons-twitter">
											<a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a>
										</li>
										<li class="social-icons-instagram">
											<a href="http://www.instagram.com/" target="_blank" title="Instragram"><i class="fab fa-instagram"></i></a>
										</li>
									</ul>

								</div>
							</div>
						</div>
					</div>
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column justify-content-start">
								<div class="header-logo">
									<a href="index.html">
										<img alt="NXT USA Logo" width="127" height="48" src="<?php echo get_template_directory_uri(); ?>/img/nxt-usa_logo.jpg">
									</a>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-nav">
									<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1">
										<nav class="collapse">
											
											
											<?php
											wp_nav_menu( array(
												'theme_location' 	=> 'mainnav',
												'menu_id'        	=> 'primary-menu',
												'menu_class'		=> 'nav flex-column flex-lg-row',
												'menu_id'			=> 'mainNav',
												'items_wrap'      => '<ul class="dropdown %2$s">%3$s</ul>',
												'depth'				=> 0
											) );
											?>
											
											
											
<!--
											<ul class="nav flex-column flex-lg-row" id="mainNav">
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="index.html">
														Home
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Elements
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle active" href="#">
														Features
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Pages
													</a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">About Us</a>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Contact Us</a>
														</li>
														<li class="dropdown-submenu">
															<a class="dropdown-item dropdown-toggle" href="#">Layouts</a>
														</li>
													</ul>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Portfolio
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Blog
													</a>
												</li>
												<li class="dropdown">
													<a class="dropdown-item dropdown-toggle" href="#">
														Shop
													</a>
												</li>
											</ul>
-->
										</nav>
									</div>
									<div class="header-button d-none d-sm-flex ml-3">
										<a href="https://themeforest.net/item/ezy-responsive-multipurpose-html5-template/21814871" class="btn btn-outline btn-rounded btn-primary btn-4 btn-icon-effect-1" target="_blank">
											<span class="wrap">
												<span>BUY EZY</span>
												<i class="fas fa-shopping-cart"></i>
											</span>
										</a>
									</div>
									<button class="header-btn-collapse-nav ml-3" data-toggle="collapse" data-target=".header-nav-main nav">
										<span class="hamburguer">
											<span></span>
											<span></span>
											<span></span>
										</span>
										<span class="close">
											<span></span>
											<span></span>
										</span>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

	<div id="content" class="site-content">
