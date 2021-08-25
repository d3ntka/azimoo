<div class="sections__shadow">
<section class="section__main indent__<?=$indent?> bg-<?=$section_bg_color?>" id="section-<?=$section_id?>">

    <div class="section__cont">
    <div class="container">
        <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?> 
            <!-- <div class="row justify-content-center"> -->
                <!-- <div class="col-auto"> -->
                    <div class="section__title text-divider">
                        <h1>
                            <?php echo ( $section_title ); ?> 
                        </h1>
                    </div>
                <!-- </div> -->
            <!-- </div> -->
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

        <?php if (($section_add_imgs == 'true' ) && ( $section_imgs )) : ?>
            <div class="row justify-content-between section__imgs">
                <?php foreach( $section_imgs as $image ) : ?>
                    <div class="col-12 col-lg d-flex justify-content-center section__imgs--img">
                        <a href="<?php echo esc_url( $image['url'] ); ?>">
                            <img class="img-fluid" src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if (($section_add_hotspots == 'true' ) && ( $section_hotspots )) : ?>
            <div class="row justify-content-between section__hotspots">
                <?php echo do_shortcode( $section_hotspots ); ?>
            </div>
        <?php endif; ?>
    </div>
    </div>
</section>
</div>
 <?php $section_id++ ;?>
