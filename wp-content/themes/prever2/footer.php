<footer>
		<div class="footer-flex">
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanco.png" alt="">
			</div>
			<div class="ftco-footer-social list-unstyled " style="display: flex;">
								<li style="border: none; margin-right: 10px;" class="ftco-animate"><a target="_blank" href="https://www.facebook.com/PreverCol/"><img data-src="https://prever.com.co/wp-content/themes/prever/assets/images/fb3.svg" class="" src="https://prever.com.co/wp-content/themes/prever/assets/images/fb3.svg"><noscript><img class="you" src="https://prever.com.co/wp-content/themes/prever/assets/images/fb3.svg"></noscript></a></li>
								<li style="border: none; margin-right: 10px;" class="ftco-animate"><a target="_blank" href="https://www.instagram.com/prevercol/?hl=es-la"><img data-src="https://prever.com.co/wp-content/themes/prever/assets/images/insta.svg" class="" src="https://prever.com.co/wp-content/themes/prever/assets/images/insta.svg"><noscript><img class="you" src="https://prever.com.co/wp-content/themes/prever/assets/images/insta.svg"></noscript></a></li>
							<li style="border: none; margin-right: 10px;" class="ftco-animate"><a target="_blank" href="https://www.youtube.com/channel/UC4SdWFf5EA-HkH1cigzfaRA"><img data-src="https://prever.com.co/wp-content/themes/prever/assets/images/youtube3.svg" class="" src="https://prever.com.co/wp-content/themes/prever/assets/images/youtube3.svg"><noscript><img class="you" src="https://prever.com.co/wp-content/themes/prever/assets/images/youtube3.svg"></noscript></a></li>
								<li style="border: none; margin-right: 10px;" class="ftco-animate"><a target="_blank" href="https://co.linkedin.com/company/prever-soluciones-exequiales?trk=similar-pages_result-card_full-click"><img data-src="https://prever.com.co/wp-content/themes/prever/assets/images/in.svg" class="" src="https://prever.com.co/wp-content/themes/prever/assets/images/in.svg"><noscript><img class="you" src="https://prever.com.co/wp-content/themes/prever/assets/images/in.svg"></noscript></a></li>
						</div>
			<div class="nav-footer">
				<div>
				<a class="nav-scrolling" href="#about">Quiénes somos</a>
			</div>
			<div>
				<a class="nav-scrolling" href="#products">Productos y Servicios</a>
			</div>
			<div>
				<a class="nav-scrolling" href="#orbituarios">Orbituarios</a>
			</div>
			<div>
				<a class="nav-scrolling" href="#duelo">Ayuda al duelo</a>
			</div>
			</div>
		</div>
	</footer>
  
		  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Formulario de Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
       <div class="modal-body">
		   
        <?php echo do_shortcode('[hubspot type="form" portal="5679320" id="9b39bd6f-7a94-40e8-921f-29a8b1acf82e"]');?>
      </div>
    </div>
  </div>
</div>
		  
		  
		  
		  
    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/animsition/js/animsition.min.js"
    ></script>
    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/popper.js"
    ></script>
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"
    ></script>
    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/select2/select2.min.js"
    ></script>

    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/slick/slick.min.js"
    ></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/slick-custom.js"></script>
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/lightbox2/js/lightbox.min.js"
    ></script>
    <!--===============================================================================================-->
    <script
      type="text/javascript"
      src="<?php echo get_template_directory_uri(); ?>/assets/vendor/parallax100/parallax100.js"
    ></script>
    <script type="text/javascript">
      $(".nav-tabs .nav-link").on("click.bs.dropdown", function (e) {
        $(this).tab("show");
        e.stopPropagation();
      });

      $(function () {
    $('#myTab li:first-child a').tab('show')
  });
    </script>
    
    <!--===============================================================================================-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<script>
	$(".nav-scrolling").on("click", function (e) {
		  // 1
		  e.preventDefault();
		  // 2
		  const href = $(this).attr("href");
		  // 3
		  $("html, body").animate({ scrollTop: $(href).offset().top - 100 }, 600);
		});
	

</script>
    <?php wp_footer(); ?>

</div>
  </body>
</html>
