<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
		$args = array(
			'post_type'      => 'service',
			'posts_per_page' => 4,
			'orderby'        => 'title',
			'order'          => 'ASC',
		);
        ?>
        <?php
			$query = new WP_Query( $args );
			if ( $query -> have_posts() ){
				while ( $query -> have_posts() ) {
					$query -> the_post();
					echo '<h2>';
					the_title();
					echo '</h2>';
					if ( function_exists( 'get_field' ) ) {

						if ( get_field( 'services', get_the_ID() ) ) {
							echo '<p>';
							echo get_field( 'services', get_the_ID() );
							echo '</p>';
						}
					
					
					}

				}

				wp_reset_postdata();
				
			} 


			

		
		endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
