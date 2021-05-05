
<section class="centro">
		<h2>Centros Memoriales y funerarias</h2>
		<ul class="nav nav-tabs main_menu" id="myTab" role="tablist">
			<?php $args = array('post_type' => 'funerarias', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
  <li class="nav-item">
    <a class="nav-link" id="<?php the_title(); ?>-tab" data-toggle="tab" href="#<?php the_title(); ?>" role="tab" aria-controls="<?php the_title(); ?>" aria-selected="true"><?php the_title(); ?></a>
  </li>

	<?php endwhile ?>

</ul>
		  
		  <!-- Tab panes -->
		  <div class="tab-content">

			<?php $args = array('post_type' => 'funerarias', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
					<div class="tab-pane" id="<?php the_title(); ?>" role="tabpanel" aria-labelledby="<?php the_title(); ?>-tab">

				<div class="centro-flex">
				<div class="centro-text">
					<div class="slider-text">
						<div class="single-item">
							<div class="item"><img src="<?php the_field( 'imagen_1' ); ?>" alt=""></div>
							<div class="item"><img src="<?php the_field( 'imagen_2' ); ?>" alt=""></div>
						</div>
					</div>
		
					<div class="slider-description">
		
			<div class="item-slider" >
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ubicacion.png" alt=""> <p><?php the_field( 'direccion' ); ?></p>
						</div>
						<div class="item-slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt=""> <p>líneas de atención: <strong>
							<?php the_field( 'linea_de_atencion' ); ?></strong> </p>
						</div>
						<div class="item-slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reloj.png" alt=""> <p><?php the_field( 'horario' ); ?></strong> </p>
						</div>
					</div>
				</div>
				<div class="map">
					<div class="map-text">
						<div class="first">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ubicacion.png" alt=""> <p><?php the_field( 'direccion' ); ?></p>
						</div>
						<div class="second">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/more.png" alt="">
						</div>
					</div>
					<div class="google-map">
					<?php the_field( 'google_maps' ); ?>
					 </div>
				</div>
			</div>
		</div>
		<?php endwhile ?>

		  </div>
	</section>


