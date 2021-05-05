<section class="cards-text">
 <h2>
 <?php echo get_theme_mod('section4_titulo');?>
	
 </h2>

 <h3>
	 <?php echo get_theme_mod('section4_subtitulo');?>
 </h3>
 <div class="card-flex">
 <?php $args = array('post_type' => 'section4', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
	<div class="card-item2">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		<div class="card-body card-fondo">
		<h6>    <?php the_title(); ?></h6>
		<p><?php the_content(); ?></p>
		<hr>
		<p> <a href="#">Adquirir servicio <img class="flecha" src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.png" alt=""></a>	</p>	 
		</div>
	</div>

	<?php endwhile ?>

</div>
</section>