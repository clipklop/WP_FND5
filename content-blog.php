<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<h6 class="subheader">Written by <?php the_author(); ?></a> <?php the_time('F j, Y'); ?></h6>

<article>

  <?php the_content(); ?>

  <p><a class="button" href="<?php the_permalink(); ?>">Read more <i class="fi-arrow-right large"></i></a></p>

</article>
  
<hr>

<?php endwhile; endif; ?>