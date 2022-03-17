<?php
/**
 * Template Name: Template - Main page
 * Description: Page template full width.
 *
 */

get_header();
?>
<div>
	<div class="main-header">
		<div class="image-background">
			<div class="container">
				<div class="row justify-content-center">
					<h1 class="text-center">De kartingstore van Nederland</h1>
					<div class="col-md-8 col-lg-4 col-12">
						<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="input-group">
								<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Search', 'my-theme' ); ?>" title="<?php esc_attr_e( 'Search', 'my-theme' ); ?>" />
								<button type="submit" name="submit" class="btn btn-secondary display-none"><?php esc_html_e( 'Search', 'my-theme' ); ?></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="categories container">
			<div class="row">
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5">
					<div class="main-category">
						<a href="https://kartingstore.nl/product-category/chassis-onderdelen/">
							<div class="textual p-4">
									<h2>Chassis & onderdelen</h2>
									<p class="icon d-flex align-content-center">
										<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
										Zelf je kart opknappen
									</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5">
					<div class="main-category">
						<div class="textual p-4">
							<h2>Motoren & onderdelen</h2>
							<a class="icon d-flex align-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
								Meer dan alleen tuning
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5">
					<div class="main-category">
						<div class="textual p-4">
							<h2>Tandwielen & kettingen</h2>
							<a class="icon d-flex align-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
								Voor de overbrenging
							</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5 d-none d-md-block">
					<div class="main-category">
						<div class="textual p-4">
							<h2>Gereedschap & accesoires</h2>
							<a class="icon d-flex align-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
								Voor elke reparatie
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5">
					<div class="main-category">
						<div class="textual p-4">
							<h2>Banden & wielen</h2>
							<a class="icon d-flex align-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
								Om op het cicuit te blijven
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5 d-none d-md-block">
					<div class="main-category">
						<div class="textual p-4">
							<h2>Bevestigingsmaterialen</h2>
							<a class="icon d-flex align-content-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
								Alles goed bevestigd
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();
