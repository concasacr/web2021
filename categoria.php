<?php
	include $_SERVER['DOCUMENT_ROOT'].'/config/conf.php';
	$id_categoria = quitar_acentos($_GET['id']);	
?>
<!DOCTYPE html>
<html lang="es-CR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>CONCASA | <?=$id_categoria;?> </title>
	<meta name="author" content="CONCASA desarrolladora inmobiliaria." />
	<meta name="description" content="Venta de casas, condominios y apartamentos San Rafael de Alajuela - Costa Rica, Venezuela y Panamá."/>
	<meta property="og:description" content="Concasa | Unidades disponibles que van desde los $91.500 USD*" />
	<?php
		$sql_keywors_blog = "SELECT wp_posts.ID, wp_posts.post_title, wp_posts.post_content, wp_posts.post_date,wp_posts.post_name, wp_term_relationships.term_taxonomy_id, wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id WHERE wp_posts.post_type='post' AND wp_posts.post_status='publish' AND wp_term_taxonomy.taxonomy = 'post_tag' GROUP BY wp_terms.name ORDER BY RAND() ASC LIMIT 15";
		$query_keywors_blog 	= mysqli_query($con, $sql_keywors_blog);
		echo '<meta name="keywords"  content="';
		while ($row_keywors_blog = mysqli_fetch_array($query_keywors_blog)) {
			echo utf8_encode($row_keywors_blog['name']).', ';	
		 }//end if
		echo '" />';  
    ?>

	<?php include $_SERVER['DOCUMENT_ROOT'].'/staff-top.php'; ?>

	<link rel="stylesheet" type="text/css" href="/css/blog.css" />
	
	<style>
