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
                            <a href="<?php echo esc_url( $image['url'] ); ?>" class="lightbox" data-group="lb-<?=$section_id?>">
                                <img class="img-fluid" src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ( have_rows( 'tepui_hotspot_slider' ) ) : ?>
                <div class="glide" id="tepui-glide">
                    <div class="glide__track" data-glide-el="track">
                        <ul class="glide__slides">
                            <?php while ( have_rows( 'tepui_hotspot_slider' ) ) :
                                the_row(); ?>
                                    <?php if ( $tepui_slider_shortcode = get_sub_field( 'tepui_slider_shortcode' ) ) : ?>
                                        <li class="glide__slide"><?php echo do_shortcode( $tepui_slider_shortcode ) ; ?></li>
                                    <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                    </div>
                    <div class="glide__bullets glide__bullets--tepui" data-glide-el="controls[nav]">
                        <?php while ( have_rows( 'tepui_hotspot_slider' ) ) :
                                the_row(); ?>
                            <button class="glide__bullet" data-glide-dir="=<?=$i;?>"></button>
                            <?php $i++ ;?>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>



        </div>
    </div>
</div>
</div>
</section>

<script>
window.addEventListener('load', function () {
  new Glide('#tepui-glide',{
    type: 'carousel',
    gap: 0,
    autoplay: 5000,
    hoverpause: true,
  }).mount();
});
</script>
 <?php $section_id++ ;?>
