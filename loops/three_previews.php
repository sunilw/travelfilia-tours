<?php
$args = array(
    'post_type'               => 'tour',
    'posts_per_page' => 3
) ;
$my_query = new WP_Query($args) ;

 if ($my_query->have_posts()) : ?>
    <section class="tour-previews">
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="preview">
                <h3><?php the_title()  ?></h3>
                <p><?php  the_excerpt(); ?></p>
                <p><a href="<?php echo get_permalink()  ?>">read more</a></p>
            </article>
        <?php endwhile; ?>
    </section> <!-- ENDS .tour-previews  -->
<?php endif; ?>
<h3>loop done</h3>
