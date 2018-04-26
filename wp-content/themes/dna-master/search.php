<?php
	get_header();
	include_once("incs/menu.php");
?>

<div class="blog-content">
	<div class="col-md-9">				
		<div class="blog-widget">   
			<? if ( have_posts() ) : ?>
			<div class="col-md-6 blog-widget-title">Categoria: <? the_category(', ');?></div>
			<hr>
			<div class="blog-widget-content">
				<?php	
					$i = 1;					
					while ( have_posts()) : the_post();?>
					
					<div class="col-md-6 col-xs-12 <? if($i % 2 == 0){echo 'blog-widget-content-quebra'; } else{} ?>">
						<div class="blog-card">							
							<div class="blog-card-thumb"><?php the_post_thumbnail('medium', array('class' => 'img-responsive')); ?></div>
							<div class="blog-tag-categoria"><span><?php the_category( ', ' ); ?></span></div>
							<div class="blog-card-text">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p><?php the_excerpt(); ?></p>
							</div> 
							<div class="blog-card-footer">
								<div class="col-md-6"><div class="blog-card-data"><?php the_time('d/m/Y'); ?></div></div>
								<div class="col-md-6"><div class="blog-card-leia-mais" style="padding-right: 25px"><a href="<?php the_permalink(); ?>">LEIA MAIS</a><i class="fas fa-angle-right"></i></div></div>
							</div>          
						</div>
					</div><?php
					if($i%2 == 0){?>
						<hr><?php
					} 
					$i++;
					endwhile;
					else: echo "Categoria sem posts";
				endif;?>
			</div>
		</div>
	</div>
	<?php get_sidebar();?>
			</div>
<?php get_footer(); ?>
