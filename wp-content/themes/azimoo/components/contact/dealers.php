<?php if ( have_rows( 'contact_dealers' ) ) : ?>
    <div class="dealers">
        <?php while ( have_rows( 'contact_dealers' ) ) :
            the_row(); ?>
            <div class="dealers__row">
                <?php
                $dealers_flag = get_sub_field( 'dealers_flag' );
                if ( $dealers_flag ) : ?>
                    <div class="dealers__flag order-1">
                        <img src="<?php echo esc_url( $dealers_flag['url'] ); ?>" alt="<?php echo esc_attr( $dealers_flag['alt'] ); ?>" />
                    </div>
                <?php endif; ?>
                <?php if ( $dealers_txt = get_sub_field( 'dealers_txt' ) ) : ?>
                    <div class="dealers__txt order-2 order-md-4 order-lg-2">
                        <?php echo $dealers_txt; ?>
                    </div>
                <?php endif; ?>
                <?php
                $dealers_img = get_sub_field( 'dealers_img' );
                if ( $dealers_img ) : ?>
                    <div class="dealers__img order-3">
                        <img src="<?php echo esc_url( $dealers_img['url'] ); ?>" alt="<?php echo esc_attr( $dealers_img['alt'] ); ?>" />
                    </div>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>