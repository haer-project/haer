<?php
/*
Template Name: [page-archive]
*/
?>

<?php get_header(); ?>
This page is page-archive.php
 <div id="haer-page-archive" class="haer-main">
                <div class="haer-main-inner">
                    <div class="haer-container">
                        
                        <?php $my_query3 = new WP_Query( 'post-type=post&cat=2&offset=1&showposts=−1' ); ?>
                        <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                        
                        <div class="haer-archive-content">
                            <div class="haer-thumb-archive">
                       　　　　　　 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(930,330)); ?></a>
                            </div>
                            <div class="haer-heading-archive">
                                <dl>
                                    <dt><?php the_title();?></dt>
                                    <dd><?php the_field("gallery−profile-name", $post->ID);?></dd>
                                </dl>
                                <p><?php the_field("gallery−date", $post->ID);?></p>
                            </div><!-- /.haer-heading-archive -->
                        </div>
                        <?php endwhile; endif; ?>
                    </div><!-- /.haer-container -->
                    
                </div><!-- /.haer-main-inner -->
            </div><!-- /.haer-main -->
<?php get_footer(); ?>