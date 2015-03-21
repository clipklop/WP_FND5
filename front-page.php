<!-- Rendering <header> -->
<?php get_header(); ?>

<div class="panel featured dropshadow">
  <div class="row">
      <div class="large-12 columns">
      <h1>Built with the magic of Foundation</h1>
      
      <div class="row">
        <div class="large-4 medium-4 columns">
          <i class="fi-html5 main"></i>
      <h3><a href="http://foundation.zurb.com/docs">Coded with HTML5</a></h3>
    </div>
        <div class="large-4 medium-4 columns">
          <i class="fi-css3 main"></i>
          <h3><a href="http://github.com/zurb/foundation">Styled with CSS3</a></h3>
        </div>
        <div class="large-4 medium-4 columns">
          <i class="fi-torsos main"></i>
          <h3><a href="http://twitter.com/foundationzurb">Presented by @treehouse</a></h3>
        </div>
      </div>        
    </div>
  </div>

</div>

<div class="row">
  <div class="large-8 medium-12 columns"> <!-- Main Content Left -->

<!-- Recent Blog posts -->

  <div class="row">
    <div class="large-12 columns" role="content">

<?php get_template_part('content'); ?>

    </div>
  </div>

  </div>    <!-- Main Content Left END--> 

<!-- Sidebar right -->
<?php get_sidebar(); ?>
<!--End Sidebar right -->

<!-- Rendering <footer> -->
<?php get_footer(); ?>