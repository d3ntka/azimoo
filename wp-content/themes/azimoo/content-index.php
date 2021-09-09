<?php
/**
 * The template for displaying content in the index.php template.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-12' ); ?>>
	<div class="card box-highlight-wrap">
		<div class="box-highlight"></div>
		<div class="box-highlight2"></div>
	<div class="news__tags">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ' ', 'azimoo' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ' ', 'azimoo' ) );
			if ( '' != $tag_list ) :
				$utility_text = __( '%2$s', 'azimoo' );
			elseif ( '' != $category_list ) :
				$utility_text = __( '%1$s', 'azimoo' );
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
		<header class="card-body d-flex justify-content-between align-items-center">
			<h2 class="card-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'azimoo' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			<?php if ( $posts_date = get_field( 'posts_date' ) ) : ?>
				<?php echo esc_html( $posts_date ); ?>
			<?php endif; ?>
			<?php
				if ( 'post' === get_post_type() ) :
			?>
				
			<?php
				endif;
			?>
		</header>
		<div class="card-body">
			<div class="card-text entry-content">
				<?php
					if ( has_post_thumbnail() ) :
						echo '<div class="post-thumbnail">' . get_the_post_thumbnail( get_the_ID(), 'large' ) . '</div>';
					endif;


						the_excerpt();

				?>
				<?php
			$posts_gallery = get_field( 'posts_gallery' );
			if ( $posts_gallery ) : ?>
				<!-- <div class="row"> -->
					
					<!-- <div class="col-md-3"> -->
					<div class="row news__gallery news__gallery--archive" id="news-gallery-<?php the_ID(); ?>">
						<?php foreach( $posts_gallery as $image ) : ?>
							<a class="col-md-6 col-xl-3" href="<?php the_permalink(); ?>">
							<div>
								<img src="<?php echo esc_url( $image['sizes']['medium'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>"/>

							</div>
							</a>
						<!-- </div> -->
						<?php endforeach; ?>
				<!-- </div> -->
				</div>

			<?php endif; ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . esc_html__( 'Pages:', 'azimoo' ) . '</span>', 'after' => '</div>' ) ); ?>
			</div><!-- /.card-text -->
			<footer class="entry-meta">
				<!-- <a href="<?php echo get_the_permalink(); ?>" class="btn btn-outline-secondary"><?php esc_html_e( 'more', 'azimoo' ); ?></a> -->
			</footer><!-- /.entry-meta -->
		</div><!-- /.card-body -->
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->