.lbg-black {
     margin-bottom: 29px;
}
 div#gallerys-tabContent a {
     margin: 0px 6px;
}
 .formmodal {
     margin-bottom: 25px !important;
     border-radius: 55px !important;
     border: 2px solid #333 !important;
}
 .formmodal:hover {
     background: #333 !important;
}
 .cover-content-bottom img {
     height: 100px;
     margin: 0 auto;
     display: block;
}
/* Inicio - Nuevos cambios del web enero 2019 */
 nav#menu-principal {
     background: #fff !important;
     color: #000 !important;
     z-index: 99999 !important;
}
 .navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
     text-shadow: none !important;
}
 .navbar-dark .navbar-brand {
     background: #002c6b !important;
     width: 225px !important;
     height: 58px !important;
     position: absolute;
     line-height: 48px !important;
     z-index: 999;
}
 .navbar-dark .navbar-nav .active>.nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show>.nav-link {
     color: #002c6b !important;
}
 .navbar {
     padding: .2rem 0.3rem !important;
}
 a.navbar-brand-block {
     display: block;
     width: 50px;
     height: 115px;
     background: #002c6b;
     position: absolute;
     left: 0;
}
 #sectionC li.nav-item {
     width: auto !important;
}
 #sectionD li.nav-item {
     width: auto !important;
}
 #sectionE li.nav-item {
     width: auto !important;
}
 #section4 li.nav-item {
     width: auto !important;
}
 .paddingtop10 {
     padding-top: 47px !important;
}
 #moreinfo {
     background-color: #002c6b;
     color: #fff !important;
}
 #moreinfo:hover {
     -webkit-box-shadow: inset -3px -3px 20px 1px #02152e;
     box-shadow: inset -3px -3px 20px 1px #02152e;
}
 ul.botton-left-nav {
     display: block;
     width: auto;
     left: 0;
     text-align: left;
     bottom: 10%;
     position: fixed;
     overflow: hidden;
}
 ul.botton-left-nav li {
     display: block;
     width: 60px;
     overflow: hidden;
     padding: 10px;
     border-top: 1px solid rgba(255, 255, 255, 0.58);
     white-space: nowrap;
     background-color: rgba(0, 44, 107, 0.80);
     -webkit-transition: width 0.2s ease;
     -moz-transition: width 0.2s ease;
     -o-transition: width 0.2s ease;
     transition: width 0.2s ease;
     height: 61px;
}
 ul.botton-left-nav li:hover {
     -webkit-transition: width 0.2s ease-in-out;
     -moz-transition: width 0.2s ease-in-out;
     -o-transition: width 0.2s ease-in-out;
     transition: width 0.2s ease-in-out;
     width:100%;
     background-color: rgba(0, 44, 107, 0.90);
}
 ul.botton-left-nav li a {
     color: #fff;
     text-decoration: none;
}
 ul.botton-left-nav li a span {
     font-size: 25px;
     margin-top: 8px;
     display: inline-block;
     float: right;
}
 ul.botton-left-nav li img {
     margin-right: 10px;
     max-width: 42px;
     height: auto;
}
 ul.botton-right-nav {
     display: block;
     width: 100%;
     max-width: 250px;
     height: 100%;
     right: 0;
     float: right;
}
 ul.botton-right-nav li {
     display: block;
     text-align: left;
     height: 60px;
     padding: 7px;
     white-space: nowrap;
     overflow: hidden;
     position: relative;
     -webkit-transition: right 0.2s ease;
     -moz-transition: right 0.2s ease;
     -o-transition: right 0.2s ease;
     transition: right 0.2s ease;
     right: -190px;
     background: #5dbfe9;
     margin: 3px;
}
 ul.botton-right-nav li:hover {
     -webkit-transition: right 0.2s ease-in-out;
     -moz-transition: right 0.2s ease-in-out;
     -o-transition: right 0.2s ease-in-out;
     transition: right 0.2s ease-in-out;
     right: 0;
}
 ul.botton-right-nav li a {
     display: inline;
     width: 100%;
     height: 100%;
     text-decoration: none;
}
 ul.botton-right-nav li a span {
     color: #fff;
     font-size: 19px;
}
 ul.botton-right-nav li img {
     height: 100%;
     margin-right: 15px;
}
 .l-r-padding {
     padding-left: 35px;
     padding-right: 35px;
}
 #sectionC .nav-pills .nav-link {
     border-radius: 10px !important;
     color: #717175 !important;
     font-family: 'avenir_next_regular', sans-serif !important;
}
 .bar-top {
     background-image: url(/images/bck-top.png);
     background-repeat: no-repeat;
     display: block;
     width: 100%;
     height: 35px;
     margin-bottom: 5px;
}
 .bar-buttom {
     background-image: url(/images/bck-buttom.png);
     background-repeat: no-repeat;
     background-position: right;
     display: block;
     width: 100%;
     height: 35px;
     margin-top: 5px;
}
 .mb-3, .my-3 {
     margin-bottom: 1rem!important;
     text-align: center;
     max-width: 300px;
     width: 100%;
     margin: 0px auto;
     position: fixed;
     right: 35%;
}
 ul#pills-tab li {
     width: 49%;
     text-align: center;
}
 #sectionC .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
     color: #fff !important;
     background-color: #304c80 !important;
     font-family: 'avenir_next_regular', sans-serif !important;
     border: 2px solid #607aae !important;
}
 .newcouta {
     text-align: center;
     display: block;
     color: #304c80;
     font-size: 35px;
    /*height: 55px;
    */
     margin-left: 50px;
}
 .newcouta small {
     display: block;
     margin-top: 15px;
     font-size: 12px;
     font-family: 'avenir_next_regular', sans-serif !important;
}
 .newicon-homes {
     background-image: url(/images/new-home.png);
     background-size: contain;
     display: inline-block;
     width: 30px;
     height: 30px;
}
 #new-info-show {
     display: block;
     width: 100%;
     height: 100%;
}
 .info-new-icon {
     display: block;
     margin-left: 15%;
     text-align: left;
     margin-top: 15%;
     color: #304c80;
}
 .lamparaicon {
     background-image: url(/images/new-lampara.png);
     background-size: 30px;
     background-repeat: no-repeat;
}
 .duckicon {
     background-image: url(/images/new-duck.png);
     background-size: 30px;
     background-repeat: no-repeat;
}
 .softicon {
     background-image: url(/images/new-soft.png);
     background-size: 30px;
     background-repeat: no-repeat;
}
 .parkicon {
     background-image: url(/images/new-park.png);
     background-size: 30px;
     background-repeat: no-repeat;
}
 .starbicon {
     background-image: url(/images/new-star-b.png);
     background-size: 30px;
     background-repeat: no-repeat;
}
 .mtsicon {
     background-image: url(/images/new-mts.png);
     background-size: 30px;
     background-repeat: no-repeat;
}
 .starbicon2 {
     background-image: url(/images/new-star-f.png);
     background-size: contain;
     display: inline-block;
     width: 30px;
     height: 30px;
     margin-right: 10px;
     background-repeat: no-repeat;
}
 .info-new-icon span {
     font-size: 25px;
     padding-left: 40px;
}
 .info-new-icon small {
     display: block;
     text-align: left;
     padding-left: 10%;
     padding-top: 8px;
     width: 80%;
     font-weight: lighter;
     font-family: 'avenir_next_regular', sans-serif !important;
}
 .m-top-15 {
     margin-top: 35px;
}
 .m-top-7 {
     margin-top: 7%;
}
 #pills-tabContent {
     min-height: auto;
}
 .btn-outline-light {
     border-radius: 10px !important;
}
 .btn-newconcasa {
     border-radius: 10px !important;
     color: #fff !important;
     padding: 5px !important;
     width: 190px;
     text-align: center;
     background-color: #213a73;
     line-height: 22px;
     font-size: 17px;
     margin: 15px auto 0 auto;
     font-family: 'avenir_next_regular', sans-serif !important;
     border: 2px solid #607aae !important;
}
 @media only screen and (min-width: 640px) and (max-width: 1200px) {
     .newcouta {
         font-size: 22px !important;
         margin-left: 0px !important;
    }
     .info-new-icon {
         margin-left: 0% !important;
    }
     .info-new-icon span {
         font-size: 17px !important;
    }
     .info-new-icon small {
         padding-left: 35px !important;
         width: 100% !important;
    }
}
 #gals-ints {
     margin: 0px;
     padding: 0px;
}
 #gals-ints li {
     display: block;
     width: 100%;
     text-align: center;
     padding: 35px 0px;
}
 #gals-ints li a {
     display: block;
     width: 100%;
     color: #2096f5;
     text-decoration: none;
}
 #gals-ints li a img {
     display: block;
     margin: 0 auto;
     width: auto;
     height: 100%;
     padding-bottom: 15px;
}
 .active-gal {
     border-bottom: 5px solid #2096f5;
     padding-bottom: 5px;
}
/* Fin - Nuevos cambios del web enero 2019 */ 
	</style> 
 
