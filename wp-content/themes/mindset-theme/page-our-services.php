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
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page');

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

        // Query for service posts
        $args = array(
            'post_type'      => 'service',
            'posts_per_page' => -1,
            'orderby'        => 'title',
            'order'          => 'ASC',
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                echo '<a href="#' . esc_attr(get_the_ID()) . '">' . esc_html(get_the_title()) . '</a>';
            }
            wp_reset_postdata();
        }

        // $args = array(
        //     'post_type'      => 'service',
        //     'posts_per_page' => -1,
        //     'orderby'        => 'title',
        //     'order'          => 'ASC',
        // );
        // $query = new WP_Query($args);
        // if ($query->have_posts()) {
        //     while ($query->have_posts()) {
        //         $query->the_post();
        //         echo '<h2 id="' . esc_attr(get_the_ID()) . '">';
        //         the_title();
        //         echo '</h2>';
        //         if (function_exists('get_field') && get_field('services')) {
        //             echo '<p>';
        //             echo get_field('services');
        //             echo '</p>';
        //         }
        //     }
        //     wp_reset_postdata();
        // }

        // Output work categories
        

        $terms = get_terms(
            array(
                'taxonomy' => 'service_type',
            )
        );
        if ($terms && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                echo '<h2>' . esc_html($term->name) . '</h2>';

                // Query for service posts under this service type
                $args = array(
                    'post_type'      => 'service',
                    'posts_per_page' => -1,
                    'orderby'        => 'title',
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'service_type',
                            'field'    => 'slug',
                            'terms'    => $term->slug,
                        ),
                    ),
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        echo '<h3>' . esc_html(get_the_title()) . '</h3>';
                        if (function_exists('get_field') && get_field('services')) {
                            echo '<p>' . get_field('services') . '</p>';
                        }
                    }
                    wp_reset_postdata();
                }
            }
        }

    endwhile; // End of the loop.
	get_template_part('template-parts/work-categories');
    ?>

</main><!-- #primary -->

<?php
get_sidebar();
get_footer();
