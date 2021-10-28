<?php if ( have_rows( 'contact_dealers' ) ) : ?>
    <div class="dealers">
	<?php while ( have_rows( 'contact_dealers' ) ) :
		the_row(); ?>
		<div class="dealers__row">
            <?php if ( $dealers_txt = get_sub_field( 'dealers_txt' ) ) : ?>
                <div class="dealers__txt">
                    <?php echo $dealers_txt; ?>
                </div>
            <?php endif; ?>
    
            <?php
            $dealers_img = get_sub_field( 'dealers_img' );
            if ( $dealers_img ) : ?>
                <div class="dealers__img">
                    <img src="<?php echo esc_url( $dealers_img['url'] ); ?>" alt="<?php echo esc_attr( $dealers_img['alt'] ); ?>" />
                </div>
            <?php endif; ?>
        </div>

	<?php endwhile; ?>
    </div>
<?php endif; ?>