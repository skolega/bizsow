<?php
/*
Template Name: Archives
*/
get_header(); ?>
<div class="container">
    <div class="page-title">
        <h1>Ostatnio napisane</h1>
    </div>
    <?php $my_query = new WP_Query('showposts=6'); ?>
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
                        <img src="./wp-content/themes/biznessowa/img/love.png" claass="img"/>
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
    </div>
</div>
<div class="section7 top-space-100">
    <h1>Podejmij działanie <a href="/zarabiaj" class="btn-green btn-send btn-success">CHCĘ ZARABIAĆ</a></h1>
</div>
<?php
get_footer();

