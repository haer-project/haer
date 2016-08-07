<?php get_header(); ?>
        This page is single_sampleGallery.php
<div id="haer-page-gallery" class="haer-main">
            <div class="haer-main-inner">
                <div class="haer-container">
                    <div id="haer-mainvisual" class="haer-top-content">
                        <?php $my_query3 = new WP_Query( 'post-type=post&cat=1&showposts=1' ); ?>
                        <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(920,336)); ?></a>
                    </div>
                    <?php endwhile; endif; ?>
                </div><!-- /.haer-container-large -->
                
                
                 <div class="haer-container-large">
                    <div class="haer-area-profile">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-gallery",$post->ID);?></h2>
                        
                        <h2 class="haer-heading haer-heading-lv2">動画を見せる場合</h2>
                        <?php echo do_shortcode(get_field('unite_gallery01',$post->ID, false, false)); ?>
                        <h2 class="haer-heading haer-heading-lv2">グリッドで写真を見せる場合</h2>
                        <?php echo do_shortcode(get_field('unite_gallery02',$post->ID, false, false)); ?>
                        <h2 class="haer-heading haer-heading-lv2">１枚ずつ写真を見せる場合</h2>
                        <?php echo do_shortcode(get_field('unite_gallery03',$post->ID, false, false)); ?>
    
                    </div><!-- /.haer-area-gallery-->
                    </div><!-- /.haer-container-large -->
<!-- end photo -->
                     
                
            </div><!-- /.haer-main-inner -->
        </div><!-- /.haer-main -->
        <?php get_footer(); ?>