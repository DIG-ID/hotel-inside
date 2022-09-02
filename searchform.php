<?php
$hi_unique_id  = wp_unique_id( 'search-form-' );
$hi_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<form role="search" <?php echo $hi_aria_label; ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group has-search">
		<span class="fa fa-search form-control-feedback"></span>
		<input type="search"  id="<?php echo esc_attr( $hi_unique_id ); ?>" class="form-control search-field" value="<?php echo get_search_query(); ?>" name="s" placeholder="Suchen">
	</div>
</form>
