<?php 
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) :
            the_post();
        ?>

        <img class='cover-img' src="<?php echo get_field('cover_img'); ?>" />
        <?php
            the_content();

        endwhile;
        ?>

    </main>
</div>

<?php get_footer(); ?>