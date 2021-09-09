<?php
/**
 * The template for displaying content in the single.php template.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="news__tags">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ' ', 'azimoo' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ' ', 'azimoo' ) );
			if ( '' != $tag_list ) :
				$utility_text = __( '%2$s', 'azimoo' );
			elseif ( '' != $category_list ) :
				$utility_text = __( 'This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'azimoo' );
			endif;

			printf(
				$utility_text,
				$category_list,
				$tag_list,
				esc_url( get_the_permalink() ),
				the_title_attribute( 'echo=0' ),
				get_the_author(),
				esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) )
			);
		?>
	</div>
	<header class="entry-header d-flex justify-content-between align-items-center">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( $posts_date = get_field( 'posts_date' ) ) : ?>
			<?php echo esc_html( $posts_date ); ?>
		<?php endif; ?>
		
		<?php
			if ( 'post' === get_post_type() ) :
		?>

		<?php
			endif;
		?>
	</header><!-- /.entry-header -->
	<div class="entry-content">
		<?php
			// if ( has_post_thumbnail() ) :
			// 	echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
			// endif;

			the_content();

			wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'azimoo' ) . '</span>', 'after' => '</div>' ) );
		?>
		<?php
			$posts_gallery = get_field( 'posts_gallery' );
			if ( $posts_gallery ) : ?>
				<!-- <div class="row"> -->
					
					<!-- <div class="col-md-3"> -->
					<div class="row news__gallery" id="news-gallery-<?php the_ID(); ?>">
						<?php foreach( $posts_gallery as $image ) : ?>
							<a class="col-md-6 col-xl-3" href="<?php echo esc_url( $image['url'] ); ?>">
							<div>
								<img src="<?php echo esc_url( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>

							</div>
							</a>
						<!-- </div> -->
						<?php endforeach; ?>
				<!-- </div> -->
				</div>

			<?php endif; ?>
	</div><!-- /.entry-content -->

	<?php
		edit_post_link( __( 'Edit', 'azimoo' ), '<span class="edit-link">', '</span>' );
	?>

	<footer class="entry-meta">

	<script>
		lightGallery(document.getElementById('news-gallery-<?php the_ID(); ?>'), {
			plugins: [lgThumbnail],
			speed: 500,
		});
	</script>

		<?php
			// get_template_part( 'author', 'bio' );
		?>
	</footer><!-- /.entry-meta -->
</article><!-- /#post-<?php the_ID(); ?> -->
