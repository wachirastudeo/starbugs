<?php get_header(); ?>
<div class="search-wrapper">
    <!-- search box -->
    <section class="menu-searchbox">
        <div class="container">


            <?php echo get_search_form() ?>
        </div>
    </section>
    <!-- content -->

    <div class="menu-content">
        <div class="container">
            <div class="menu-type">
                <h3>คำที่คุณค้นหา : <?php echo get_search_query() ?></h3>

                <div class="menu-list">

                <?php if(have_posts()): ?>
                <?php  while(have_posts()): the_post(); ?>
                <div class="menu-item">
                        <img class="menu-image" src="<?php echo get_the_post_thumbnail_url() ?> " alt="">
                        <p class="menu-name"><?php the_title(); ?></p>
                        <p class="menu-description"><?php the_content(); ?></p></p>
                        <div class="menu-action">
                            <div class="row">
                                <!-- stock -->
                                <div class="col-6">
                                    <p class="menu-stock"><?php the_field('stock_status'); ?></p>
                                </div>
                                <!-- price -->
                                <div class="col-6">
                                    <p class="menu-price"><?php the_field('price'); ?> บาท</p>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endwhile;?>
                <?php endif; ?>

                    
                   
                </div>
            </div>
        </div>

    </div>
</div>
</div>

<?php get_footer(); ?>