			<?php
				$options_footer_logo = get_field( 'options_footer_logo', 'options' );
				$options_footer_contact = get_field( 'options_footer_contact', 'options' );
				$options_address = get_field( 'options_address', 'options' );
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						// get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-auto">
						<div class="footer__logo">
						<?php
							if ( $options_footer_logo ) : ?>
								<img class="img-fluid" src="<?php echo esc_url( $options_footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $options_footer_logo['alt'] ); ?>" />
							<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="row justify-content-around footer__text">
					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							echo '<div class="col-md-4 col-lg-3 d-flex justify-content-center">';

							echo '<div><div class="footer__title">';
							_e( 'Mapa strony', 'azimoo' );
							echo '</div>';
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => '',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-start">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
							echo '</div></div>';
						endif;

					?>
					<div class="col-md-4 col-lg-3 d-flex justify-content-center">
						<div>
							<div class="footer__title"><?php _e( 'Skontaktuj się z nami', 'azimoo' ); ?></div>
							<div>
							<?php if ( $options_footer_contact ) : ?>
								<?php echo $options_footer_contact; ?>
							<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-lg-3 d-flex justify-content-center">
						<div>
						<div class="footer__title"><?php _e( 'Tutaj jesteśmy', 'azimoo' ); ?></div>
						<div>
						<?php if ( $options_address ) : ?>
							<?php echo $options_address; ?>
						<?php endif; ?>
						</div>
						</div>
					</div>
				</div><!-- /.row -->
				<div class="row justify-content-center footer__copy">
					<div class="col-md-auto d-flex justify-content-center">
						<div><?php _e( 'AZIMOO expedition vehicles wykonane na zamowienie', 'azimoo' ); ?> <br>
						<?php _e( 'Wszytkie prawa zastrzeżone.', 'azimoo' ); ?></div>
					</div>
				</div>
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
