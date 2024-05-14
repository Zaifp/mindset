<?php
// Query a random testimonial
$args = array(
    'post_type'      => 'fwd-testimonial',
    'posts_per_page' => 1,
    'orderby'        => 'rand', // Get random testimonial
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="testimonial-random">
            <h4><?php the_title(); ?></h4>
            <p><?php the_content(); ?></p>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>