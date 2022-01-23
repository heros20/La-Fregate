<?php wp_footer(); ?>
<div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <a class="scrollTop" href="#"><img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="" /></a> 
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>Réseau social</h3>
                                <p>Le chef vous informe quotidiennement des changements de la carte et du menu, ne manquez pas votre plat favori!</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a target="_blank" href="https://www.facebook.com/La-Fregate-279235209380378/">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <!-- end footer-box-a -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>Infos menu</h3>
                                <ul>
                                    <li><p>Le menu du jour change quotidiennement</p></li>
                                    <li><p>N'hésitez pas à visiter notre <a style="color: rgb(179, 16, 16);" target="_blank" href="https://www.facebook.com/La-Fregate-279235209380378/">Facebook</a></p></li>
                                    <li><p>Pour connaitre nos petits plats</p></li>
                                    <li><p>Sans vous déplacer</p></li>
                                </ul>
                            </div>
                            <!-- end footer-box-b -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div id="footer" class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>17 Rue des Quatre Francs, 14600 La Rivière-Saint-Sauveur</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
								    	<a href="tel:0231876055">02 31 87 60 55</a> 
								    </span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="mailto:la-fregate@orange.fr">la-fregate@orange.fr</a></span>
                                </p>
                            </div>
                            <!-- end footer-box-c -->
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Horaires d'ouverture</h3>

                                <ul>
                                    <li>
                                        <p>Du Mardi au Samedi </p>
                                        <span> 12h - 14h</span>
                                        <span> 19h - 21h30</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- end footer-box-d -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end footer-in-main -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy;  <a href="#" target="_blank"></a> </h6>
                            <a href="#">Mentions légales</a>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end copyright-main -->
        </div>
        <!-- end footer-box -->
    </div>
    <!-- end footer-main -->

    <a href="#" class="scrollup" style="display: none;">Scroll</a>

    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="red" class="switcher red-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
            <a title="black" class="switcher black-bg"></a>
            <a title="test-color" class="switcher test-color-bg"></a>
        </div>
    </section> 
    <script>
        	$(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollup').fadeIn();
				} else {
					$('.scrollup').fadeOut();
				}
			}); 
			
			$('.scrollup').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});

            $(window).scroll(function(){
				if ($(this).scrollTop() > 100) {
					$('.scrollTop').fadeIn();
				} else {
					$('.scrollTop').fadeOut();
				}
			}); 
			
			$('.scrollTop').click(function(){
				$("html, body").animate({ scrollTop: 0 }, 600);
				return false;
			});

            $( "#color-panel .panel-button" ).click(function(){
			$( "#color-panel" ).toggleClass( "close-color-panel", "open-color-panel", 1000 );
			$( "#color-panel" ).toggleClass( "open-color-panel", "close-color-panel", 1000 );
			return false;
		});
		// Color Skins
		$('.switcher').click(function(){
			var title = jQuery(this).attr('title');		
			jQuery('#changeable-colors').attr('href', stylesheet_directory_uri + '/assets/css/colors/' + title + '.css');				
			return false;
		});	
        $("#closeButton").click(function () {
        $("#ac-wrapper").css("display", "none");
        });
    </script>
   
</body>
</html>
