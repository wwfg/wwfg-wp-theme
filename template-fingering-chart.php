<?php
/*
Template Name: Fingering Chart
*/

<?php get_header(); ?>

<div id="main" class="row">

	<div id="content" class="col8">

		<div id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?>>

			<h1><?php the_title(); ?></h1>

			<div class="post-bodycopy cf">
				<?php the_content(); ?>
				<?php wp_link_pages( array(
					'before' => __( '<p class="post-pagination">Pages:', 'montezuma' ),
					'after' => '</p>'
				) ); ?>

				<p>There will be a generated fingering chart here! Yay!</p>
			</div>

			<?php edit_post_link( __( 'Edit', 'montezuma' ) ); ?>

		</div>

	</div>

	<div id="widgetarea-one" class="col4">
		<?php dynamic_sidebar( 'Widget Area ONE' ); ?>
	</div>

</div>

<?php get_footer(); ?>