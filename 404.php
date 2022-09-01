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
						<h1 class="page-title"><?php esc_html_e( 'Ooops... Nothing here', 'hotel-inside' ); ?></h1>
						<p><?php esc_html_e( 'The page your are looking for is not available or has been removed. Try going to Home Page by using the button below', 'hotel-inside' ); ?></p>
						<a href="<?php echo get_home_url(); ?>"><?php esc_html_e( 'Back to home','hotel-inside' ); ?></a>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>
<?php
do_action( 'after_main_content' );
get_footer();
