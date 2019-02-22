<?php if (have_posts()) : while (have_posts()) : the_post();?>
    
    <h2><a href="<?php echo the_permalink();?>"><?php echo the_title();?></a></h2>
    <h3><?php the_category();?></h3>
    <p><?php the_content();?></p>

<?php endwhile; endif; ?>