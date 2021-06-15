<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section id="products" class="services">
		<h2>
		<?php echo get_theme_mod('products_titulo');?>
		</h2>
		<h3>
			<?php echo get_theme_mod('products_subtitulo');?>
		</h3>
		<div class="visible_desktop">
		<div class="card-services">
		<?php $args = array('post_type' => 'Productos', 'order' => 'ASC', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
			<div class="card-item">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				<div class="card-body card-font">
					<h6><?php the_title(); ?> </h6>
					<div><?php the_content(); ?></div>
					<?php if (get_field( 'boton_de_ver_mas' ) != NULL){?>  
						<p>
							<a href="<?php the_field( 'boton_de_ver_mas' ); ?>">Ver más 
								<img class="flecha" src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.png" alt="">
							</a>
						</p>
					<?php }
         ?> 
					<?php if (get_field( 'desplegable_titulo_1' ) != NULL){?>  
						<p> 
							
							<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content1-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_1' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
							
						</p> 
       				<?php } ?> 
				 	<?php if (get_field( 'desplegable_titulo_2' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content2-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_2' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
				 ?> 
				 
				 <?php if (get_field( 'desplegable_titulo_3' ) != NULL){?>  
					
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content3-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_3' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					

					<?php }
         ?> 

				 <?php if (get_field( 'desplegable_titulo_4' ) != NULL){?>  
<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content4-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_4' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_5' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content5-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_5' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_6' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content6-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_6' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_7' ) != NULL){?>  
				<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content7-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_7' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_8' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content8-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_8' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_9' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content9-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_9' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_10' ) != NULL){?>  
						<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content10-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_10' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
			</div>
			</div>
		<?php endwhile ?>
			
		</div>
	</div>
	
	
	<div class="visible_mobile">
			<div class="main-slider__mobile1">
			
		<?php $args = array('post_type' => 'Productos', 'order' => 'ASC', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); ?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
			<div class="card-item">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				<div class="card-body card-font">
					<h6><?php the_title(); ?> </h6>
					<div><?php the_content(); ?></div>
					<?php if (get_field( 'boton_de_ver_mas' ) != NULL){?>  
						<p>
							<a href="<?php the_field( 'boton_de_ver_mas' ); ?>">Ver más 
								<img class="flecha" src="<?php echo get_template_directory_uri(); ?>/assets/images/flecha.png" alt="">
							</a>
						</p>
					<?php }
         ?> 
					<?php if (get_field( 'desplegable_titulo_1' ) != NULL){?>  
						<p> 
							
							<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content1-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_1' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
							
						</p> 
       				<?php } ?> 
				 	<?php if (get_field( 'desplegable_titulo_2' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content2-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_2' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
				 ?> 
				 
				 <?php if (get_field( 'desplegable_titulo_3' ) != NULL){?>  
					
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content3-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_3' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					

					<?php }
         ?> 

				 <?php if (get_field( 'desplegable_titulo_4' ) != NULL){?>  
<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content4-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_4' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_5' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content5-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_5' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_6' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content6-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_6' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_7' ) != NULL){?>  
				<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content7-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_7' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_8' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content8-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_8' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_9' ) != NULL){?>  
					<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content9-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_9' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
				 <?php if (get_field( 'desplegable_titulo_10' ) != NULL){?>  
						<p>
						<a href="#descriptions" class="tab-product product-smooth" data-toggle-target=".tab-content10-<?php the_id(); ?>">
								<?php the_field( 'desplegable_titulo_10' ); ?>
								<img class="mas" src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt="">
							</a>
						
					</p>
					<?php }
         ?> 
			</div>
			</div>
		<?php endwhile ?>
		
			</div>
		</div>
	
<div id="descriptions">

		<?php $args = array('post_type' => 'Productos', 'posts_per_page' => -1); ?>
          <?php $loop = new WP_Query($args); 
				$count= 1;?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
	
		<div class=" text-dis tab-contents tab-content1-<?php the_id(); ?>">
		 <h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_1' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_1' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_1' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_1' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre" type="button" ><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_1' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
	<div class=" text-dis tab-contents tab-content2-<?php the_id(); ?>">
		<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_2' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_2' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_2' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_2' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_2' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
		<div class=" text-dis tab-contents tab-content3-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_3' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_3' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_3' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_3' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_3' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
		<div class=" text-dis tab-contents tab-content4-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_4' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_4' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_4' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_4' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_4' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
		
		<div class=" text-dis tab-contents tab-content5-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_5' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_5' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_5' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_5' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_5' ); ?>">SSolicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
	<div class=" text-dis tab-contents tab-content6-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_6' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_6' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_6' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_6' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_6' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
	<div class=" text-dis tab-contents tab-content7-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_7' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_7' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_7' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_7' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_7' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
	<div class=" text-dis tab-contents tab-content8-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_8' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_8' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_8' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_8' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_8' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
		
	<div class=" text-dis tab-contents tab-content9-<?php the_id(); ?>">
			<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_9' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_9' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_9' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_9' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_9' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
	
		
	<div class=" text-dis tab-contents tab-content10-<?php the_id(); ?>">
				<h6> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mas.png" alt=""><?php the_field( 'desplegable_titulo_10' ); ?></h6>
			<p><?php the_field( 'desplegable_descripcion_10' ); ?></p>
			<div class="siempre-img">
				<img src="<?php the_field( 'desplegable_imagen_10' ); ?>" alt="">
			</div>
			<?php if(get_field( 'desplegable_url_10' )): ?>
			<div class="btn-flex">
				<button class="btn-siempre"><a data-toggle="modal" data-target=".bd-example-modal-lg" href="<?php the_field( 'desplegable_url_10' ); ?>">Solicita más información</a></button>
			</div>
			<?php endif; ?>
		</div>
		
		
	

		<?php $count++; endwhile ?>

	
</div>
	</section>




<style>
.tab-contents{
  display: none;
}
.tab-contents.active {
  display: block;
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	
	
	 $('.tab-product').on('click', function(evt) {
	  evt.preventDefault();
	  $(this).toggleClass('active');
	  var sel = this.getAttribute('data-toggle-target');
	  $('.tab-contents').removeClass('active').filter(sel).addClass('active');
	});
	  


	
	$(document).ready(function(){
    var width = window.innerWidth;
    var resolucion = $( window ).width();

    if(resolucion <= 767){
      $(".product-smooth").on("click", function (e) {
		  // 1
		  e.preventDefault();
		  // 2
		  const href = $(this).attr("href");
		  // 3
		  $("html, body").animate({ scrollTop: $(href).offset().top - 100 }, 600);
		});

    }
    else{
        $(".product-smooth").on("click", function (e) {
		  // 1
		  e.preventDefault();
		  // 2
		  const href = $(this).attr("href");
		  // 3
		  $("html, body").animate({ scrollTop: $(href).offset().top - 90 }, 600);
		});

    }
 });
</script>
