<?php if(in_category(array('1'))): ?>

<?php get_template_part('single_sampleGallery'); ?>

<?php elseif(in_category(array('2'))): ?>
<?php get_template_part('single_gallery'); ?>

<?php else: ?>
<?php get_template_part('single_gallery'); ?>

<?php endif; ?>

<?php /*?>
1=未分類
2=Gallery

<?php */?>