<?php
/**
 * The template for displaying the archive loop.
 */

azimoo_content_nav( 'nav-above' );

            get_template_part('components/slider/slider');

if ( have_posts() ) :
?>
<div class="section__main indent__in archive__bg">

<div class="section__cont">
<div class="container">
	<div class="py-5">
		<h1 class="text-divider"><?php _e("Aktualności")?></h1>
	</div>
	<div class="row">
	<?php
		while ( have_posts() ) :
			the_post();

			/**
			 * Include the Post-Format-specific template for the content.
			 * If you want to overload this in a child theme then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part( 'content', 'index' ); // Post format: content-index.php
		endwhile;
	?>
	</div>
</div>
</div>
</div>
<?php
endif;

wp_reset_postdata();

azimoo_content_nav( 'nav-below' );
