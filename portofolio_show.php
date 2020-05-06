	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php 
include 'all_projects_array.php';


	$project_name=$_GET['project_name'];
	if(!array_key_exists($project_name, $all_projects)){
		echo('<div class="alert alert-danger" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  project name doesnot exist
				</div>');
		die();

	}
	//	    <?php foreach ($all_projects[$project_name][$images] as $key => $value) {?>

 ?>
<!DOCTYPE html>
<html>
<head>
	<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="image/icon.ico"/>
	<link rel="stylesheet" type="text/css" href="css\font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css\animate.min.css">
	<link rel="stylesheet" href="https://brick.a.ssl.fastly.net/Roboto:400"/>
	<link rel="stylesheet" type="text/css" href="css\Css.css">
	<title>
		Portofolio Show
	</title>
	<style type="text/css">
		.active{
			background-color: red !important;
		}
		body{
			overflow: auto;;
		}
	</style>
</head>
<body>
	<div class="navpar">
		<div class="cont">
			<a href="index.php"><h2>Fo<span>cal</span></h2></a>
			<a target="_blank" class="btn btn-primary wow shake" data-wow-iteration="1000" data-wow-delay="1s" data-wow-duration="2s" style="float: left; margin: 20px 0px 0px 38px " href="<?php echo($all_projects[$project_name]['githup_url']); ?>" > Github Url Or Download</a>
			<button  class="btn btn-primary wow rubberBand" data-wow-iteration="2" data-wow-delay="1s" data-wow-duration="2s" style="float: left; margin: 20px 0px 0px 38px " data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo($all_projects[$project_name]['short_note']) ?>">
				About Project
			</button>

			<button  class="btn btn-primary wow rubberBand" data-wow-iteration="2" data-wow-delay="1s" data-wow-duration="2s" style="float: left; margin: 20px 0px 0px 38px " data-container="body" data-toggle="popover" data-placement="bottom" data-content="<?php echo($all_projects[$project_name]['program_language']) ?>">
				Program Language Used
			</button>

			<a target="_blank" href="<?php echo($all_projects[$project_name]['visit_web_site']) ?>" class="btn btn-primary wow jello" data-wow-iteration="2" data-wow-delay="1s" data-wow-duration="2s" style="float: left; margin: 20px 0px 0px 38px " data-container="body" data-toggle="popover" data-placement="bottom" >
				Visit WibSite
			</a>

		</div>
	</div>

	<div class="container">
		<br>
		<br>
		<br>
		<br>
	  <h2 class="text-center wow bounceInLeft" data-wow-delay="1s" data-wow-duration="2s"><?php echo($all_projects[$project_name]['title']); ?></h2>
	  <div id="myCarousel" class="carousel slide wow bounceInUp" data-ride="carousel" data-wow-duration="1s">
	    <ol class="carousel-indicators">
	      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <?php for ($i=1; $i < sizeof($all_projects[$project_name]['images']); $i++) { ?>
	      	<li data-target="#myCarousel" data-slide-to="<?php echo($i) ?>"></li>
	      <?php }?>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	    	<?php foreach ($all_projects[$project_name]['images'] as $key => $val) break; ?>
		      <div class="item active">
		        <img src="<?php echo(reset($all_projects[$project_name]['images'])); ?>" alt="Los Angeles" style="width:100%;">
		        <div class="carousel-caption">
		          <h3 style="color: red;"><?php $key; ?></h3>
		        </div>
		      </div>

		      <?php $images_valus=array_values($all_projects[$project_name]['images']);
		      		$images_keys=array_keys($all_projects[$project_name]['images']);
		      	for ($i=1; $i < sizeof( $images_valus) ; $i++) { ?>
		      		
			      <div class="item ">
			        <img src="<?php echo($images_valus[$i]); ?>" alt="Chicago" style="width:100%;">
			        <div class="carousel-caption">
			          <h3 style="color: red;"><?php echo( $images_keys[$i]) ?></h3>
			        </div>
			      </div>
		      	<?php }  ?>
		     
	  
	    </div>

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	</div>

</body>
</html>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 <script src="js/wow.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/java.js"></script>

<script>
function relocate_home(URL)
{
     location.href = URL;
} 
  new WOW().init();
  $(function () {
	  $('[data-toggle="tooltip"]').tooltip();
	  $('[data-toggle="popover"]').popover();
	});
</script>
