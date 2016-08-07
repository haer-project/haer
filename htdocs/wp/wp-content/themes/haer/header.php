<!DOCTYPE html>

<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>haer</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<?php wp_head(); ?>
</head>
<body>
    <div class="haer-wrapper">
        

<?php if (is_home() || is_front_page()) {?>
    <div class="haer-view-01"></div>
        <div class="haer-view-02">
            <header>

<?php } else{ ?>
    <header>
<?php } ?>
        
            <div class="haer-header-inner">
                <h1 class="haer-logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_01.png" alt="haer"></a></h1>
                <nav class="haer-nav-global">
                    <ul>
                        <li><a href="<?php echo home_url(); ?>/archive.php" class="haer-page-about">About</a></li>
                        <li><a href="<?php echo home_url(); ?>/?page_id=14" class="haer-page-magazine">Magazine</a></li>
                        <li><a href="<?php echo home_url(); ?>/?page_id=17" class="haer-page-archive">Archive</a></li>
                        <li><a href="https://www.facebook.com/haermagazine/" class="haer-page-blog" target="_blank">Blog</a></li>
                        <li><a href="https://haer.thebase.in/" class="haer-page-shop" target="_blank">Shop</a></li>
                        <li><a href="<?php echo home_url(); ?>/contact.php" class="haer-page-contact">Contact</a></li>
                    </ul>
                </nav>
            </div><!-- /.haer-header-inner -->
        </header>
        <!--/▲headerはここまで-->
      