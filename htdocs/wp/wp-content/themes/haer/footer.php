　　　　　<footer>
            <div class="haer-footer-inner">
                <div class="haer-container">
                    <ul class="haer-icon-share">
                        <li><a href="https://twitter.com/haer_zine"><img src="https://placehold.jp/60x60.png" alt="" target="_blank"></a></li>
                        <li><a href="https://www.facebook.com/haermagazine/"><img src="https://placehold.jp/60x60.png" alt="" target="_blank"></a></li>
                        <li><a href="https://www.instagram.com/eripope/"><img src="https://placehold.jp/60x60.png" alt="" target="_blank"></a></li>
                    </ul>
                </div><!-- /.haer-container -->
                <p class="haer-copylight"><small>Copyrights&copy; haer All Right Reseved.</small></p>
            </div><!-- /.haer-footer-inner -->
        </footer>

<?php if (is_home() || is_front_page()) {?>
     </div><!-- /.haer-view-02 -->
    </div><!-- /haer-wrapper -->
<?php } else{ ?>
   </div><!-- /haer-wrapper -->
<?php } ?>

   　 </div><!-- /.haer-view-02 -->
    </div><!-- /haer-wrapper -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.1.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.cookie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>