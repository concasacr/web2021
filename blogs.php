<?php include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />

<title>CONCASA | BLOG </title>

<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
<meta property="og:description" content="Concasa | Unidades disponibles que van desde los $91.500 USD*" />


<?php
	$sql_keywors_blog = "SELECT wp_posts.ID, wp_posts.post_title, wp_posts.post_content, wp_posts.post_date,wp_posts.post_name, wp_term_relationships.term_taxonomy_id, wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id WHERE wp_posts.post_type='post' AND wp_posts.post_status='publish' AND wp_term_taxonomy.taxonomy = 'post_tag' GROUP BY wp_terms.name ORDER BY wp_posts.ID ASC LIMIT 15";
	$query_keywors_blog 	= mysqli_query($con, $sql_keywors_blog);
	echo '<meta name="keywords"  content="';
	while ($row_keywors_blog = mysqli_fetch_array($query_keywors_blog)) { echo utf8_encode($row_keywors_blog['name']).', '; } echo '" />';  
?>

<?php if ($_GET['page']!='view'){ ?><script type="text/javascript"> window.location.replace("http://concasa.com/blogs?page=view");</script><?php } ?>

<link rel="stylesheet" type="text/css" href="/styles/style.css">
<link rel="stylesheet" type="text/css" href="/fonts/css/all.min.css">
<link rel="stylesheet" type="text/css" href="/styles/framework.css">
<link rel="stylesheet" type="text/css" href="/styles/framework-blog.css">
<style>.blog-post-home-author i.fas.fa-user-tie{font-size: 35px; line-height: 50px; position: absolute;}</style>
<?php include $_SERVER['DOCUMENT_ROOT'].'/api-mobile.php'; ?>
</head>
<body>

	<?php include $_SERVER['DOCUMENT_ROOT'].'/header-mobile.php'; ?>
				
			
		<div class="page-content header-clear-small">
			
			
		<?php
		$sql 	= "SELECT * FROM wp_posts WHERE post_type='post' AND post_status='publish' ORDER BY post_date DESC";
		$query 	= mysqli_query($con, $sql);
		$categorys_array = array();
		while ($row = mysqli_fetch_array($query)) {
			
			$phpdate = strtotime( $row['post_date'] );
		 
			
			$sqlb 	= "SELECT * FROM wp_posts WHERE post_parent = '".$row['ID']."' AND post_type='attachment'";
			$queryb 	= mysqli_query($con, $sqlb);
			$rowb = mysqli_fetch_array($queryb);
			
			
				$sqlc 	= "SELECT wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_term_relationships LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id WHERE object_id = '".$row['ID']."'";
				$queryc 	= mysqli_query($con, $sqlc);
				while ($rowc = mysqli_fetch_array($queryc)) {
					
					if($rowc['taxonomy']=='category'){ $categorys .= utf8_encode($rowc['name']).', '; }
					if($rowc['taxonomy']=='post_tag'){ $tags .= utf8_encode($rowc['name']).', '; } 
					
					if($rowc['taxonomy']=='post_tag'){ $tags_show .= '<span>'.utf8_encode($rowc['name']).'</span> '; } 
					if($rowc['taxonomy']=='category'){
						 $categorys_show .= '<span>'.utf8_encode($rowc['name']).'</span> ';
						 $categorys_array[] = utf8_encode($rowc['name']);
					} 
				}
		?>
			<div class="blog-post-home">
				<a href="/blogs/<?=$row['post_name'];?>"><img src="<?=$rowb[guid];?>" class="responsive-image" alt="<?=strip_tags(utf8_encode($row['post_title']))?>"></a>
				<strong class="font-17"><?=strip_tags(utf8_encode($row['post_title']))?></strong>
				<!--<span>In:<a href="#" class="color-hightlight">Tech, Gadgets, Laptops</a></span>
				<div class="blog-post-stats">
					<a href="#"><i class="fa fa-heart color-red-light"></i>503</a>
					<a href="#"><i class="fa fa-eye color-blue-light"></i>623</a>
					<a href="#"><i class="fa fa-comments color-brown-light"></i>135</a>
					<div class="clear"></div>
				</div>-->
				<p>
					<?=substr(strip_tags(utf8_encode($row['post_content'])), 0, 200);?> [...]
				</p>
				<a href="/blogs/<?=$row['post_name'];?>" class="blog-post-home-author">
					<i class="fas fa-user-tie"></i>
					<span>By:<u class="color-blue-dark">Admin Concasa</u></span>
					<em><?=date('F j, Y', $phpdate)?></em>
				</a>
				<a href="/blogs/<?=$row['post_name'];?>" class="blog-post-more bg-green-dark"><i class="fa fa-angle-right"></i></a>
			</div>
	
			<div class="decoration decoration-margins"></div>
		<?php } ?>
		
	
        
       
        
        <?php //include $_SERVER['DOCUMENT_ROOT'].'/testimonials-mobile.php'; ?>

        <?php include $_SERVER['DOCUMENT_ROOT'].'/social-media-fotter-mobile.php'; ?>

    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/fotter-mobile.php'; ?>

</div>

<script type="text/javascript" src="/scripts/jquery.js"></script>
<script type="text/javascript" src="/scripts/plugins.js"></script>
<script type="text/javascript" src="/scripts/custom.js"></script>

</body>
</html>
