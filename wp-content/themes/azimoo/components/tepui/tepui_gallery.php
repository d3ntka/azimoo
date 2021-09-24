<?php
$section_title = get_sub_field( 'section_title' );
$section_bg_color = get_sub_field( 'section_bg_clr' );
$tepui_gallery_imgs = get_sub_field( 'tepui_gallery_imgs' );
$tepui_gallery_title = get_sub_field( 'tepui_gallery_title' );
$indent = get_sub_field( 'indent' );



?>
<section class="section">
<?php if ($indent != 'none') :?>
    <div class="sections__shadow">
<?php else :?>
    <div class="no-margin">
<?php endif ?>

<div class="section__main indent__<?=$indent?> bg-<?=$section_bg_color?> <?php if ($section_bg == 'true') : echo("section__bg"); endif?>" id="section-<?=$section_id?>">

    <div class="section__cont">
        <div class="container">
            <?php if ( $section_title ) : ?> 
                <!-- <div class="row justify-content-center"> -->
                    <!-- <div class="col-auto"> -->
                        <div class="section__title text-divider <?php if ($section_bg_color == 'white') : echo("text-divider--dark"); endif?>">
                            <h2>
                                <?php echo ( $section_title ); ?> 
                            </h2>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            <?php endif; ?>


            <?php if ( have_rows( 'tepui_gallery_rptr' ) ) : 
                    $tepui_gallery_id = 0;
                    ?>
                    <div class="row tepui__gallery--row">

                <?php while ( have_rows( 'tepui_gallery_rptr' ) ) :
                    the_row(); 
                    ?>
                    


                    <?php
                    $tepui_gallery_imgs = get_sub_field( 'tepui_gallery_imgs' );
                    if ( $tepui_gallery_imgs ) : ?>
                        <div class="col-md-6 tepui__gallery">
                                <div class="tepui__gallery--title">
                                    <?php if ( $tepui_gallery_title = get_sub_field( 'tepui_gallery_title' ) ) : ?>
                                        <h3 class="centered">
                                            <?php echo esc_html( $tepui_gallery_title ); ?>
                                        </h3>
                                    <?php endif; ?>
                                </div>
                                <div class="tepui__gallery--imgs" id="tepui-gallery-<?=$tepui_gallery_id?>">
                                    <?php foreach( $tepui_gallery_imgs as $image ) : ?>
                                        <a href="<?php echo esc_url( $image['url'] ); ?>">
                                            <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>
                                        </a>
                                    <?php 
                                    endforeach; ?>
                                </div>
                        </div>
                    <?php endif; ?>

                    <script>
                        lightGallery(document.getElementById('tepui-gallery-<?=$tepui_gallery_id?>'), {
                            plugins: [lgThumbnail],
                            speed: 500,
                        });
                    </script>
                <?php 
                        $tepui_gallery_id++;

            endwhile; ?>
                    </div>

            <?php endif; ?>


        </div>
    </div>
</div>
</div>
</section>
 <?php $section_id++ ;?>
