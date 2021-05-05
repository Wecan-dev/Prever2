
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section id="products" class="services">
		<h2>
		<?php echo get_theme_mod('products_titulo');?>
		</h2>
		<h3>
			<?php echo get_theme_mod('products_subtitulo');?>
		</h3>

		<div class="card-services">
		<?php $args = array('post_type' => 'Productos', 'order' => 'ASC', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
			<div class="card-item">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/card2.png" alt="">
				<div class="card-body card-font">
					<h6><?php the_title(); ?> </h6>
					<div><?php the_content(); ?></div>
					<?php if (get_field( 'boton_de_ver_mas' ) != NULL){?>  
						<p><a href="<?php the_field( 'boton_de_ver_mas' ); ?>">Ver más <img class="flecha" src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.png" alt=""></a>
					</p>
					<?php }
         ?> 
					<?php if (get_field( 'desplegable_titulo_1' ) != NULL){?>  
						<p> <button type="button" class="btn-collapse" data-toggle="collapse" data-target="#<?php the_field( 'desplegable_titulo_1' ); ?>"><?php the_field( 'desplegable_titulo_1' ); ?></p> <img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""></button>
       <?php }
				 ?> 
				 	<?php if (get_field( 'desplegable_titulo_2' ) != NULL){?>  
					<p><button type="button" class="btn-collapse" data-toggle="collapse" data-target="#<?php the_field( 'desplegable_titulo_2' ); ?>"><?php the_field( 'desplegable_titulo_2' ); ?></p><img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""></button>
					<?php }
				 ?> 
				 
				 <?php if (get_field( 'desplegable_titulo_3' ) != NULL){?>  
					<p><button type="button" class="btn-collapse" data-toggle="collapse" data-target="#<?php the_field( 'desplegable_titulo_2' ); ?>"><?php the_field( 'desplegable_titulo_2' ); ?></p><img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""></button>
					<?php }
         ?> 

					
			</div>
			</div>
		<?php endwhile ?>
			
		</div>


		<?php $args = array('post_type' => 'Productos', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
		<div  id="<?php the_field( 'desplegable_titulo_1' ); ?>" class="collapse text-dis">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_1' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_1' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_1' ); ?>" alt="">
			</div>
			<div class="btn-flex">
				<button class="btn-siempre"><a href="#">SIEMPRE A TU LADO</a></button>
			</div>
		</div>
		<div   id="<?php the_field( 'desplegable_titulo_2' ); ?>" class="collapse text-dis">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_2' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_2' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_2' ); ?>" alt="">
			</div>
			<div class="btn-flex">
				<button class="btn-siempre"><a href="#">SIEMPRE A TU LADO</a></button>
			</div>
		</div>
		<div  id="<?php the_field( 'desplegable_titulo_3' ); ?>" class="collapse text-dis">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_3' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_3' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_3' ); ?>" alt="">
			</div>
			<div class="btn-flex">
				<button class="btn-siempre"><a href="#">SIEMPRE A TU LADO</a></button>
			</div>
		</div>
		<?php endwhile ?>
	</section>

