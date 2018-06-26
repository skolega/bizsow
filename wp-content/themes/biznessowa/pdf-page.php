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
                <h1 class="text-orange bolder-900">POBIERZ BEZPŁATNY PDF</h1>
                <h2>Dowiesz się: <br/></h2>
                <ul class="list-unstyled">
                    <li class="">Jak zacząć reklamować się w sieci, <br/></li>
                    <li class="">jak zacząć reklamę na facebooku, <br/></li>
                    <li class="">jak reklamować się na wyszukiwarkach,<br/></li>
                    <li class="">jak prowadzić fanpage na facebooku,</p></li>
                </ul><br/>
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#f3f3f3; clear:left; font:16px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                    <form action="https://biznessowa.us18.list-manage.com/subscribe/post?u=3f5360b509cca58f8b4773700&amp;id=68e9d2f8f6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                            <h2>Podaj email i ściągnij pdf</h2>
                            <div class="indicates-required"><span class="asterisk">*</span> na podany email wyślemy link do ściągnięcia pdf</div>
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Email</label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_3f5360b509cca58f8b4773700_68e9d2f8f6" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" value="Pobierz pdf" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array(); fnames[0] = 'EMAIL'; ftypes[0] = 'email'; fnames[1] = 'FNAME'; ftypes[1] = 'text'; fnames[2] = 'LNAME'; ftypes[2] = 'text'; fnames[3] = 'ADDRESS'; ftypes[3] = 'address'; fnames[4] = 'PHONE'; ftypes[4] = 'phone'; fnames[5] = 'BIRTHDAY'; ftypes[5] = 'birthday'; }(jQuery)); var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->

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

