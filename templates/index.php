<?php
/*
Template Name: Home
*/
 get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="cover" style="background-image: url('<?php echo get_field('cover_img'); ?>')">
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

            <article id="post-<?php the_ID(); ?>" class="post-cover" style="background-image: url('<?php echo get_field('cover_img'); ?>')">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </article>

        <?php
            endwhile;
            wp_reset_postdata(); // Reset the query
        else :
            echo 'No posts found.';
        endif; ?>

    </main>
</div>

<?php get_footer(); ?>
