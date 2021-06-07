	  <nav id="menu-principal" class="navbar navbar-expand-sm navbar-dark">
	        <a class="navbar-brand" href="/"> <img src="/images/logo.svg" width="auto" height="30" alt="LOGO CONCASA"> </a>
	        <a class="navbar-brand-block" href="/"></a>
	        
	        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>

	        <div class="collapse navbar-collapse" id="navbarsExample09">
	          <ul class="navbar-nav ml-auto">
	            <li class="nav-item active"><a class="nav-link" href="/quienes-somos">Quienes somos</a></li>
	            <li class="nav-item dropdown active">
	              <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Proyectos</a>
	              <div class="dropdown-menu" aria-labelledby="dropdown09">
	                <a class="dropdown-item" href="/proyecto/condominio-terrazas-del-norte">Terrazas del Norte</a>
	                <a class="dropdown-item" href="/proyecto/condominio-6-26">Condominio 6-26</a>
	                <a class="dropdown-item" href="/proyecto/condominio-costa-linda">Costa Linda</a>
	                <a class="dropdown-item" href="/proyecto/condominio-monte-alto">Monte Alto</a>
	                <a class="dropdown-item" href="/proyecto/condominio-caminos-del-bosque">Caminos del Bosque</a>
	              </div>
	            </li>

	            <li class="nav-item active"><a class="nav-link" href="//wp.concasa.com">Blog</a></li>
	            
	            <!--<li class="nav-item dropdown active">
	              <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
	              <div class="dropdown-menu" aria-labelledby="dropdown09">
		            <?php
			            $sql_nav = "SELECT wp_posts.ID, wp_posts.post_title, wp_posts.post_content, wp_posts.post_date,wp_posts.post_name, wp_term_relationships.term_taxonomy_id, wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id WHERE wp_posts.post_type='post' AND wp_posts.post_status='publish' AND wp_term_taxonomy.taxonomy = 'category' GROUP BY wp_posts.post_name";
						$query_nav 	= mysqli_query($con, $sql_nav);
						$row_cnt_nav = mysqli_num_rows($query_nav);
						while ( $row_nav = mysqli_fetch_assoc($query_nav) ) {
		            ?>  
	                <a class="dropdown-item" href="/blog/categoria/<?=utf8_encode($row_nav['name']);?>"><?=utf8_encode($row_nav['name']);?></a>
	                <?php } //end if ?>
	                <a class="dropdown-item" href="/blog">Todos</a>
	              </div>
	            </li>-->
	            
	            <li class="nav-item active"><a class="nav-link" href="/post-venta">Post-venta</a> </li>
	            <li class="nav-item active"><a class="nav-link" href="/concasa-life">Concasa life</a> </li>
	            <li class="nav-item active"><a class="nav-link" href=" /empleo/">Empleo</a></li>
	            <li class="nav-item active"><a class="nav-link" href="/contacto">contacto</a> </li>
	            
	            
	            
	            
	           
	           <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdown19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fab fa-facebook-f" style="color: #002c6b;"></i></a>
	              <div class="dropdown-menu dropdown-menu-right bar-social-media-top" aria-labelledby="dropdown09" id="social-media">
	                <a class="dropdown-item dropdown-social-media-top" target="_blank" href="https://www.waze.com/location?h=d1u0eked9"><i class="fas fa-map-marker-alt"></i></a>
	                <a class="dropdown-item dropdown-social-media-top" target="_blank" href="https://api.whatsapp.com/send?phone=50688482272"> <i class="fab fa-whatsapp"></i></a>
	                <a class="dropdown-item dropdown-social-media-top" target="_blank" href="tel:+50624389075"> <i class="fas fa-phone"></i></a>
	                <a class="dropdown-item dropdown-social-media-top" target="_blank" href="https://www.facebook.com/concasa/"> <i class="fab fa-facebook-f"></i></a>
	                <a class="dropdown-item dropdown-social-media-top" target="_blank" href="https://www.instagram.com/concasa_cr/"> <i class="fab fa-instagram"></i></a>
	              </div>
	            </li>
	            
	            <li class="nav-item dropdown">
	              <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="dropdown19" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/001-costa-rica.svg" style="width: 25px;position: relative;right: 3px;top: -2px;" width="14" alt="CONCASA COSTA RICA"></a>
	              <div class="dropdown-menu dropdown-menu-right bar-social-media-top" aria-labelledby="dropdown09">
	                <a class="dropdown-item dropdown-social-media-top" target="_self" href="https://concasa.com/"><img src="/001-costa-rica.svg" width="14" alt="CONCASA COSTA RICA"></a>
	                <a class="dropdown-item dropdown-social-media-top" target="_self" href="http://panama.concasa.com/"><img src="/002-panama.svg" width="14" alt="CONCASA PANAMA"></a>
	              </div>
	            </li>

	          </ul>
	          
	        </div>
      </nav>