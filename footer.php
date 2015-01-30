<footer>
  <div class="sectionContainer">

      <?php if ( is_active_sidebar( 'footer-box-1' ) ) : ?>
        <section>
          <?php dynamic_sidebar( 'footer-box-1' ); ?>
        </section><!-- Footer box 1 -->
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-box-2' ) ) : ?>
        <section>
          <?php dynamic_sidebar( 'footer-box-2' ); ?>
        </section><!-- Footer box 2 -->
      <?php endif; ?>

      <?php if ( is_active_sidebar( 'footer-box-3' ) ) : ?>
        <section>
          <?php dynamic_sidebar( 'footer-box-3' ); ?>
        </section><!-- Footer box 3 -->
      <?php endif; ?>
    <small>Copyright © 2015 All right reserved Partner Dialog A/S</small>
    <div class="cf"></div>
  </div>
</footer>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/fancy.js"></script>
<?php wp_footer(); ?>
</body>
</html>
