
<?php get_header(); ?>
<div class="haer-main">
            <div class="haer-main-inner">
                <div class="haer-container">
                    
                   <div id="haer-mainvisual" class="haer-top-content">
                        <?php $my_query3 = new WP_Query( 'post-type=post&cat=2&showposts=1' ); ?>
                    
    <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                       <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(930,330)); ?></a>
                    </div>
                <?php endwhile; endif; ?>
                </div>
                
                
                
                <div class="haer-container">
                    <div class="haer-grid-container">
                        <div class="haer-grid-item haer-grid-item-col6">
                            <div id="haer-top-about" class="haer-top-content">
                                 <?php $my_query3 = new WP_Query( 'page_id=11' ); ?>
                    
    <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                   
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(450,210)); ?></a>
                            </div>
                             <?php endwhile; endif; ?> 
                        </div>
                        
                        <?php $my_query3 = new WP_Query( 'page_id=14' ); ?>
                    
    <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                        
                        <div class="haer-grid-item haer-grid-item-col6">
                            <div id="haer-top-magazine" class="haer-top-content">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(450,210)); ?></a>
                            </div>
                            <?php endwhile; endif; ?> 
                        </div>
                    </div>
                </div>
                <div class="haer-container">
                    <div class="haer-grid-container">
                        
                        <div class="haer-grid-item haer-grid-item-col4">
                            <div id="haer-top-archive" class="haer-top-content">
                                <?php $my_query3 = new WP_Query( 'page_id=17' ); ?>
                    
    <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(290,210)); ?></a>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                        
                        
                        <div class="haer-grid-item haer-grid-item-col4">
                            <div id="haer-top-shop" class="haer-top-content">
                                <?php $my_query3 = new WP_Query( 'page_id=20' ); ?>
                    
    <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                                <a href="https://haer.stores.jp/" target="_blank"><?php the_post_thumbnail(array(290,210)); ?></a>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                        <div class="haer-grid-item haer-grid-item-col4">
                            <div id="haer-top-blog" class="haer-top-content">
                                <?php $my_query3 = new WP_Query( 'page_id=23' ); ?>
                    
    <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                               <a href="https://www.facebook.com/haermagazine/" target="_blank"><?php the_post_thumbnail(array(290,210)); ?></a>
                            </div>
                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div><!-- /.haer-main-inner -->
        </div><!-- /.haer-main -->
<?php get_footer(); ?>