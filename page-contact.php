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
            
            <p>We love hearing from our customers, all questions, comments and feedback are always welcome. They help us to ensure that every Starbugs experience you have is the best it can be.</p>
            <h4>Customer Care</h4>
            <p>You can call us at +66 0000 0000 from 9.00 a.m. – 6.00 p.m. Monday to Sunday. Alternatively, you can send us an email to customer@coffeecoffee.co.th, and we’ll do our best to reply as quickly as possible.</p>


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