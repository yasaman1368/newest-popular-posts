<?php
$args = [
    'post_type' => ['post', 'tech'],
    'post_status' => 'publish',
    'orderby' => 'ID',
    'order' => 'DESC',
    'posts_per_page' => 4
];
// The Query.
$the_query = new WP_Query($args);

// The Loop.
if ($the_query->have_posts()) {
    echo '<ul>';
    while ($the_query->have_posts()) {
        $the_query->the_post(); ?>

        <li><a href="<?php the_permalink() ?>"><?php the_title() ?>fddfg</a></li>


<?php }
    echo '</ul>';
} else {
    esc_html_e('Sorry, no posts matched your criteria.');
}
// Restore original Post Data.
wp_reset_postdata();
