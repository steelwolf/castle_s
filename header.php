<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package castle_s
 * @version
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'castle_s' ); ?></a>

	<header id="masthead" class="navigation site-header" role="banner">
		<div class="navigation-wrapper">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg class="logo" viewbox="0 0 300 300" aria-hidden="true">
					<title><?php bloginfo( 'name' ); ?></title>
					<g id="logo-svg">
						<circle
							 fill="#E6E7E8"
							 cx="107"
							 cy="107"
							 r="106.8"
							 id="circle1175" />
						<polygon
							 fill="#880D53"
							 points="43,111.8 28.5,111.8 58,174.5 72.4,174.5  "
							 id="polygon1177" />
						<polygon
							 fill="#A70064"
							 points="72.5,174.5 58.1,174.5 99.9,84.9 107.1,100.4  "
							 id="polygon1179" />
						<polygon
							 fill="#0D2240"
							 points="171.1,100.9 185.6,100.9 156.1,38.2 141.7,38.2  "
							 id="polygon1181" />
						<polygon
							 fill="#003764"
							 points="141.6,38.2 156,38.2 114.2,127.8 107,112.4  "
							 id="polygon1183" />
						<polygon
							 fill="#004A97"
							 points="72.4,38.2 114.2,127.8 107,143.3 58,38.2  "
							 id="polygon1185" />
						<polygon
							 fill="#CC007B"
							 points="141.7,174.5 99.9,84.9 107.1,69.4 156.1,174.5  "
							 id="polygon1187" />
						<polygon
							 fill="#005DA6"
							 points="43,100.9 28.5,100.9 58,38.2 72.4,38.2  "
							 id="polygon1189" />
						<polygon
							 fill="#E70095"
							 points="171.1,111.8 185.6,111.8 156.1,174.5 141.7,174.5  "
							 id="polygon1191" />
					</g>
				</svg>
			</a>
			<nav id="site-navigation" class="main-navigation">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav>
			<div class="navigation-tools">
				<div class="search-bar">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>

	<div class="hero-section-grid">

	</div>
	<div id="content" class="site-content">
