<?php /* Template Name: Contact Us */

get_header();
?>
<?php if (have_posts()) {
    while (have_posts()) {
        the_post();
?>
        <div class="w3l-contact-10 py-5" id="contact">
            <div class="form-41-mian pt-lg-4 pt-md-3 pb-md-4">
                <div class="container">
                    <div class="heading">
                        <h3 class="category-title mb-3">Contact us </h3>
                        <p class="mb-md-5 mb-4">If you have a question regarding our services, feel free
                            to contact us using the form below.</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 form-inner-cont">

                            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="signin-form">
                                <?php the_content(); ?>
                            </form>
                        </div>

                        <div class="col-lg-4 contacts-5-grid-main section-gap mt-lg-0 mt-5">
                            <div class="contacts-5-grid">
                                <h3 class="section-title-left mb-4"> Advertise with us</h3>
                                <div class="map-content-5">
                                    <section class="tab-content">
                                        <div class="contact-type">
                                            <div class="address-grid mb-4">
                                                <h6>Address</h6>
                                                <p><?php echo get_theme_mod('advertise_address_settings'); ?></p>
                                            </div>
                                            <div class="address-grid mb-4">
                                                <h6>Email Address</h6>
                                                <a href="mailto:mail@example.com" class="link1"><?php echo get_theme_mod('advertise_email_settings'); ?></a>

                                            </div>
                                            <div class="address-grid">
                                                <h6>Phone Number</h6>
                                                <a href="tel:+12 324-016-695" class="link1"><?php echo get_theme_mod('advertise_phone_settings'); ?></a>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- //contacts-5-grid -->
            </div>
        </div>
<?php }
} ?>

<?php
get_footer();
