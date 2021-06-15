<section id="duelo" class="duelo">
		<h2 class="main-title__duelo">
			<?php echo get_theme_mod('help_titulo');?>
		</h2>
	
		<div class="d-flex justify-content-center" style="width:100%;">
	
			<h3>
				<?php echo get_theme_mod('help_subtitulo');?>
			</h3>
		
			</div>
		<?php $args = array('post_type' => 'help', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<div class="duelo-flex">
			<div class="duelo-img">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
			</div>
			<div class="duelo-text">
				<h2 style="font-weight: 400; margin-bottom: 6%;"><?php the_title(); ?></h2>
				<div style="margin-bottom: 6%;">
				<?php the_content(); ?>
</div>
				<button class="btn-more" ><a target="_blank"  href="<?php the_field( 'url_del_boton' ); ?>"><?php the_field( 'texto_del_boton' ); ?></a></button>
			</div>
		</div>

		<?php endwhile ?>

</section>

<style>

.duelo-text h2 span {
	color: #e06e37; 
	font-weight: 600;
}

</style>

