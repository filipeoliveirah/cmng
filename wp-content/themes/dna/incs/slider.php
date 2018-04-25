<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators-->
  <div class="visible-lg">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>
  </div>

  <!-- Wrapper for slides -->
  
  <div class="carousel-inner" role="listbox">
    <? 
      $inc = 1;
      $wp_query = new WP_Query();
      $args = array( 
        'category_name' => 'destaque',
        'posts_per_page'=> 3
      );
      $wp_query->query($args);
      while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
    <div class="item <? if($inc == 1): echo 'active'; endif; ?>">
      <?php the_post_thumbnail('full'); ?>
      <div class="carousel-caption">
      <h2><?php the_title(); ?></h2>
      </div>
    </div>
    <?
    $inc++;
    endwhile;
    ?> 
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left fas fa-arrow-left" aria-hidden="true"></span>
    <span class="sr-only">Voltar</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-left fas fa-arrow-right" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>