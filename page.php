<?php get_header(); ?><!--Page html/php-->

      <div class="row">
        <div class="col-sm-8 blog-main">

          <?php if(have_posts()) : ?>
              <?php while(have_posts()) : the_post(); ?>
          <div class="blog-post">
            <h2 class="blog-post-title">
                <?php the_title(); ?>
            </h2>
            <!-- php for content text on posts located at Main Page -->
            <?php the_content(); ?>
          </div><!-- /.blog-post -->

        <?php endwhile; ?>
        <?php else : ?>
          <p><?php __('No Page Found'); ?></p>
        <?php endif; ?>

        </div><!-- /.blog-main -->
<!--Contains widgets and footer -->
  <?php get_footer(); ?>
