
<?php get_header();
$releated = new WP_Query(array(
    'category_name' => 'featured',
    'posts_per_page' => 4,
    'orderby' => 'rand',
    'post__not_in' => array(get_the_ID())
));
?>

<div class="single-wrapper">
    <div class="container">
        <!-- breadcrumb -->
        <ul class="single-breadcrum-list">
            <li> <a href="#">Home</a></li>
            <li>Article</li>
        </ul>
        <!-- content -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section class="single-content-block">
                    <div class="row">
                        <div class="col-md-4 col-lg-6">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                        </div>
                        <!-- description -->

                        <div class="col-md-7 col-lg-6">
                            <article class=" single-main-content page-content">
                                <h1><?php the_title(); ?></h1>
                                <p>
                                    <?php the_content(); ?>
                                </p>
                            </article>
                        </div>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>

        <section class="single-relate-block">
            <h3>Relate posts</h3>
            <?php if ($releated->have_posts()) : ?>
                <div class="row">
                    <?php while ($releated->have_posts()) : $releated->the_post(); ?>

                        <div class="col-6 col-md-3">
                            <div class="relate-item">
                                <a href="<?php the_permalink(); ?>" class="relate-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'product'); ?>" alt="">
                                </a>
                                <p class="relate-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </section>
    </div>
</div>
<?php get_footer(); ?>