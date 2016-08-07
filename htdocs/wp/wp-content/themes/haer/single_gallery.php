<?php get_header(); ?>
        This page is single_galley.php
<div id="haer-page-archive" class="haer-main">
            <div class="haer-main-inner">
                <div class="haer-container">
                    <div id="haer-mainvisual" class="haer-top-content">
                        <?php $my_query3 = new WP_Query( 'post-type=post&cat=2 showposts=1' ); ?>
                        <?php if ( $my_query3->have_posts() ) :while ( $my_query3->have_posts() ) : $my_query3->the_post(); ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(920,336)); ?></a>
                    </div>
                    <?php endwhile; endif; ?>
                </div><!-- /.haer-container-large -->
                <div class="haer-container-large">
                    <p class="haer-read">
                        <?php the_field("gallery-lead",$post->ID);?>
                    </p>
                    
                </div><!-- /.haer-container-large -->
                <div class="haer-container-large">
                    <div class="haer-area-profile">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-profile",$post->ID);?></h2>
                        <div class="haer-media">
                            <div class="haer-media-image haer-media-left">
                                <?php if( get_field('gallery−profile-images') ): ?>
                                    <img src="<?php the_field('gallery−profile-images'); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="haer-media-text">
                                <dl>
                                    <dt>
                                        <?php the_field("gallery−profile-name", $post->ID);?>
                                    </dt>
                                    <dd>
                                        <?php the_field("gallery−profile-text", $post->ID); ?>
                                    </dd>
                                </dl>
                                
                            </div>
                            
                      
                        </div><!-- /.haer-media -->
                         
                    </div><!-- /.haer-area-profile -->
                </div><!-- /.haer-container-large -->
                
<!-- from here photo -->
                
                 <div class="haer-container-large">
                    <div class="haer-area-profile">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-gallery",$post->ID);?></h2>
                        
                        <p><?php the_content($post->ID); ?></p>
                        
                        <p>
                            <?php echo do_shortcode(get_field('galleryphoto',$post->ID, false, false)); ?>
    
                            </p>
                    </div><!-- /.haer-area-gallery-->
                    
<!-- end photo -->
                     
                </div><!-- /.haer-container-large -->
                
                
                <div class="haer-container-large">
                    <div class="haer-area-movie">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-movie",$post->ID);?></h2>
                        <div class="haer-grid-container">
                            <div class="haer-grid-item haer-grid-item-col6">
                                <div id="haer-top-about" class="haer-top-content">
                                    <?php the_field("gallery-movie01", $post->ID);?>
                                </div>
                            </div>
                            <div class="haer-grid-item haer-grid-item-col6">
                                <div id="haer-top-magazine" class="haer-top-content">
                                     <?php the_field("gallery-movie02", $post->ID);?>
                                </div>
                            </div>
                        </div><!-- /.haer-grid-container -->
                    </div><!-- /.haer-area-movie -->
                </div><!-- /.haer-container-large -->
                <div class="haer-container-large">
                    <div class="haer-area-music">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-music",$post->ID);?></h2>
                        <div>
                            <div id="haer-top-magazine" class="haer-top-content">
                                     <?php the_field("gallery−soundcloud", $post->ID);?>
                                </div>
                        </div>
                    </div><!-- /.haer-area-music -->
                </div><!-- /.haer-container-large -->
                <div class="haer-container-large">
                    <div class="haer-area-works">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-works",$post->ID);?></h2>
                        <div class="haer-media">
                            <div class="haer-media-image haer-media-left">
                                <?php if( get_field('gallery-works-images01') ): ?>
                                    <img src="<?php the_field('gallery-works-images01'); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="haer-media-image haer-media-left">
                                <?php if( get_field('gallery-works−images02') ): ?>
                                    <img src="<?php the_field('gallery-works−images02'); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="haer-media-text">
                                <p><a href="./pdf/magazine_01.pdf" target="_blank">作品集をみる</a></p>
                            </div>
                        </div><!-- /.haer-media -->
                    </div><!-- /.haer-area-works -->
                </div><!-- /.haer-container-large -->
                
<!-- from here special -->                
                <div class="haer-container-large">
                    <div class="haer-area-special">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-special",$post->ID);?></h2>
                        <div class="haer-container">
                            <p>
                                <a href="<?php echo home_url(); ?>/pdf/magazine_01.pdf" target="_blank" class="haer-link-block">
                                    <?php if( get_field('gallery−special01') ): ?>
                                        <img src="<?php the_field('gallery−special01'); ?>" />
                                    <?php endif; ?>
                                </a>
                            </p>
                        </div><!-- /.haer-container -->
                        <div class="haer-container js-accordion">
                            <p>
                                <?php if( get_field('gallery−special02') ): ?>
    　　　　　　　　　　　　　　　　　　<img src="<?php the_field('gallery−special02'); ?>" />
