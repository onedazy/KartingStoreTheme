<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>


	<link rel="apple-touch-icon" sizes="180x180" href="https://kartingstore.nl/wp-content/uploads/2022/03/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://kartingstore.nl/wp-content/uploads/2022/03/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://kartingstore.nl/wp-content/uploads/2022/03/favicon-16x16.png">
	<link rel="manifest" href="https://kartingstore.nl/wp-content/uploads/2022/03/site.webmanifest">
	<link rel="mask-icon" href="https://kartingstore.nl/wp-content/uploads/2022/03/safari-pinned-tab.svg" color="#00d3c1">
	<link rel="shortcut icon" href="https://kartingstore.nl/wp-content/uploads/2022/03/favicon.ico">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="msapplication-config" content="https://kartingstore.nl/wp-content/uploads/2022/03/browserconfig.xml">
	<meta name="theme-color" content="#323232">
	<meta property="og:image" content="https://kartingstore.nl/wp-content/uploads/2022/03/kartingstore_with_text.jpg">
	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:image" content="https://kartingstore.nl/wp-content/uploads/2022/03/kartingstore_with_text.jpg">

</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
	$main_page = '/var/www/html_2/wp-content/themes/kartingStoreTheme/pages/Main page.php'
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'my-theme' ); ?></a>

<div id="wrapper">
	<header>
		<nav id="header" class="navbar fixed-top nav-transparent navbar-dark navbar-expand-md <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">
				<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img width="95" height="40" src="https://kartingstore.nl/wp-content/uploads/2022/03/text_white_500.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'my-theme' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse justify-content-between">
					<li class="nav-item dropdown">
						<a class="nav-link  dropdown-toggle" href="#" data-bs-toggle="dropdown">  Alle categorieën </a>
						<ul class="dropdown-menu">
							<!-- <li><a class="dropdown-item" href="/product-category/chassis-onderdelen/"> Chassis & onderdelen </a></li>
							<li><a class="dropdown-item" href="/product-category/motoren-onderdelen/"> Motoren & onderdelen </a></li>
							<li><a class="dropdown-item" href="/product-category/tandwielen-kettingen/"> Tandwielen & kettingen </a></li>
							<li><a class="dropdown-item" href="/product-category/gereedschap/"> Gereedschap </a></li>
							<li><a class="dropdown-item" href="/product-category/olie-smeermiddelen/"> Olie & smeermiddelen </a></li>
							<li><a class="dropdown-item" href="/product-category/materialen/"> Bevestigingsmaterialen </a></li> -->
						</ul>
					</li>
					<div>
						<a class="nav-item login" href="/klantenservice">klantenservice</a>
						<a class="nav-item login" href="/my-account"><?php  if(is_user_logged_in() == true ): echo 'mijn account'; endif; if(is_user_logged_in() == false ): echo 'inloggen'; endif; ?></a>
						<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
							<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart-dash-fill" viewBox="0 0 16 16">
								<path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM6.5 7h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1 0-1z"/>
							</svg>
							<div>
								<p><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></p>
							</div>
						</a>
					</div>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>
	<main id="main" <?php if(get_page_template() != $main_page): echo "class='container header-margin'"; endif; if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col">
		<?php
			endif;
		?>