</head>
<body>


<div id="fullpage" data-menuanchor="gotop">

	<div class="section " id="section_blog">
		

		<?php include $_SERVER['DOCUMENT_ROOT'].'/nav.php'; ?>
		
		<div class="paddingtop45">&nbsp;</div>
	
 <div class="container paddingtop45">
	<div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
	        
	        <h1><?=$_GET['id'];?></h1>
	        <div class="paddingtop10">&nbsp;</div>

		<?php
		
			
		$sql = "SELECT wp_posts.ID, wp_posts.post_title, wp_posts.post_content, wp_posts.post_date,wp_posts.post_name, wp_term_relationships.term_taxonomy_id, wp_terms.name, wp_term_taxonomy.taxonomy FROM wp_posts LEFT JOIN wp_term_relationships ON wp_term_relationships.object_id = wp_posts.ID LEFT JOIN wp_terms ON wp_term_relationships.term_taxonomy_id = wp_terms.term_id LEFT JOIN wp_term_taxonomy ON wp_term_taxonomy.term_id = wp_term_relationships.term_taxonomy_id WHERE wp_posts.post_type='post' AND wp_posts.post_status='publish' AND wp_term_taxonomy.taxonomy = 'category' AND wp_terms.name LIKE '%".$id_categoria."%'";
		$query 	= mysqli_query($con, $sql);
		$row_cnt = mysqli_num_rows($query);
		
		while ( $row = mysqli_fetch_assoc($query) ) {
			
			$phpdate = strtotime( $row['post_date'] );
			
			$sqlb 	= "SELECT * FROM wp_posts WHERE post_parent = '".$row['ID']."' AND post_type='attachment'";
			$queryb 	= mysqli_query($con, $sqlb);
			$rowb = mysqli_fetch_array($queryb);
				
		?>
		<!-- Blog Post -->
          <div class="card mb-4">
            <a href="/blog/<?=$row['post_name'];?>"><img class="card-img-top" src="<?=$rowb[guid];?>" alt="<?=strip_tags(utf8_encode($row['post_title']))?>"></a>
            <div class="card-footer text-muted">Posted on <?=date('F j, Y', $phpdate)?> by <a href="#"> Admin Concasa</a></div>
            <div class="card-body">
              <h2 class="card-title"><a href="/blog/<?=$row['post_name'];?>"><?=strip_tags(utf8_encode($row['post_title']))?></a></h2>
              <p class="card-text"><?=substr(strip_tags(utf8_encode($row['post_content'])), 0, 200);?> [...]</p>
              <a href="/blog/<?=$row['post_name'];?>" class="protected-btn a-btn-2 creative anima btn btn-int-cita-models-p">Ver mas →</a>
            </div>
          </div>

		<?php }  ?>
        </div>
        
        
        <?php include $_SERVER['DOCUMENT_ROOT'].'/blog-side.php'; ?>

</div>
		 
	
	</div>

</div>


<?php include $_SERVER['DOCUMENT_ROOT'].'/script.php'; ?>

<script>
	$( function (){
    $( ".tags-show span" ).each( function (){
        var rng = Math.round(Math.random()*4);
        var rndmClass = [ 'big', 'med', 'sma' ];

        $(this).addClass( rndmClass[rng]);
    });
});
	
</script>	 

<?php mysqli_close ($con); ?>

</body>
</html>