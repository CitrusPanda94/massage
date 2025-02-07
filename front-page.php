<?php get_header() ?>

<style type="text/css">
    .img-team { 
        background-image:url('<?php echo get_theme_mod( 'team_background_image' );?>'); 
    }

    .img-service { 
        background-image:url('<?php echo get_theme_mod( 'service_background_image' );?>'); 
    }
</style>

    <section class="container content">
        <div class="row">
            <div class="col hero">
                <h3>Quality therapeutic massage by qualified therapists to get you moving and feeling great.</h3>
            </div>
        </div>

        <div class="row">
            <div class="col span-1-of-2 box">
                <p>Our massage clinic offers expert massage therapy, herbal medicine and complimentary body therapies
                    by qualified therapists in a safe, professional and confortable environment.
                </p>
                <p>
                    We offer a range of complimentary massage therapies including sports massage, pregnancy
                    massage, myofascal release, remedial massage and theraputic massage for chronic pain and
                    muscular-skeletal injuries to support your wellness.
                </p>
            </div>
            <div class="col span-1-of-2 box dates">
                <p>Mon - Fri 9am - 7pm<br>Sat - Sun 12pm - 7pm</p>
            </div>
        </div>
    </section>

     <section class="container-team content">
        <div class="row">
            <div class="col span-1-of-2 box img-team">
            <a href="http://localhost:3000/massage/our-team/" class="btn" rel="noreferrer">
            </a>
            </div>
            <div class="col span-1-of-2 box">
                <h3 class="heading">Our Team</h3>
                <p class="team-text">
                    <?php $blurb = get_theme_mod('massage_team_message_blurb');
                    if($blurb || is_customize_preview()):
                    echo wpautop($blurb);
                    endif; ?>
                </p>
                <a href="http://localhost:3000/massage/our-team/" class="btn" rel="noreferrer">View Our Team</a>
            </div>
        </div>
    </section>

     <section class="container-services content">
        <div class="row">
            <div class="col span-1-of-2 box">
                <h3 class="heading">Our Services</h3>
                <p class="services-text">
                    <?php $blurb = get_theme_mod('massage_service_message_blurb');
                    if($blurb || is_customize_preview()):
                    echo wpautop($blurb);
                    endif; ?>
                </p>
                <a href="http://localhost:3000/massage/service/" class="btn" rel="noreferrer">View Our Services</a>
            </div>
            <div class="col span-1-of-2 box img-service">
            </div>
        </div>
    </section>

<?php get_footer() ?>

