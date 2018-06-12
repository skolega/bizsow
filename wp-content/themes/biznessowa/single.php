<?php
get_header();
?>
<div class="container">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            echo '<div class="row top-space-32 image-post">';
            echo '<div class="col-md-12">';
            the_post_thumbnail('large');
            echo '</div>';
            echo '</div>';
            echo '<h1 class="row top-space-100 bolder-900">';
            echo '<div class="col-md-12">';
            the_title();
            echo '</div>';
            echo '</h1>';
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
<div class="section7 top-space-100">
    <h1>Podejmij działanie <a href="/zarabiaj" class="btn-green btn-send btn-success">CHCĘ ZARABIAĆ</a></h1>
</div>
<?php
get_footer();

