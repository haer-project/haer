<?php
/*
Template Name: [page-magazine]
*/
?>

<?php get_header(); ?>
This page is page-magazine.php
 <div id="haer-page-magazine" class="haer-main">
                <div class="haer-main-inner">
                    <div class="haer-grid-container haer-grid-container-small">
                        
                        <?php $my_query3 = new WP_Query( 'post-type=post&cat=3&showposts=5' ); ?>
                        <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                        
                        <div class="haer-grid-item haer-grid-item-col4">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(250,300)); ?></a>
                    </div>
                        <?php endwhile; endif; ?>
                    </div><!-- /.haer-grid-container -->
                    
                </div><!-- /.haer-main-inner -->
            </div><!-- /.haer-main -->
<?php get_footer(); ?>