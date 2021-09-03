<section class="section">
<?php if ($indent != 'none') :?>
    <div class="sections__shadow">
<?php else :?>
    <div class="no-margin">
<?php endif ?>

<div class="section__main indent__<?=$indent?> bg-<?=$section_bg_color?> <?php if ($section_bg == 'true') : echo("section__bg"); endif?>" id="section-<?=$section_id?>">

    <div class="section__cont">
        <div class="container">
            <?php if ( $section_title = get_sub_field( 'section_title' ) ) : ?> 
                <!-- <div class="row justify-content-center"> -->
                    <!-- <div class="col-auto"> -->
                        <div class="section__title text-divider <?php if ($section_bg_color == 'white') : echo("text-divider--dark"); endif?>">
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
            <?php 
            if (($section_add_imgs == 'true' ) && ( $section_imgs )) : ?>
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

            <?php if (($section_add_shortcode == 'true' ) && ( $section_shortcode )) : ?>
                <div class="row justify-content-center section__shortcode">
                    <?php echo do_shortcode( $section_shortcode ); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
</section>
 <?php $section_id++ ;?>
