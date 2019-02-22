<div>
  <?php if(is_front_page()):?>
    <div id="blog-categorias">
      <a href="#" class="botao_padrao">Arquivos</a>
      <a href="#" class="botao_padrao">Categorias</a>
    </div>
    <div id="grid-postagens"> <!-- postagens mais recentes -->

  <?php

    $args_post1 = array(
    	'paged'                  => '1',
    	'posts_per_page'         => '1',
    );
    $args_post2 = array(
    	'paged'                  => '2',
    	'posts_per_page'         => '1',
    );
    $args_post3 = array(
    	'paged'                  => '3',
    	'posts_per_page'         => '1',
    );

    // The Query - Posts

    $query_post1 = new WP_Query( $args_post1 );
    $query_post2 = new WP_Query( $args_post2 );
    $query_post3 = new WP_Query( $args_post3 );

    if ($query_post1->have_posts() ) : while ( $query_post1->have_posts() ) : $query_post1->the_post();?>

      <div id="postagem-atual" style="background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; object-fit: cover;">
        <div class="">
          <h4><?php echo get_the_time('d \of F \of Y'); ?></h4>
          <a href="<?php echo get_the_permalink(); ?>" class="link-ler_mais">ler mais</a>
        </div>
        <h3><?php echo get_the_title(); ?></h3>
      </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>

    <?php if ($query_post2->have_posts() ) : while ( $query_post2->have_posts() ) : $query_post2->the_post();?>
      <div id="post2" class="postagem" style="background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; object-fit: cover;">
        <div class="">
          <h4><?php echo get_the_time('d \of F \of Y'); ?></h4>
          <a href="<?php echo get_the_permalink(); ?>" class="link-ler_mais">ler mais</a>
        </div>
        <h3><?php echo get_the_title(); ?></h3>
      </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>

    <?php if ($query_post3->have_posts() ) : while ( $query_post3->have_posts() ) : $query_post3->the_post();?>
      <div id="post3" class="postagem" style="background: url(<?php echo get_the_post_thumbnail_url();?>); background-size: cover; object-fit: cover;">
        <div class="">
          <h4><?php echo get_the_time('d \of F \of Y'); ?></h4>
          <a href="<?php echo get_the_permalink(); ?>" class="link-ler_mais">ler mais</a>
        </div>
        <h3><?php echo get_the_title(); ?></h3>
      </div>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  </div>
  <div class="row centralizado">
    <a href="#" id="link-visitar_blog" class="marginTop"><h3>Visitar Blog</h3></a>
  </div>

  <?php elseif(is_home()): 
    
    $args = array(
    	'paged'                  => '1',
    	'posts_per_page'         => '10',
    );
    
    $query_blog = new WP_Query( $args );

    if ($query_blog->have_posts() ) : while ( $query_blog->have_posts() ) : $query_blog->the_post();?>
    
    <h2><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></h2>
    <h3><?php echo the_category();?></h3>
    <p><?php echo the_excerpt();?></p>

    <br>
    <?php endwhile; wp_reset_postdata(); endif; ?>
  <?php endif; ?>
</div>
