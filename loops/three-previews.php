<h3>getting loop...</h3>
<?php
$args = array(
    'posts_per_page' => 2
) ;
$my_query = new WP_Query($args) ;

?>
<?php if ($my_query->have_posts()) : ?>
    <section class="tour-previews">
        <?php   $args = array(
		    'post_type'                 =>  'tours'
		    'posts_per_page'   => '3'
                ) ;

                while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <article class="preview">
                <h3><?php the_title()  ?></h3>
                <p><?php  the_excerpt(); ?></p>
                <p><a href="<?php echo get_permalink()  ?>">read more</a></p>
            </article> 
        <?php endwhile; ?>
    </section> <!-- ENDS .tour-previews  -->
<?php endif; ?>
