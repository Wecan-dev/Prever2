<footer>
		<div class="footer-flex">
			<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-blanco.png" alt="">
			</div>
			<div class="nav-footer">
				<div>
				<a href="#about">Quiénes somos</a>
			</div>
			<div>
				<a href="#products">Productos y Servicios</a>
			</div>
			<div>
				<a href="#orbituarios">Orbituarios</a>
			</div>
			<div>
				<a href="#duelo">Ayuda al duelo</a>
			</div>
			</div>
		</div>
	</footer>

    <!--===============================================================================================-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

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
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
