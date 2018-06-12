<?php

get_header();?>
<div class="section4">
<div class="container">
    <div class="page-title">
        <h1>Ostatnio napisane</h1>
    </div>
    
    <?php 
    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : '1';
            $args = array(
                'nopaging' => false,
                'paged' => $paged,
                'posts_per_page' => '6',
                'post_type' => 'post',
            );
            $my_query = new WP_Query($args); ?>
    <div class="row">
        <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="col-md-4">
                <div class="row post_img">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="row post_title">
                    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                        <?php the_title(); ?></a>
                </div>
                <div class="row post_exc">
                    <?php the_excerpt(); ?>
                </div>
                <div class="row post_more">
                    <div class="col-md-6">
                        <img src="<?php echo get_site_url(); ?>/wp-content/themes/biznessowa/img/love.png" claass="img"/>
                        <?php if (get_field('quantity')): ?>
                            <?php echo the_field('quantity'); ?>
                        <?php else: ?>
                            <?php echo(0); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class=" text-danger">więcej...</a>
                    </div>
                </div>
            </div> 
        <?php endwhile; ?>
        <?php previous_posts_link('« Nowsze wpisy');
                next_posts_link('Starsze wpisy »', $my_query->max_num_pages); ?>
    </div>
</div>
</div>
<?php get_footer();

