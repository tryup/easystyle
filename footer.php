<footer id="footer">
  <div class="copyright">
    <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo fobnn_get_option('years'); ?> <b><?php bloginfo('name'); ?></b></p>
    <p>Powered by <b>WordPress</b>. | <?php echo get_option( 'zh_cn_l10n_icp_num' );?></p>
  </div>
  <div style="display:none;"> <?php echo stripslashes(fobnn_get_option('tongji')); ?> </div>
</footer>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/skel.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/util.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
<?php wp_footer(); ?>
</body>
</html>
