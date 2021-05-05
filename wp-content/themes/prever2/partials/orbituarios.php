<section id="orbituarios" class="orbituarios">
		<h2>
			<?php echo get_theme_mod('orbituarios_titulo');?>
		
		</h2>
		<p>
			<?php echo get_theme_mod('orbituarios_subtitulo');?>

		</p>
		<div class="btn-center">
		<button class="btn-orange"><a href="	<?php echo get_theme_mod('orbituarios_url');?>">			<?php echo get_theme_mod('orbituarios_btn');?>
</a></button></div>
		<div class="card-flex">

		<?php $args = array('post_type' => 'orbituarios', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>


			<div class="card-orbituario">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				<h2><?php the_title(); ?></h2>

				<div class="lorem-text">
					<div>
					<?php the_content(); ?>
					</div>
					<div style=" padding-bottom: 12%; padding-top: 10%;" class="btn-center">
						<button class="btn-white"><a href="<?php the_field( 'orbituarios-url' ); ?>"><?php the_field( 'orbituarios-btn' ); ?></a></button>
					</div>
				</div>
			
			</div>

			<?php endwhile ?>



	</div>
</section>