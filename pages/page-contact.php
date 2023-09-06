<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<div class="contact-wrapper">

    <section class="contact-header">
        <div class="container">
            <h1>CONTACT US</h1>
            <p>Hi, welcome to Starbugs.</p>
            <p> What can we do for you?</p>
        </div>
    </section>
    <section class="contact-content">
        <article class="page-content">

            <div class="container">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                ?>
                        <h1> <?php the_title(); ?> </h1>

                    <?php
                        the_post();
                        the_content();
                    }
                } else {
                    ?>
                    <h1>not found</h1>

                <?php
                }

                ?>

            </div>
        </article>
    </section>
    <!-- contact form -->
    <section class="contact-form">
        <div class="container">
            <h3>
                Contact Form
            </h3>
            <p>We will get back to you as soon as possible</p>
            <?php echo do_shortcode('[contact-form-7 id="56" title="Contact us form"]') ?>

        </div>

    </section>
</div>


<?php get_footer(); ?>