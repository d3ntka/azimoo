<section class="box">

    <?php if ($indent != 'none') :?>
        <div class="sections__shadow">
    <?php else :?>
        <div>
    <?php endif ?>

            <div class="box__main indent__<?=$indent?> bg-<?=$box_bg_color?>" id="box-<?=$box_id?>">

                <div class="box__cont">
                    <div class="container">
                        <?php if ( $box_title = get_sub_field( 'box_title' ) ) : ?>
                        <!-- <div class="row justify-content-center"> -->
                        <!-- <div class="col-auto"> -->
                        <div class="box__title text-divider">
                            <h1>
                                AZIMOO <i>box</i>
                                <?php echo ( $box_title ); ?>
                            </h1>
                        </div>
                        <!-- </div> -->
                        <!-- </div> -->
                        <?php endif; ?>

                        <?php 
                        if ( $box_imgs ) : ?>
                        <div class="glide" id="box-slider-<?=$box_id?>">
                            <div class="glide__track" data-glide-el="track">
                                <ul class="glide__slides">
                                    <?php foreach( $box_imgs as $image ) : 
                                    $url = $image['url'];
                                    $title = $image['title'];
                                    $alt = $image['alt'];
                                    $caption = $image['caption'];
                                    ?>
                                    <li class="glide__slide">
                                        <div class="slider__img" style="background-image: url('<?=$image['url']; ?>')">
                                            AZIMOO box <?=$image['title']; ?>
                                            <?=$image['caption']; ?>
                                        </div>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                        <?php endif; ?>

                        <div>
                            Dysponujemy xxx możliwościami aranżacji unitu

                        </div>

                        <div>
                            <?php if ( have_rows( 'box_colored_btns' ) ) : ?>
                            <div class="row">
                                <?php while ( have_rows( 'box_colored_btns' ) ) :
                                the_row(); ?>

                                <?php if ( $box_colored_btn = get_sub_field( 'box_colored_btn' ) ) : ?>
                                <div class="col">
                                    <?php echo esc_html( $box_colored_btn ); ?>
                                </div>
                                <?php endif; ?>

                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>


                        <?php if ( $box_text = get_sub_field( 'box_text' ) ) : ?>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <p>
                                    <?php echo $box_text; ?>
                                </p>
                            </div>
                        </div>
                        <?php endif; ?>

                        <p>AZIMOO box <?php echo ( $box_title ); ?> jest kompatybilny z poniższymi podwoziami:</p>


                        
                        <?php if ( have_rows( 'box_chassis' ) ) : ?>
                            <div class="box__chassis">
                                <div class="row">

                                <?php while ( have_rows( 'box_chassis' ) ) :
                                    the_row(); ?>
                                    <div class="col">
                                        <?php if ( $chassis_manufacturer = get_sub_field( 'chassis_manufacturer' ) ) : ?>
                                            <div class="box__chassis--manufacturer">
                                                <?php echo esc_html( $chassis_manufacturer ); ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if ( have_rows( 'chassis_models' ) ) : ?>
                                            <?php while ( have_rows( 'chassis_models' ) ) :
                                                the_row(); ?>
                                                
                                                <?php if ( $chassis_model = get_sub_field( 'chassis_model' ) ) : ?>
                                                    <div class="box__chassis--model">
                                                        <?php echo $chassis_model; ?>
                                                    </div>
                                                <?php endif; ?>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    
                                    </div>
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
window.addEventListener('load', function() {
    new Glide('#box-slider-<?=$box_id?>', {
        type: 'carousel',
        gap: 0,
        autoplay: 5000,
        hoverpause: true,
    }).mount();
});
</script>


<?php $box_id++ ;?>