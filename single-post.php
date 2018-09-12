<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if (et_get_option('divi_integration_single_top') <> '' && et_get_option('divi_integrate_singletop_enable') == 'on') echo(et_get_option('divi_integration_single_top')); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
						<div class="et_post_meta_wrapper">
							<h1 class="entry-title balance-text"><?php the_title(); ?></h1>

							<div class="post-meta">
									<div><?php echo get_the_date() ?></div>
									<?php
									$categories = wp_get_post_categories( get_the_ID() );
									foreach($categories as $c) {
										$cat = get_category( $c );
										$cat_id = get_cat_ID( $cat->name );
										echo '<div>'.$cat->name.'</div>';
									} ?>
								
								
							</div>

					<div class="entry-content">
					<?php
						do_action( 'et_before_content' );

						the_content();

						wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>
					</div> <!-- .entry-content -->

				</div>

				</article> <!-- .et_pb_post -->

			<?php endwhile; ?>

		</div> <!-- #content-area -->

	</div> <!-- .container -->
	
</div> <!-- #main-content -->

<?php echo do_shortcode('[et_pb_section global_module="4029"][/et_pb_section]');?>

<?php

get_footer();
