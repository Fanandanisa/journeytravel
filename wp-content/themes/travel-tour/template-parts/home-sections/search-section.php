<?php if( class_exists( 'Wp_Travel_Engine' ) ) : ?>
	<?php if( get_theme_mod( 'advanced_search_section_display_option', true ) ) { ?>
			<div class="trip-search">
				<div class="container">
				<?php echo do_shortcode( '[Wte_Advanced_Search_Form]' ); ?>
				</div>
			</div>
	<?php } ?>
<?php endif;