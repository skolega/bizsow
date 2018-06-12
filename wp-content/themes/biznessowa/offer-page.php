<?php /* Template Name: Offer Page */ ?>
<?php
get_header();
?>
<div class="section2 col-md-12" id="section2 offer">
    <div class="container">
        <div class="menu-section-2 top-space-100">
            <div class="row text-center">
                <div class="col-md-3 btn-sec2" data-slide="3">Strony WWW</div>
                <div class="col-md-3 section2_active btn-sec2" data-slide="1">AdWords</div>
                <div class="col-md-3 btn-sec2" data-slide="2">Facebook</div>
                <div class="col-md-3 btn-sec2" data-slide="4">Grafika</div>
            </div>
        </div>
        <hr/>
    </div>
    <div id="slide1" class="slide">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="bolder-900">REKLAMA NA WYSZUKIWARKĘ</h1>
                        <ul>
                            <li>Natychmiastowe rezultaty</li>
                            <li>Płatność za kliknięcie</li>
                            <li>Mierzenie wynikiów</li>
                            <li>Kontrola wydatków</li>
                            <li>Kierowanie na właściwego odbiorcę</li>
                            <li>Zwrot z inwestycji</li>
                        </ul>
                        <a href="<?php echo get_site_url(); ?>/zarabiaj" class="btn-red">CHCĘ ZARABIAĆ</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $query_args = array(
            'post_type' => 'adwords',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($query_args);
        ?>
        <div class="row  top-space-100">
            <div class="container">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="row">
                            <?php
                            $image = get_field('obrazek');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                        </div>
                        <div class="row post_title">
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                                <?php echo get_field('opis'); ?></a>
                        </div>
                        <div class="row">
                            <div class="col-md-12 portfolio-desc">
                                <?php if (get_field('data')): ?>
                                    <?php
                                    $date = get_field('date', false, false);
                                    $date = new DateTime($date);
                                    ?>
                                    <p>Data : <?php echo $date->format('d m Y'); ?></p>
                                <?php else: ?>
                                    <?php echo(''); ?>
                                <?php endif; ?>
                                <?php if (get_field('firma')): ?>
                                    <p>Firma : <?php echo(get_field('firma')); ?></p>
                                <?php else: ?>
                                    <?php echo(''); ?>
                                <?php endif; ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class=" text-danger">więcej...</a>
                            </div>
                        </div>
                    </div> 
                <?php endwhile; ?>
            </div>
        </div>
    </div>

    <div id="slide2" class="slide hidden">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="bolder-900">REKLAMA NA FACEBOOKU</h1>
                        <ul>
                            <li>Właściwe targetowanie</li>
                            <li>Kontrola wydatków</li>
                            <li>Kontrola zasięgów</li>
                            <li>Kampania zorientowana na cel</li>
                            <li>Elastyczność kampani</li>
                            <li>Tania kampania</li>
                        </ul>
                        <a href="<?php echo get_site_url(); ?>/zarabiaj" class="btn-red">CHCĘ ZARABIAĆ</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $query_args = array(
            'post_type' => 'facebook',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($query_args);
        ?>
        <div class="row  top-space-100">
            <div class="container">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="row">
                            <?php
                            $image = get_field('obrazek');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
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
                                <?php if (get_field('data')): ?>
                                    <?php echo the_field('data'); ?>
                                <?php else: ?>
                                    <?php echo('-'); ?>
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
    </div>

    <div id="slide3" class="slide hidden">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="bolder-900">TWORZENIE STRON INTERNETOWYCH</h1>
                        <ul>
                            <li>Strony oparte o CMS</li>
                            <li>Responsywne strony</li>
                            <li>skuteczne SEO</li>
                            <li>instalowalne pluginy</li>
                        </ul>
                        <a href="<?php echo get_site_url(); ?>/zarabiaj" class="btn-red">CHCĘ ZARABIAĆ</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $query_args = array(
            'post_type' => 'strony',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($query_args);
        ?>
        <div class="row  top-space-100">
            <div class="container">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="row">
                            <?php
                            $image = get_field('obrazek');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
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
                                <?php if (get_field('data')): ?>
                                    <?php echo the_field('data'); ?>
                                <?php else: ?>
                                    <?php echo('-'); ?>
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
    </div>

    <div id="slide4" class="slide hidden">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="bolder-900">KREACJA WIZUALNA</h1>
                        <ul>
                            <li>Logotypy</li>
                            <li>Ulotki</li>
                            <li>Plakaty</li>
                            <li>Wizytówki</li>
                            <li>Banery reklamowe</li>
                            <li>Kreacja wizualna</li>
                        </ul>
                        <a href="<?php echo get_site_url(); ?>/zarabiaj" class="btn-red">CHCĘ ZARABIAĆ</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $query_args = array(
            'post_type' => 'grafika',
            'posts_per_page' => 3
        );
        $my_query = new WP_Query($query_args);
        ?>
        <div class="row  top-space-100">
            <div class="container">
                <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
                    <div class="col-md-4">
                        <div class="row">
                            <?php
                            $image = get_field('obrazek');

                            if (!empty($image)):
                                ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
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
                                <?php if (get_field('data')): ?>
                                    <?php echo the_field('data'); ?>
                                <?php else: ?>
                                    <?php echo('-'); ?>
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
    </div>

</div>
<div class="col-md-12">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            echo '<div class="row top-space-32">';
            echo '<div class="col-md-12 text-bright">';
            the_content();
            echo '</div>';
            echo '</div>';
        endwhile;
    else:
        ?>
        <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
</div>
<?php
get_footer();

