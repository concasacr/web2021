<div class="col-md-4">

          <!-- Search Widget -->
          

          <div class="card my-4 categorys-show">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="input-group">
	              <?php
		             $sql_categorias = "SELECT wp_posts.ID, wp_posts.post_title, wp_posts.post_content, wp_posts.post_date, wp_posts.post_name, wp_term_relationships.term_taxonomy_id, wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id WHERE wp_posts.post_type='post' AND wp_posts.post_status='publish' AND wp_term_taxonomy.taxonomy = 'category' GROUP BY wp_term_relationships.term_taxonomy_id";
					$query_categorias = mysqli_query($con, $sql_categorias);
					while ($row_categorias = mysqli_fetch_array($query_categorias)) {
		             
		             	echo '<span><a href="/blog/categoria/'.utf8_encode($row_categorias['name']).'">'.utf8_encode($row_categorias['name']).'</a></span>';
		             	
		              }
		           ?>   
              </div>
            </div>
          </div>


          <div class="card categorys-show">
           <h5 class="card-header"><?=$name_sponser;?></h5>
            <div class="card-body sponser-banner" style="background: url(<?=$img_sponser;?>);">
              <div class="input-group">
               <a href="<?=$url_sponser;?>" class="card-sponser-banner"><img src="/images/transp.png" alt="<?=$name_sponser;?>"></a>
              </div>
            </div>
          </div>

          

          <div class="card my-4 tags-show">
            <h5 class="card-header">Tags</h5>
            <div class="card-body">
              <div class="input-group">
	              <?php
		             $sql_tags = "SELECT wp_posts.ID, wp_posts.post_title, wp_posts.post_content, wp_posts.post_date, wp_posts.post_name, wp_term_relationships.term_taxonomy_id, wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id WHERE wp_posts.post_type='post' AND wp_posts.post_status='publish'";
					$query_tags = mysqli_query($con, $sql_tags);
					while ($row_tags = mysqli_fetch_array($query_tags)) {
		             
		             	echo '<span><a href="/blog/'.$row_tags['post_name'].'">'.utf8_encode($row_tags['name']).'</a></span>';
		              }
		           ?> 
              </div>
            </div>
          </div>
        </div>