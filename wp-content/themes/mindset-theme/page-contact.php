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
		while ( have_posts() ) :
			the_post(); ?>
		

		<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<div class="entry-content">
            <?php 
               if ( function_exists ( 'get_field' ) ) {
            
                   if ( get_field( 'physical_address' ) ) {
                       the_field( 'physical_address' );
                   }
            
                   if ( get_field( 'email_address' ) ) {
                       echo '<p>' . esc_attr( get_field( 'email_address' ) ) . '</p>';
                   }
                       
				}
            ?>
         </div>


			

		<?php endwhile; // End of the loop.
		?>

	</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
