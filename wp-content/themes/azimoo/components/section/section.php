<div class="sections__shadow">
<!-- <div class="section__bg"> -->

<!-- <div class="indent indent--<?=$section_bg_color?>"></div> -->
<section class="section__main indent__<?=$indent?> bg-<?=$section_bg_color?>">
<!-- <div class="triangle"></div> -->
    <div class="section__cont">
    <div class="container">
        <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?>
            <div class="row justify-content-center">
                <div class="col-auto">
                    <div class="section__title">
                        <h1>
                            <?php echo ( $section_title ); ?>
                        </h1>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( $section_text = get_sub_field( 'section_text' ) ) : ?>
            <div class="row justify-content-center">
                <div class="col-12">
                    <p>
                        <?php echo $section_text; ?>
                    </p>
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
    </div>
</section>

<!-- </div> -->
</div>
