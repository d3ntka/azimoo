<section class="contact">
<div class="sections__shadow">
<div class="section__main indent__<?=$indent?> bg-<?=$section_bg_color?>" id="section-<?=$section_id?>">

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

        <div class="row justify-content-center contact__info">
            <div class="col-md-6 d-flex justify-content-center">
                <div>
                    <div class="contact__info--address">
                    <?php if ( $options_address = get_field( 'options_address', 'options' )) : ?>
                        <?php echo $options_address; ?>
                    <?php endif; ?>
                    </div>
                    <?php get_template_part('components/contact/dealers'); ?>
                </div>
            </div>
            <div class="col-md-5">
                <?php if (($section_add_hotspots == 'true' ) && ( $section_hotspots )) : ?>
                    <div class="row justify-content-center section__hotspots">
                        <?php echo do_shortcode( $section_hotspots ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</section>
 <?php $section_id++ ;?>
