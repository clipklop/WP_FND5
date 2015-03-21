<!-- Rendering <header> -->
<?php get_header(); ?>

<div class="panel featured dropshadow">
  <div class="row">
      <div class="large-12 columns">
      <h1><a href="<?php bloginfo('url'); ?>/blog">Blog</a></h1>
      
      </div>
  </div>        
</div>

<div class="row">
  <div class="large-8 medium-12 columns"> <!-- Main Content Left -->

<!-- Recent Blog posts -->

  <div class="row">
    <div class="large-12 columns" role="content">

      <?php get_template_part('content', 'single'); ?>

    </div>
  </div>

  </div>    <!-- Main Content Left END--> 

<!-- Sidebar right -->
<?php get_sidebar(); ?>
<!--End Sidebar right -->

<!-- Rendering <footer> -->
<?php get_footer(); ?>