<?php
/**
 * Template Name: Układ
 * Description: Page template full width.
 *
 */

get_header();

$section_id = 0;
$box_id = 0;

if( have_rows('layouts') ):

    while ( have_rows('layouts') ) : the_row();

        if( get_row_layout() == 'layouts_slider' ):
            get_template_part('components/slider/slider');
        
        elseif( get_row_layout() == 'layouts_cover' ):
            get_template_part('components/cover/cover');

        elseif( get_row_layout() == 'layouts_intro' ):
            include( locate_template( '/components/intro/intro-vars.php', false, false ) );
            include( locate_template( '/components/intro/intro.php', false, false ) );

        elseif( get_row_layout() == 'layouts_section' ):
            include( locate_template( '/components/section/section-vars.php', false, false ) );
            include( locate_template( '/components/section/section.php', false, false ) );
 
        elseif( get_row_layout() == 'layouts_box' ):
            include( locate_template( '/components/box/box-vars.php', false, false ) );
            include( locate_template( '/components/box/box.php', false, false ) );

            
        endif;

    endwhile;

// else :

endif;


get_footer();