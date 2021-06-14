
    <footer id="site-footer" class="bgdark padding_top">
        <div class="container clearfix">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6" data-animate="fadeIn">
                    <div class="footer_panel  bottom20">
                        <a href="#" class="footer_logo "><img src="//cdn.concasa.com/concasa.com/images/n-images/logo.svg" alt="Logo Concasa"></a>
                        <p class="whitecolor bottom25" style="padding-left: 28px;">Mejor hogar de manera simple.</p>
                        <div class="d-table w-100 address-item whitecolor bottom25">
                            <span class="d-table-cell align-middle"><i class="fas fa-mobile-alt"></i></span>
                            <p class="d-table-cell align-middle bottom0">
                                <a href="tel:+50624389075"> +506 2438 9075</a> <a class="d-block" href="mailto:info@concasa.com">info@concasa.com</a>
                            </p>
                        </div>
                        <ul class="social-icons white wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                            <li><a href="//www.facebook.com/concasa/" target="_blank" class="facebook"><i class="icon-facebook"></i> </a> </li>
                            <li><a href="//api.whatsapp.com/send?phone=50688482272" target="_blank" class="whatsapp"><i class="icon-whatsapp"></i> </a> </li>
                            <li><a href="//www.instagram.com/concasa_cr/" target="_blank" class="insta"><i class="icon-instagram"></i> </a> </li>
                            <li><a href="//www.youtube.com/channel/UCqDT6PY81ojzQHpADtIa-7A" target="_blank" class="youtube"><i class="icon-youtube"></i> </a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" data-animate="fadeIn" data-delay="200">
                    <div class="footer_panel  bottom20">
                        <h3 class="whitecolor bottom25">Últimas noticias</h3>
                        <ul class="latest_news whitecolor">
                            <?php
								$cont = 0;
						        $url="//concasa.com/blog-inmobiliario/wp-json/wp/v2/posts"";
						        $ch = curl_init();
						        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
						        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
						        curl_setopt($ch, CURLOPT_URL,$url);
						        $result=curl_exec($ch);
						        $posts = json_decode($result, true);
						       
						        foreach ($posts as $post) { 
							        $cont++;
							         if ($cont < 4){
					        ?>
                            <li> <a href="<?php echo $post['link']; ?>"><?php echo $post['title']['rendered']; ?></a> <span class="date defaultcolor"><?php echo date('F j, Y', strtotime($post['date'])); ?></span> </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" data-animate="fadeIn" data-delay="400">
                    <div class="footer_panel  bottom20 pl-0 pl-lg-5">
                        <h3 class="whitecolor bottom25">Mapa del sitio</h3>
                       <nav>
                       <ul class="links">
                            <li><a href="../" class="pagescroll">Inicio</a></li>
                            <li><a href="../somos" class="pagescroll">Quienes somos</a></li>
                            <li><a href="#projects" class="pagescroll scrollupto">Proyectos</a></li>
                            <li><a href="https://blog.concasa.com/" class="pagescroll">Blog</a></li>
                            <li><a href="../contact" class="pagescroll">Contacto</a></li>
                            <li><a href="../clife" class="pagescroll">Concasa life</a></li>
                            <li><a href="../servicio-post-venta" class="pagescroll">Post-venta</a></li>
                            <li><a href="../privacy" class="pagescroll">Privacidad</a></li>
                        </ul>
                       </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6" data-animate="fadeIn" data-delay="600">
                    <div class="footer_panel  bottom20">
                        <h3 class="whitecolor bottom25">Lo último en Instagram</h3>
                        <style> #feed img { height: 64px !important; } </style>
                        <div class="whitecolor bottom25" id="feed"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Copyrights &copy; <?php echo date("Y"); ?>. All Rights Reserved.</p>
        </div>

    </footer>
    
    <div id="gotoTop" class="icon-angle-up"></div>
    
    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WWWFZD3"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

        <script src="//cdn.concasa.com/concasa.com/js/n-js/jquery.js"></script>
	<script src="//cdn.concasa.com/concasa.com/js/n-js/functions.js"></script>
	<script src="//cdn.concasa.com/concasa.com/js/n-js/plugins.js"></script>
	<script src="//cdn.concasa.com/concasa.com/js/n-js/site.js"></script>
	<script src="//cdn.concasa.com/concasa.com/js/n-js/calculator.js"></script>
	<script src="//assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
</body>
