<?php
$section_title = get_sub_field( 'section_title' );
$section_bg = get_sub_field( 'section_bg' );
$section_bg_color = get_sub_field( 'section_bg_clr' );
$indent = get_sub_field( 'indent' );



?>
<section class="section">
<?php if ($indent != 'none') :?>
    <div class="sections__shadow">
<?php else :?>
    <div class="no-margin">
<?php endif ?>

<div class="section__main indent__<?=$indent?> bg-<?=$section_bg_color?> <?php if ($section_bg == 'true') : echo("tepui__bg"); endif?>" id="section-<?=$section_id?>">

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

            <?php if ( have_rows( 'tepui_specs_attrs' ) ) : ?>
                <div class="row justify-content-center md-justify-content-between">

                <?php while ( have_rows( 'tepui_specs_attrs' ) ) :
                    the_row(); ?>
                    
                    <?php if ( $tepui_specs_attr = get_sub_field( 'tepui_specs_attr' ) ) : ?>
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 col-xxl-auto tepui__specs__attr mt-5">
                            <?php echo $tepui_specs_attr ; ?>
                        </div>
                    <?php endif; ?>

                <?php endwhile; ?>
                </div>

            <?php endif; ?>


            <?php if ( have_rows( 'tepui_specs_table' ) ) : ?>
                <div class="row g-0 tepui__specs__table--cont">

                <?php while ( have_rows( 'tepui_specs_table' ) ) :
                    the_row(); ?>
                    <div class="col-md-6 col-xl-4 tepui__specs__table">
                    <?php if ( $title = get_sub_field( 'title' ) ) : ?>
                        <div class="tepui__specs__table--title">
                            <?php echo esc_html( $title ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ( have_rows( 'desc' ) ) : ?>
                        <div class="tepui__specs__table--desc">
                        <table>
                            <tbody>
                                    <?php while ( have_rows( 'desc' ) ) :
                                        the_row(); ?>
                                        <tr>
                                            <?php if ( $table_name = get_sub_field( 'table_name' ) ) : ?>
                                                <td>
                                                    <?php echo esc_html( $table_name ); ?>
                                                </td>
                                            <?php endif; ?>
    
                                            <?php if ( $table_value = get_sub_field( 'table_value' ) ) : ?>
                                                <td>
                                                    <?php echo esc_html( $table_value ); ?>
                                                </td>
    
                                            <?php endif; ?>
                                        </tr>

                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                    </div>

                <?php endwhile; ?>
                </div>

            <?php endif; ?>

        </div>
    </div>
</div>
</div>
</section>
 <?php $section_id++ ;?>
