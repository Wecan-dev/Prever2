<style type="text/css">
 .hover-tabs{
 	opacity: 0;
 	pointer-events: none;
 	

 }
.li-hover-tabs:hover .hover-tabs{
	pointer-events: auto;
	opacity: 1;
}


</style>

<section id="centrosmemoriales" class="centro">
		<h2>Centros Memoriales y funerarias</h2>
		<ul class="nav nav-tabs main_menu" id="myTab" role="tablist">
			<?php $args = array('post_type' => 'funerarias', 'posts_per_page' => 6, 'order' => 'ASC'); ?>
          <?php $loop = new WP_Query($args); $cuenta = 1;?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>
			<li class="nav-item li-hover-tabs" style="    display: flex;
    flex-direction: column;">
   				 <a class="nav-link" ><?php the_title(); ?></a>
				<ul class="hover-tabs">
					
				<?php while ( have_rows( 'direccion' ) ) : the_row(); ?>
		
			<li class="text-left">
				<a class=""  id="<?php the_title() ?>-<?php echo $cuenta; ?>-tab" data-toggle="tab" href="#<?php the_title() ?>-<?php echo $cuenta; ?>" role="tab" aria-controls="<?php the_title() ?>-<?php echo $cuenta; ?>" aria-selected="true" style="color: black;"><?php the_sub_field( 'cede' ); ?></a>
			  </li>
				
			  

			<?php $cuenta++; endwhile; ?>
			</ul>
  </li>


	<?php endwhile ?>

</ul>

	
  <div class="tab-content">
			<?php $args = array('post_type' => 'funerarias', 'posts_per_page' => -1, 'order' => 'ASC'); ?>
          <?php $loop = new WP_Query($args); $count_active = 1;?>
          <?php while ($loop->have_posts()) : $loop->the_post(); ?>	
		  <!-- Tab panes -->
		

		
	<?php if ( have_rows( 'direccion' ) ) :
	  
	  ?>
				<?php while ( have_rows( 'direccion' ) ) : the_row(); ?>


					<div class="tab-pane <?php if ($count_active == 2){ echo 'active';}?>" id="<?php the_title() ?>-<?php echo $count_active; ?>" role="tabpanel" aria-labelledby="<?php the_title() ?>-<?php echo $count_active; ?>-tab">

				<div class="centro-flex">
				<div class="centro-text">
					<div class="slider-text-0">
						<div class="single-item-0">
							
						
								<img class="item img-fluid" src="<?php the_sub_field( 'imagen' ); ?>" />
				
						
						</div>
					</div>
		
					<div class="slider-description">
			<div class="item-slider" >
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ubicacion.png" alt=""> <p><strong><?php the_sub_field( 'cede' ); ?></strong></p>
						</div>
			<div class="item-slider" >
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ubicacion.png" alt=""> <p><?php the_sub_field( 'direccion' ); ?></p>
						</div>
						<div class="item-slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt=""> <p><strong><?php the_sub_field( 'linea_de_atencion' ); ?></strong> </p>
						</div>
						<div class="item-slider">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/reloj.png" alt=""> <p><?php the_sub_field( 'horario' ); ?> </p>
						</div>
					</div>
				</div>
				<div class="map">
					<div class="map-text">
						<div class="first">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ubicacion.png" alt=""> <p><?php the_sub_field( 'direccion' ); ?></p>
						</div>
						<div class="second">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/more.png" alt="">
						</div>
					</div>
					<div class="google-map">
					<?php the_sub_field( 'iframe_de_google_maps_' ); ?>
					 </div>
				</div>
			</div>
		</div>


		<?php $count_active++; endwhile; ?>
	<?php else : ?>
		<?php // no rows found ?>
<?php endif; ?>











		<?php endwhile ?>

	</div>
	</section>


