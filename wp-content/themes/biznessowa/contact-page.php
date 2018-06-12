<?php /* Template Name: Contact Page */ ?>
<?php
get_header();
?>
<div class="pdf-page">
    <div class="container">
        <div class="contact-form top-space-100">
            <h1>KONTAKT</h1>
            <div class="row top-space-100">
                <div class="col-sm-7">                  
                    <form id="ajax-contact"  method="post" action="contact-form-mail.php" role="form">
                        <div class="messages" id="form-messages"></div>
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Imię *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Podaj imię *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Nazwisko *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Podaj nazwisko *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Podaj email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Telefon *</label>
                                        <input id="form_phone" type="tel" name="phone"  class="form-control" placeholder="Podaj telefon *" required oninvalid="setCustomValidity('Plz enter your correct phone number ')"
                                               onchange="try {
                setCustomValidity('')
            } catch (e) {
            }">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Wiadomość *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Wiadomość do mnie *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-black" value="Wyślij wiadomość">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    <small class="text-muted"><strong>*</strong> Te pola są wymagane.</small>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="col-sm-5">
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-map-marker" style="font-size:16px;"></i>   Adres
                        </div>
                        <div class="col-sm-9">
                             ul.Grunwaldzka 12a<br> 32-005 Niepołomice
                        </div>
                    </div>

                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-phone"></i>   Telefon
                        </div>
                        <div class="col-sm-9">
                            +(48) 728 401 824
                        </div>
                    </div>
                    <div class="row col1">
                        <div class="col-sm-3">
                            <i class="fa fa-envelope"></i>   Email
                        </div>
                        <div class="col-sm-9">
                            <a href="mailto:biuro@biznessowa.pl">biuro@biznessowa.pl</a> <br> <a href="mailto:pomoc@biznessowa.pl">pomoc@biznessowa.pl</a>
                        </div>
                    </div><br>
                    <iframe width="100%" height="230" frameborder="0" style="border-radius:0px;" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d41004.583116594054!2d20.172898436284523!3d50.034097313815195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716479ca8b39b93%3A0x62bb828f099f0cc0!2s32-005+Niepo%C5%82omice!5e0!3m2!1spl!2spl!4v1527437631378"  style="border-radius:20px;"></iframe>
                </div>
            </div>

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
    Z<?php endif; ?>
</div>
</div>
<?php
get_footer();

