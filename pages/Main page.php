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
					<h1 class="text-center">De sportiefste kleding winkel van Nederland</h1>
					<h2 class="text-center sub-title">Zoek hier in ons assortiment</h2>
					<div class="col-md-8 col-lg-4 col-12 g-2 g-md-0">
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
						<a href="https://frami-autosport.nl/product-category/chassis-onderdelen/">
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
						<a href="https://frami-autosport.nl/product-category/motoren-onderdelen/">
							<div class="textual p-4">
								<h2>Motoren & onderdelen</h2>
								<p class="icon d-flex align-content-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
									Meer dan alleen tuning
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5">
					<div class="main-category">
						<a href="https://frami-autosport.nl/product-category/tandwielen-kettingen/">
							<div class="textual p-4">
								<h2>Tandwielen & kettingen</h2>
								<p class="icon d-flex align-content-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
									Voor de overbrenging
								</p>
							</div>
						</a>
					</div>
				</div>

				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5 d-none d-md-block">
					<div class="main-category">
						<a href="https://frami-autosport.nl/product-category/gereedschap/">
							<div class="textual p-4">
								<h2>Gereedschappen</h2>
								<p class="icon d-flex align-content-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
									Voor elke reparatie
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5">
					<div class="main-category">
						<a href="https://frami-autosport.nl/product-category/olie-smeermiddelen/">
							<div class="textual p-4">
								<h2>Olie & smeermiddelen</h2>
								<p class="icon d-flex align-content-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
									Niet smeren is leren
								</p>
							</div>
						</a>
					</div>
				</div>
				<div class="col-12 col-lg-4 col-md-6 g-2 g-md-5 d-none d-md-block">
					<div class="main-category">
						<a href="https://frami-autosport.nl/product-category/materialen/">
							<div class="textual p-4">
								<h2>Bevestigingsmaterialen</h2>
								<p class="icon d-flex align-content-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg>
									Alles goed bevestigd
								</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="usp">
			<div class="container">
				<h2 class="text-center">Waarom frami?</h2>
				<div class="row">
					<div class="col-12 col-md-4 usp-container package">
						<div class="usp-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box2-heart-fill" viewBox="0 0 16 16">
  							<path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 0 0 0-.8-.4h-8.5ZM8.5 4h6l.5.667V5H1v-.333L1.5 4h6V1h1v3ZM8 7.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132Z"/>
							</svg>
						</div>
						<div class="usp-content"><h5>we pakken alles met liefde voor je in</h5><p>zodat het pakketje heel bij jou aankomt</p></div>
					</div>
					<div class="col-12 col-md-4 usp-container helping">
						<div class="usp-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-dots-fill" viewBox="0 0 16 16">
							<path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
						</div>
						<div class="usp-content"><h5>we doen ons best jou zo goed mogelijk te helpen</h5><p>jij weet dan waar je aan toe bent</p></div>
					</div>
					<div class="col-12 col-md-4 usp-container speed">
						<div class="usp-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-speedometer2" viewBox="0 0 16 16">
							<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
							<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
						</svg>
						</div>
						<div class="usp-content"><h5>we proberen jou pakketje zo snel mogelijk te versturen</h5><p>zodat jij snel weer verder kan</p></div>
					</div>
				</div>
			</div>
		</div>
		<div class="showcase_products">
			<div class="container">
				<h2 class="text-center">Onze best verkopende producten</h2>
				<div class="row">
					<?php echo do_shortcode('[best_selling_products limit=4]')?>
				</div>
			</div>
		</div>
	</div>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();
