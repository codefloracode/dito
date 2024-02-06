<?php 
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while (have_posts()) :
            the_post();
        ?>

        <div class='cover-img' style="background-image: url('<?php echo get_field('cover_img'); ?>');">
            <?php if(get_field('cover_video')): ?>
                <div class="videowrap">
                    <video autoplay mute loop><source src="<?php echo get_field('cover_video'); ?>" type="video/mp4"></video>
                </div>
                <div class="videowrap mobile">
                    <video autoplay mute loop><source src="<?php echo get_field('cover_video_mobile'); ?>" type="video/mp4"></video>
                </div>
            <?php endif; ?>
        </div>
        <div><?php the_content(); ?></div>
        <?php
            $gallery = get_field('gallery');
            if( $gallery ): ?>
                <div class='gallery'>
                    <?php if ($gallery['big_img_1'] && $gallery['small_img_1']) : ?>
                        <div class='bigsmall'>
                            <div class='bigimg' style="background-image: url('<?php echo $gallery['big_img_1']; ?>');"></div>
                            <div class='smallimg' style="background-image: url('<?php echo $gallery['small_img_1']; ?>');"></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($gallery['fullwidth_img_1']) : ?>
                        <div class='fullwidth'  style="background-image: url('<?php echo  $gallery['fullwidth_img_1']; ?>')"></div>
                    <?php endif; ?>
                    <?php if ($gallery['big_img_2'] && $gallery['small_img_2']) : ?>
                        <div class='bigsmall reverse'>
                            <div class='bigimg' style="background-image: url('<?php echo  $gallery['big_img_2']; ?>')"></div>
                            <div class='smallimg' style="background-image: url('<?php echo  $gallery['small_img_2']; ?>')"></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($gallery['fullwidth_img_2']) : ?>
                        <div class='fullwidth'  style="background-image: url('<?php echo $gallery['fullwidth_img_2']; ?>')"></div>
                    <?php endif; ?>
                    <?php if ($gallery['big_img_3'] && $gallery['small_img_3']) : ?>
                        <div class='bigsmall'>
                            <div class='bigimg' style="background-image: url('<?php echo  $gallery['big_img_3']; ?>')"></div>
                            <div class='smallimg' style="background-image: url('<?php echo  $gallery['small_img_3']; ?>')"></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($gallery['fullwidth_img_3']) : ?>
                        <div class='fullwidth'  style="background-image: url('<?php echo $gallery['fullwidth_img_3']; ?>')"></div>
                    <?php endif; ?>
                    <?php if($gallery['big_img_4'] && $gallery['small_img_4']): ?>
                        <div class='bigsmall reverse'>
                            <div class='bigimg' style="background-image: url('<?php echo $gallery['big_img_4']; ?>')"></div>
                            <div class='smallimg' style="background-image: url('<?php echo $gallery['small_img_4']; ?>')"></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($gallery['fullwidth_img_4']) : ?>
                        <div class='fullwidth'  style="background-image: url('<?php echo $gallery['fullwidth_img_4']; ?>')"></div>
                    <?php endif; ?> 
                </div>
            <?php endif; ?>
        <?php

        endwhile;
        ?>

    </main>
</div>

<?php get_footer(); ?>