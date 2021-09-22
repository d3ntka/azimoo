<?php
/**
 * Template Name: Układ
 * Description: Page template full width.
 *
 */

get_header();

$section_id = 0;
$box_id = 0;

get_template_part('components/box/box-list');

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
 
        elseif( get_row_layout() == 'layouts_contact' ):
            include( locate_template( '/components/contact/contact-vars.php', false, false ) );
            include( locate_template( '/components/contact/contact.php', false, false ) );

        elseif( get_row_layout() == 'layouts_tepui_section' ):
            include( locate_template( '/components/tepui/tepui-section-vars.php', false, false ) );
            include( locate_template( '/components/tepui/tepui-section.php', false, false ) );
    
        elseif( get_row_layout() == 'layouts_tepui_gallery' ):
            get_template_part( '/components/tepui/tepui_gallery');

        elseif( get_row_layout() == 'layouts_tepui_specs' ):
            get_template_part( '/components/tepui/tepui_specs');

            
        endif;

    endwhile;

// else :

endif;


get_footer();