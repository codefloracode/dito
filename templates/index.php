<?php
/*
Template Name: Home
*/
 get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div id="primary-container" class="scrollable-content">
            <div class="scroll-bullets"></div>
            <div class="cover post-cover" style="background-image: url('<?php echo get_field('cover_img'); ?>')">
                <?php if(get_field('cover_video')): ?>
                    <div class="videowrap">
                        <video autoplay muted loop><source src="<?php echo get_field('cover_video'); ?>" type="video/mp4"></video>
                    </div>
                    <div class="videowrap mobile">
                        <video autoplay muted loop><source src="<?php echo get_field('cover_video_mobile'); ?>" type="video/mp4"></video>
                    </div>
                <?php endif; ?>
                <div class="description"><?php echo get_field('description'); ?></div>
            </div>

            <?php 
            
            $args = array(
                'post_type' => 'post', // Fetch posts
                'posts_per_page' => 999, // Number of posts to display
            );
            
            $custom_query = new WP_Query($args);

            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) :
                    $custom_query->the_post();
                    ?>

                <article id="post-<?php the_ID(); ?>">
                    <a href="<?php the_permalink(); ?>" class="post-cover" style="background-image: url('<?php echo get_field('cover_img'); ?>')">
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    </a>
                </article>

            <?php
                endwhile;
                wp_reset_postdata(); // Reset the query
            else :
                echo 'No posts found.';
            endif; ?>
        </div>

    </main>
</div>

<?php get_footer(); ?>
