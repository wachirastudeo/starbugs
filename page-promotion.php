<?php get_header(); ?>

<!-- promotion -->

<div class="promotion-wrapper">
    <div class="container">
        <section class="main-promotion-banner">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full' ) ?>" alt="">
        </section>
        <section class="main-promotion-content">
           <article class="page-content">
          <?php if(have_posts( )):?>
            <?php while(have_posts()):the_post();?>
            <?php  the_content();?>
            <?php endwhile; ?>
            <?php endif; ?>

           </article>
        </section>
        <!-- share -->
        <section class="main-promtion-share">
            <p>Share to your friends</p>
            <ul class="sharing-list">
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-facebook.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-line.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() ?>/img/icon-twitter.png" alt="">
                    </a>
                </li>

            </ul>
        </section>

        <section class="main-promotion-relate">
            <div class="row">
                <div class="col-md-4">
                    <div class="related-item">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/promotion-banner1.jpg" alt="">

                        </a>
                        <h4><a href="">Buy 1 Get 1 Free</a></h4>
                        <p>12/07/2021</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="related-item">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/promotion-banner2.jpg" alt="">

                        </a>
                        <h4><a href="">Buy 1 Get 1 Free</a></h4>
                        <p>12/07/2021</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="related-item">

                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/img/promotion-banner3.jpg" alt="">

                        </a>
                        <h4><a href="">Buy 1 Get 1 Free</a></h4>
                        <p>12/07/2021</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>


<?php get_footer(); ?>