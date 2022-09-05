<?php
get_header();
do_action( 'before_main_content' );
?>
<section class="section section-content error-nothing-found-content">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
		<div class="custom-container">
			<div class="row justify-content-center align-items-center">
				<div class="col-12 col-lg-6 text-center">
					<div class="circle">
						<span>404</span>
						<h1 class="page-title"><?php esc_html_e( 'Hoppla ... Diese Seite wurde nicht gefunden', 'hotel-inside' ); ?></h1>
						<p><?php esc_html_e( 'Hier geht es zurück zur Startseite', 'hotel-inside' ); ?></p>
						<a href="<?php echo get_home_url(); ?>"><?php esc_html_e( 'zur Startseite','hotel-inside' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<?php
do_action( 'after_main_content' );
get_footer();
