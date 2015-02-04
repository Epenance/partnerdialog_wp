<?php get_header(); ?>
<div id="frontSlider">
  <?php putRevSlider("frontslider") ?>
  <!-- <div id="colorOverlay"></div> -->
</div>
<div id="frontFeatures">
  <h2>
    Kompetencer
  </h2>
  <div id="featuresContainer">
      <?php dynamic_sidebar( 'feature-box' ); ?>
  </div>
</div>

<?php include("getContacted.php") ?>
  <main>
    <?php get_sidebar(); ?>
    <?php
    $children = wp_list_pages('title_li=&echo=0&child_of=' . $post->ID);
    $ancestor = $post->ancestors;
    ?>
    <div id="mainContent" <?php if(!$children && !$ancestor) { echo 'class="sidebar_disabled"'; } ?>>
      <?php if (have_posts()) : while (have_posts()) : the_post();?>
            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
      <?php endwhile; endif; ?>
    </div>
    <div class="cf"></div>
  </main>
<?php get_footer(); ?>
