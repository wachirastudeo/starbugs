
<?php get_header();
$releated = new WP_Query(array(
    'category_name' => 'promotion',
    'posts_per_page' => 3,
    'orderby' => 'rand',
    'post__not_in' => array(get_the_ID())
));
?>

<div class="single-wrapper">
    <div class="container">
        <!-- breadcrumb -->
        <ul class="single-breadcrum-list">
            <li> <a href="#">Home</a></li>
            <li>Promotion</li>
        </ul>
        <!-- content -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section class="single-content-block">
                    <div class="row">
                        <div class="col-12">
            <div class="single-promotion-image">

            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">

            </div>
                    </div>
                        <!-- description -->

                        <div class="col-12">
                            <article class=" single-main-content page-content">
                                <h1 class="single-promotion-title"><?php the_title(); ?></h1>
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
            <h3>Relate Promotion</h3>
            <?php if ($releated->have_posts()) : ?>
                <div class="row">
                    <?php while ($releated->have_posts()) : $releated->the_post(); ?>

                        <div class="col-6 col-md-4">
                            <div class="relate-item">
                                <a href="<?php the_permalink(); ?>" class="relate-image">
                                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
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