　　　　　　　　　　　　　　　　　　　　<?php endif; ?></p>
                        </div><!-- /.haer-container -->
                        
                        <div class="haer-container">
                                <div class="haer-container">
                                    <div class="haer-media">
                                        <div class="haer-media-image haer-media-left"><img src="https://placehold.jp/300x300.png"></div>
                                        <div class="haer-media-text">
                                            <div class="haer-container">
                                                <dl>
                                                    <dt>ーーーーあなたにとって演劇とは？</dt>
                                                    <dd>
                                                        <p>賢治さん : ゴーシュは音の失敗手団におばあさんにしつぶますます。それからどう気の毒たますという大物たん。愉快たましのましもたすると扉の生目のうちをもぜひ生意気たたて、それでもセロをなっれんたたら。しすぎこれは舌が早くたが前の狸の猫会をとら第十療たちのかっこうと歩きていました。ねずみは前いけてやろない。</p>
                                                        <p>漱石さん : 何は翌日はたしてある表裏界というのの後を出来でしょだ。余計場合に周旋痛はすでにその仕事ですないなりを知れけれどもいるませをは発展解せでなて、まだにはしですなでない。</p>
                                                    </dd>
                                                </dl>
                                            </div><!-- /.haer-container -->
                                        </div>
                                    </div><!-- /.haer-media -->
                                </div><!-- /.haer-container -->
                                <div class="haer-container">
                                    <div class="haer-media">
                                        <div class="haer-media-text">
                                            <div class="haer-container">
                                                <dl>
                                                    <dt>ーーーーあなたにとって演劇とは？</dt>
                                                    <dd>
                                                        <p>賢治さん : ゴーシュは音の失敗手団におばあさんにしつぶますます。それからどう気の毒たますという大物たん。愉快たましのましもたすると扉の生目のうちをもぜひ生意気たたて、それでもセロをなっれんたたら。しすぎこれは舌が早くたが前の狸の猫会をとら第十療たちのかっこうと歩きていました。ねずみは前いけてやろない。</p>
                                                        <p>漱石さん : 何は翌日はたしてある表裏界というのの後を出来でしょだ。余計場合に周旋痛はすでにその仕事ですないなりを知れけれどもいるませをは発展解せでなて、まだにはしですなでない。</p>
                                                    </dd>
                                                </dl>
                                            </div><!-- /.haer-container -->
                                        </div>
                                        <div class="haer-media-image haer-media-right"><img src="https://placehold.jp/300x300.png"></div>
                                    </div><!-- /.haer-media -->
                                </div><!-- /.haer-container -->
                                <div class="haer-container">
                                    <div class="haer-media">
                                        <div class="haer-media-text">
                                            <div class="haer-container">
                                                <dl>
                                                    <dt>ーーーーあなたにとって演劇とは？</dt>
                                                    <dd>
                                                        <p>賢治さん : ゴーシュは音の失敗手団におばあさんにしつぶますます。それからどう気の毒たますという大物たん。愉快たましのましもたすると扉の生目のうちをもぜひ生意気たたて、それでもセロをなっれんたたら。しすぎこれは舌が早くたが前の狸の猫会をとら第十療たちのかっこうと歩きていました。ねずみは前いけてやろない。</p>
                                                        <p>漱石さん : 何は翌日はたしてある表裏界というのの後を出来でしょだ。余計場合に周旋痛はすでにその仕事ですないなりを知れけれどもいるませをは発展解せでなて、まだにはしですなでない。</p>
                                                    </dd>
                                                </dl>
                                            </div><!-- /.haer-container -->
                                        </div>
                                    </div><!-- /.haer-media -->
                                </div><!-- /.haer-container -->
                            </div>
                    </div><!-- /.haer-area-special -->
                </div><!-- /.haer-container-large -->
                
<!-- end special -->
                <div class="haer-container-large">
                    <div class="haer-area-movie">
                        <h2 class="haer-heading haer-heading-lv2"><?php the_field("name-shop",$post->ID);?></h2>
                        <p class="haer-u-tac"><a href="#">monophonic orchestra のグッズも販売中。</a></p>
                    </div><!-- /.haer-area-movie -->
                </div><!-- /.haer-container-large -->
            </div><!-- /.haer-main-inner -->
        </div><!-- /.haer-main -->
        <?php get_footer(); ?>