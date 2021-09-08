<?php get_header(); ?>

    <div class="main">      
      <div class="container">
        <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.svg" height="128" width="196"/>
   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title();?></h2>
        <p><?php the_content();?></p>
<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
      </div>
    </div>
    <div class="jumbotron">
      <div class="container"> 
      
      <h1>
          <?php _e("stay connected", "test"); ?>
        </h1>
        <p>
          <?php _e("Receive weekly insights from industry insiders.", "test"); ?>
        </p>
        <a class="btn" href="">Join</a>
      </div>
    </div>
    

 <?php get_footer(); ?>