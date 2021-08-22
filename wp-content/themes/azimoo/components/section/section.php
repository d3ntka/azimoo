<section class="bg-<?=$section_bg_color?>">
    <div class="container">
        <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <h1>
                        <?php echo ( $section_title ); ?>
                    </h1>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( $section_text = get_sub_field( 'section_text' ) ) : ?>
            <div class="row justify-content-center">
                <div class="col-12">
                    <?php echo $section_text; ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( $section_imgs ) : ?>
            <div class="row justify-content-center">
                <?php foreach( $section_imgs as $image ) : ?>
                    <div class="col-12 col-lg d-flex justify-content-center">
                        <a href="<?php echo esc_url( $image['url'] ); ?>">
                            <img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>