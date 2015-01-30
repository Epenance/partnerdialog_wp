<?php get_header(); ?>
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
