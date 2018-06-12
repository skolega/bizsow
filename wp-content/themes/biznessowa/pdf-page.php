<?php /* Template Name: get-pdf-page */ ?>
<?php
get_header();
?>
<div class="pdf-page">
    <div class="container">
        <div class="row top-space-100">
            <div class="col-md-6">
                <img src="<?php echo get_site_url(); ?>/wp-content/themes/biznessowa/img/book-mockup.png"/>
            </div>
            <div class="col-md-6 text-left">
                <h1 class="text-orange">POBIERZ <strong>BEZPŁATNY</strong> PDF</h1>
                <p>Nauczysz się: <br/>
                    1) jak zacząć reklamować się w sieci, <br/>
                    2) jak zacząć reklamę na facebooku, <br/>
                    3) jak reklamować się na wyszukiwarkach,<br/>
                    4) jak prowadzić fanpage na facebooku,</p>
                <form action="newsletter.php">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Wyślemy link do pobrania na podany adres email</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                </form>

            </div>
        </div>
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
</div>
<div class="section7 top-space-100">
    <h1>Podejmij działanie <a href="<?php echo get_site_url(); ?>/zarabiaj" class="btn-green btn-send btn-success">CHCĘ ZARABIAĆ</a></h1>
</div>
<?php
get_footer();

