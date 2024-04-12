<?php
/**
 * Information Box Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$box_title           = get_field( 'title' );
$box_content         = ! empty( get_field( 'content' ) ) ? get_field( 'content' ) : 'Your Information Box content will display here once you fill the fields...';

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
	$anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'information-box';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
?>

<div <?php echo esc_attr( $anchor ); ?> class="<?php echo esc_attr( $class_name ); ?>">
	<div class="information-box__wrapper">
		<div class="information-box__content">
			<?php if ( ! empty( $box_content ) ) : ?>
				<?php echo wp_kses_post( $box_content ); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
