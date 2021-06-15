 <?php

$Options=array(
 	"ssl"=>array(
 		"verify_peer" => false,
 		"verify_peer_name" => false,
 		 ),
 );
$url = 'https://tuportalprever.com.co/copenv2/api/v2/getobituarios';
$json = file_get_contents($url,false,stream_context_create($Options));
$data = json_decode($json,true);

?>

<style>
	.card-orbituario h2 {
    
       font-weight: 500 !important;
    font-size: 18px !important;
		text-transform: uppercase !important;
}
	.card-orbituario h2::after {
    content: "";
    height: 1px !important;
  
}
	.content-info-obituarios{
		padding-bottom: 10px;
	}
	
	.btn-hover-obi:hover{
		color: black;
	}

</style>

<section id="orbituarios" class="orbituarios">
		<h2 class="orbituarios-title">
			<?php echo get_theme_mod('orbituarios_titulo');?>
		
		</h2>
		<p class="orbituarios-subtitle">
			<?php echo get_theme_mod('orbituarios_subtitulo');?>

		</p>
		<div class="btn-center" >
		<button class="btn-orange " style="z-index: 999999999999;"><a class="btn-hover-obi" target="_blank" href="<?php echo get_theme_mod('orbituarios_url');?>">			<?php echo get_theme_mod('orbituarios_btn');?>
</a></button></div>
	
	
		<div class="visible_desktop">
			<div class="card-flex">
				
				<?php foreach ($data['content']['data'] as $value):?>
				
					<div class="card-orbituario">
						<?php if($value['foto_obituario']):?>
							<img src="<?php echo $value['ubicacion_foto'].$value['foto_obituario']; ?>" alt="">
						<?php else:?>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/2021/05/img2.png" alt="">
						<?php endif;?>
						<h2 ><?php echo $value['nombre_fallecido']; ?></h2>
						<div class="lorem-text">
							<div>
								<?php if($value['fecha_fallecimiento']):?>
									<div class="content-info-obituarios">
									<strong>Fecha Fallecimiento</strong><br>
										<?php echo $value['fecha_fallecimiento'];?><br>
									</div>
								<?php endif; ?>
								<?php if($value['ciudad_inicio_servicio']):?>
								<div class="content-info-obituarios">
									<strong>Ciudad inicio servicio</strong><br>
										<?php echo $value['ciudad_inicio_servicio'];?><br>
									</div>
								<?php endif; ?>
								<?php if($value['fecha_hora_velacion']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de velacion</strong><br>
										<?php echo $value['fecha_hora_velacion'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['nombre_sala_velacion']):?>
									<div class="content-info-obituarios">
									<strong>Nombre y sala de velacion</strong><br>
										<?php echo $value['nombre_sala_velacion'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['direccion_sala']):?>
									<div class="content-info-obituarios">
									<strong>Direccion de sala</strong><br>
										<?php echo $value['direccion_sala'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['fecha_hora_exequias']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de exequias</strong><br>
										<?php echo $value['fecha_hora_exequias'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['fecha_hora_cremacion']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de cremacion</strong><br>
										<?php echo $value['fecha_hora_cremacion'];?><br>
										</div>
								<?php endif; ?>
									<?php if($value['centro_memorial_cremacion']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de cremacion</strong><br>
										<?php echo $value['centro_memorial_cremacion'];?><br>
										</div>
								<?php endif; ?>
									
							</div>
							<div style=" padding-bottom: 12%; padding-top: 10%;" class="btn-center">
								<button style="z-index: 9999;" class="btn-white btn-hover-obi"><a target="_blank" class="btn-hover-obi" href="<?php echo get_theme_mod('orbituarios_url');?>">Ver todos</a></button>
							</div>
						</div>
					</div>
			<?php endforeach;?>
				
			</div>
		</div>
		
	
		<div class="visible_mobile">
			<div class="main-slider__mobile">
		
							<?php foreach ($data['content']['data'] as $value):?>
				
					<div class="card-orbituario">
						<?php if($value['foto_obituario']):?>
							<img src="<?php echo $value['ubicacion_foto'].$value['foto_obituario']; ?>" alt="">
						<?php else:?>
							<img src="<?php bloginfo('url');?>/wp-content/uploads/2021/05/img2.png" alt="">
						<?php endif;?>
						<h2 ><?php echo $value['nombre_fallecido']; ?></h2>
						<div class="lorem-text">
							<div>
								<?php if($value['fecha_fallecimiento']):?>
									<div class="content-info-obituarios">
									<strong>Fecha Fallecimiento</strong><br>
										<?php echo $value['fecha_fallecimiento'];?><br>
									</div>
								<?php endif; ?>
								<?php if($value['ciudad_inicio_servicio']):?>
								<div class="content-info-obituarios">
									<strong>Ciudad inicio servicio</strong><br>
										<?php echo $value['ciudad_inicio_servicio'];?><br>
									</div>
								<?php endif; ?>
								<?php if($value['fecha_hora_velacion']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de velacion</strong><br>
										<?php echo $value['fecha_hora_velacion'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['nombre_sala_velacion']):?>
									<div class="content-info-obituarios">
									<strong>Nombre y sala de velacion</strong><br>
										<?php echo $value['nombre_sala_velacion'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['direccion_sala']):?>
									<div class="content-info-obituarios">
									<strong>Direccion de sala</strong><br>
										<?php echo $value['direccion_sala'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['fecha_hora_exequias']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de exequias</strong><br>
										<?php echo $value['fecha_hora_exequias'];?><br>
										</div>
								<?php endif; ?>
								<?php if($value['fecha_hora_cremacion']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de cremacion</strong><br>
										<?php echo $value['fecha_hora_cremacion'];?><br>
										</div>
								<?php endif; ?>
									<?php if($value['centro_memorial_cremacion']):?>
									<div class="content-info-obituarios">
									<strong>Fecha y hora de cremacion</strong><br>
										<?php echo $value['centro_memorial_cremacion'];?><br>
										</div>
								<?php endif; ?>
									
							</div>
							<div style=" padding-bottom: 12%; padding-top: 10%;" class="btn-center">
								<button style="z-index: 9999;"  class="btn-white"><a target="_blank" href="<?php echo get_theme_mod('orbituarios_url');?>">Ver todos</a></button>
							</div>
						</div>
					</div>
			<?php endforeach;?>
				
			</div>
		</div>
</section>

