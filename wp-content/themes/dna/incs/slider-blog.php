<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
  </ol>-->

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <?php the_post_thumbnail('full', array('class' => 'aligncenter')); ?>
      <div class="carousel-caption">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>
  </div>
</div>