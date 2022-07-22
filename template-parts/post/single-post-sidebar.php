<?php
$author_id = get_the_author_meta('ID');
$author_badge = get_field('profile_picture', 'user_'. $author_id ); $authorimg_size = 'full'; 
echo wp_get_attachment_image( $author_badge, $authorimg ); 
?>