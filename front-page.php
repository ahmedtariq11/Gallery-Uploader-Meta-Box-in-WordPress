$image_ids = get_post_meta( get_the_ID(), 'second_featured_img' );
         
    if ( ! empty( $image_ids ) ) :
        $image_ids = explode( ',', $image_ids[0] );
        foreach($image_ids as $image_id) {
            $image_url = wp_get_attachment_url($image_id); ?>
            <div class="featured-item">
                <img src="<?php echo $image_url; ?>" />
            </div>
            <?php
        }
    endif;
