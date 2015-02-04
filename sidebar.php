<?php
  $children = wp_list_pages('title_li=&echo=0&child_of=' . $post->ID);
  $ancestor = $post->ancestors;
?>
<nav id="subMenu" <?php if(!$children && !$ancestor) { echo 'class="hidden"'; } ?>>
  <div id="subMenuToggler">
    <span class="icons-menu"></span>
  </div>
  <div id="mob_wrap">
    <?php $parent_page = get_top_parent_page_id($post->ID); ?>
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
      <h1><?php echo get_the_title( $parent_page ); ?> </h1>
    <?php endwhile; endif; ?>
    <?php
    ?>
    <ul>
      <?php //wp_list_pages("child_of=$post->ID&depth=1&title_li="); ?>

      <?php wp_list_pages("child_of=$parent_page&title_li="); ?>
    </ul>
  </div>
</nav>
