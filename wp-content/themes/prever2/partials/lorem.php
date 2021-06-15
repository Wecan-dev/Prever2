<section class="cards-text">
 <h2>
 <?php echo get_theme_mod('section4_titulo');?>
	
 </h2>
<div class="d-flex justify-content-center" style="width:100%;">
	 <h3>
	 <?php echo get_theme_mod('section4_subtitulo');?>
 </h3>
	</div>

 <div class="card-flex">
	
	 
	 <div class="card-services__img">
							
		 <div class="img-destktop-banner">
			 <img src="<?php echo get_theme_mod('section4_imagen');?>">
		 </div>

		 <div class="img-mobile-banner">
			  <img src="<?php echo get_theme_mod('section4_mobile_imagen');?>">
		 </div>
		 
		<a class="btn-cotizar" href="" class="contact" data-toggle="modal" data-target=".bd-example-modal-lg">COTIZAR</a>
	 </div>
	 
</div>
</section>

<style>
	.btn-cotizar{
		background: #e06e37;
		padding: 10px 20px;
		border: none;
		border-radius: 5px;
		color: #fff;
		position: absolute;
		top: 70%;
		right: 4%;
		font-weight: 700;
	}
	.btn-cotizar:hover{
	
		color: #fff;
		
	}
	.card-services__img  {
		width: 100%;
		height: 450px;
		position: relative;
	}
	.img-destktop-banner, .img-mobile-banner{
		width:100%;
		height: 100%;
	}
	.card-services__img .img-destktop-banner img,.card-services__img .img-mobile-banner img{
		width: 100%;
		height: 100%;
	}
	.img-mobile-banner{
		display: none;
	}
	@media (min-width: 0px) and (max-width: 575px){
		.btn-cotizar {
			right: 50%;
			font-size: 12px;
			transform: translate(50%);
		}
		.img-destktop-banner{
			display: none;
		}
		.img-mobile-banner{
			display: block;
		}
			.card-services__img{
			    height: calc(75vh + 80px)!important;
    min-height: 640px;
			margin-top: 5rem;
		}
	}
	
	@media (min-width: 576px) and (max-width: 767px){
		.btn-cotizar {
			right: 50%;
			font-size: 12px;
			transform: translate(50%);
		}
			.img-destktop-banner{
			display: none;
		}
		.img-mobile-banner{
			display: block;
		}
			
		.card-services__img{
			    height: calc(80vh + 80px)!important;
    			min-height: 640px;
		}
	}
	
	@media (min-width: 768px) and (max-width: 911px){
		.card-services__img {
			width: 100%;
			height: auto;
		}
			.btn-cotizar {
			
			font-size: 10px;
				
		}
	}
		
</style>