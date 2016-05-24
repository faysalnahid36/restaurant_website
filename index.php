<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="webthemez">
<title>Maharaja</title>

<!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="assets/css/styles.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/css/animate-custom.css" rel="stylesheet">
<script src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

		<!-- Start VisualLightBox.com HEAD section -->

		<link rel="stylesheet" href="index_files/vlb_files0/vlightbox0.css" type="text/css" />

		<link rel="stylesheet" href="index_files/vlb_files0/visuallightbox.css" type="text/css" media="screen" />
<!--script src="index_files/vlb_engine/jquery.min.js" type="text/javascript"></script-->

		<script src="index_files/vlb_engine/visuallightbox.js" type="text/javascript"></script>

		<!-- End VisualLightBox.com HEAD section -->

</head>
<body data-spy="scroll" data-target="#navbar-main">
<div id="navbar-main">
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top" id="navbar-main" role="navigation">
    <div class="container">

      <div class="navbar-header">
	   <div class="pull-left logo">
        <a class="" href="#home"><img src="assets/img/logo.png" /></a>
       </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
		</button>
        </div>
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav pull-right">
          <li><a href="#home-section" class="smoothScroll">Home</a></li>
          <li><a href="#services" class="smoothScroll">Offers</a></li>
          <li><a href="#portfolio" class="smoothScroll">Menu</a></li>
          <li><a href="#team" class="smoothScroll">Gallery</a></li>
          <li><a href="#about" class="smoothScroll">About Us</a></li>
          <li><a href="#contact" class="smoothScroll">Contact us</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
</div>

<!-- ==== HEADERWRAP ==== -->
<div id="home-section">
<div id="headerwrap" name="home">
  <header class="clearfix tb">
 <div class="tb-cell text-center">
 <i class="fa fa-heart-o icon"></i>
    <h1>Maharaja - The Elegance of Indian Cuisine</h1>
    <p> Checkout our chefs specials today!! </p>
    <a href="#portfolio" class="smoothScroll btn btn-lg">Today's Special</a>
	</div>
	</header>
</div>

</div>
<div class="div-pattern2"></div>
<!-- /headerwrap -->



<!-- ==== SERVICES ==== -->
<div id="services" name="services">
  <div class="container">
    <div class="row">
      <h2 class="centered">OUR SPECIAL OFFERS!</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2">
        <p class="large"></p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-birthday-cake fa-3x"></i>
        <h3>PARTY!</h3>
        <p>Maharaja is the best place for Party! If you are looking for a homely place to arrange a party, Maharaja offers the full package of Food, Drinks and Music. </p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-cutlery fa-3x"></i>
        <h3>CATERING</h3>
        <p>If you are looking to add some spice to your event with the Indian Catering experience, you came to the right place.</p>
      </div>
      <div class="col-lg-4 callout"> <i class="fa fa-cube fa-3x"></i>
        <h3>TAKEAWAY</h3>
        <p>Experience the great taste of Maharaja menu where ever you want. Checkout our quick takeaway service.</p>
      </div>
    </div>
    <!-- row -->
  </div>
</div>
<!-- container -->
<section class="hero-section section">
        <div class="container">
            <div class="highlight tb">
                <div class="tb-cell">
                    <p>For more information about Party booking, Catering and Takeaway please contact us!</br>
					Our team is ready to provide you with the best service!!</p>
                </div>
                <div class="links tb-cell">
                    <div class="reservation-link">
                        <a href="#" class="btn reservation-btn">CONTACT US</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
	<div class="div-pattern"></div>

<!-- ==== PORTFOLIO ==== -->
<div id="portfolio" name="portfolio">
  <div class="container">
    <div class="row">
      <h2 class="centered">MAHARAJA’S MENU</h2>
      <hr>
      <div class="col-lg-8 col-lg-offset-2 centered">
        <p class="large">The Maharaja menu focuses on both the northern and southern cuisines of India. Dine in, takeaway or catering – your service is just a phone call away!</br>
					If you are new to indian cuisine, please checkout our set menu!!</p>
      </div>
    </div>
    <!-- /row -->
	
	
	<div class='row  align='center' center_image'>
<?php
require_once('dbconnect.php');						  

$sql_category = "SELECT * FROM  category ORDER by serial";
$result_category = mysqli_query($con, $sql_category);
while ($row = $result_category ->fetch_assoc())
	
	{	
		$category = "#".$row['category_name'];
		$category = strtolower($category);
		echo"<div  align='center' class='top-buffer col-md-15 col-sm-3'>";
		echo"<span><a href='$category'></span>";
		echo"<img id='circular' class='img-responsive' data-toggle='modal' data-target='$category' 
		src='admin/images/".$row['category_name'].".jpg' alt='Alt Image Text'/>";
		
	
		echo"<h3 align='center' data-toggle='modal' data-target='$category'> ".$row['category_name']."</h3>";
		echo"</div>";
		
		
					
	}


?>		
	
</div>	

		<div class="container">
		
		<?php
				require_once('dbconnect.php');						  
				//$info = $_GET['info'];
				
				$sql_category = "SELECT * FROM  category ORDER by serial";
				$result_category = mysqli_query($con, $sql_category);
				while ($row = $result_category ->fetch_assoc())
	
				{
				$category_name = $row['category_name'];
				$category_name = strtolower($category_name);
				//echo"$category_name";
				echo"<div class='modal fade' id='$category_name' tabindex='-1' role='dialog'>";
					echo"<div class='modal-dialog'>";
						echo"<div class='modal-content'>";
							echo"<div class='modal-header'>";
							echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
							echo"<h3 align='center' style='color:#813049'  class='modal-title'>";
							$category_name = $row['category_name'];
							$category_name = $category_name;
							echo $category_name;
							echo"</h3>";
							echo"</div>";
							$category_name = $row['category_name'];
							//echo $category_name;
							echo"<div class='modal-body'>";
							$sql_category_detail = "SELECT * FROM  manu_item where category_name = '$category_name' ORDER by item_id DESC";
							$result_category_detail = mysqli_query($con, $sql_category_detail);
							while ($row = $result_category_detail ->fetch_assoc())
								
								{	
									$item_name = $row['item_name'];
									$item_details = $row['item_details'];
									
									echo"<h4 style='color:#ff6b08' class='modal-subtitle'>";
									echo $item_name;
									
										echo"<p style='color:#9f9f9f; line-height: 130%;'>";
										echo $item_details;
										echo"</p>";
									
									echo"</h4>";
										
											
								}
								echo"</div>";
									echo"<div class='modal-footer'>";
										echo"<a href='#' class='btn btn-default' data-dismiss='modal'>Close</a>";
									echo"</div>";
							
						echo"</div>";
					echo"</div>";	
				echo"</div>";
				}
				

			?>		
			
		</div>
  <div  class="container">
</div>
<br>
<br>

<!-- ==== TEAM MEMBERS ==== -->
<div id="team" name="team">
  <div class="container">
    <div class="row centered">
      <h2 class="centered">Take A Virtual Tour!</h2>

	   <div class="col-lg-12 col-lg-offset-0 centered">

    </div>	<!-- Start VisualLightBox.com BODY section id=0 -->

	<div id="vlightbox0">
	
	

		<a class="vlightbox0" href="index_files/vlb_images0/front_view_night_1.jpg" title="Front View (Night)"><img src="index_files/vlb_thumbnails0/front_view_night_1.jpg" alt="Front View (Night)"/><b>Front View (Night)</b></a>
		<a class="vlightbox0" href="index_files/vlb_images0/front_view_night_2.jpg" title="Front View (Night)"><img src="index_files/vlb_thumbnails0/front_view_night_2.jpg" alt="Front View (Night)"/><b>Front View (Night)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/front_view_night_3.jpg" title="Front View (Night)"><img src="index_files/vlb_thumbnails0/front_view_night_3.jpg" alt="Front View (Night)"/><b>Front View (Night)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/front_view_1_day.jpg" title="Front View (Day)"><img src="index_files/vlb_thumbnails0/front_view_1_day.jpg" alt="Front View (Day)"/><b>Front View (Day)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/front_view_2_day.jpg" title="Front View (Day)"><img src="index_files/vlb_thumbnails0/front_view_2_day.jpg" alt="Front View (Day)"/><b>Front View (Day)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/inside_view_night.jpg" title="Inside View (Night)"><img src="index_files/vlb_thumbnails0/inside_view_night.jpg" alt="Inside View (Night)"/><b>Inside View (Night)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/inside_view_1_day.jpg" title="Inside View (Day)"><img src="index_files/vlb_thumbnails0/inside_view_1_day.jpg" alt="Inside View (Day)"/><b>Inside View (Day)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/inside_view_2_day.jpg" title="Inside View (Day)"><img src="index_files/vlb_thumbnails0/inside_view_2_day.jpg" alt="Inside View (Day)"/><b>Inside View (Day)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/inside_view_1st_flr_1.jpg" title="Inside View (1st Floor)"><img src="index_files/vlb_thumbnails0/inside_view_1st_flr_1.jpg" alt="Inside View (1st Floor)"/><b>Inside View (1st Floor)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/inside_view_1st_flr_2.jpg" title="Inside View (1st Floor)"><img src="index_files/vlb_thumbnails0/inside_view_1st_flr_2.jpg" alt="Inside View (1st Floor)"/><b>Inside View (1st Floor)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/inside_view_1st_flr_3.jpg" title="Inside View (1st Floor)"><img src="index_files/vlb_thumbnails0/inside_view_1st_flr_3.jpg" alt="Inside View (1st Floor)"/><b>Inside View (1st Floor)</a>
<!--
		<a class="vlightbox0" href="index_files/vlb_images0/interior_1.jpg" title="Interior"><img src="index_files/vlb_thumbnails0/interior_1.jpg" alt="Interior"/><b>Interior</a>
-->
		<a class="vlightbox0" href="index_files/vlb_images0/menu_book.jpg" title="Menu Book Cover"><img src="index_files/vlb_thumbnails0/menu_book.jpg" alt="Menu Book Cover"/><b>Menu Book Cover</a>
		<a class="vlightbox0" href="index_files/vlb_images0/maharaja_special_0.jpg" title="Maharaja Special"><img src="index_files/vlb_thumbnails0/maharaja_special_0.jpg" alt="Maharaja Special"/><b>Maharaja Special</a>
		<a class="vlightbox0" href="index_files/vlb_images0/maharaja_special_1.jpg" title="Maharaja Special (Chicken)"><img src="index_files/vlb_thumbnails0/maharaja_special_1.jpg" alt="Maharaja Special (Chicken)"/><b>Maharaja Special (Chicken)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/maharaja_special_2.jpg" title="Maharaja Special (Tandoori)"><img src="index_files/vlb_thumbnails0/maharaja_special_2.jpg" alt="Maharaja Special (Tandoori)"/><b>Maharaja Special (Tandoori)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/maharaja_special_3.jpg" title="Maharaja Special (Rice)"><img src="index_files/vlb_thumbnails0/maharaja_special_3.jpg" alt="Maharaja Special (Rice)"/><b>Maharaja Special (Rice)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/maharaja_special_4.jpg" title="Maharaja Special (Dal)"><img src="index_files/vlb_thumbnails0/maharaja_special_4.jpg" alt="Maharaja Special (Dal)"/><b>Maharaja Special (Dal)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/happy_diners.jpg" title="Happy Diners"><img src="index_files/vlb_thumbnails0/happy_diners.jpg" alt="Happy Diners"/><b>Happy Diners</a>
		<a class="vlightbox0" href="index_files/vlb_images0/street_view_night_1.jpg" title="Street View (Night)"><img src="index_files/vlb_thumbnails0/street_view_night_1.jpg" alt="Street View (Night)"/><b>Street View (Night)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/street_view_night_2.jpg" title="Street View (Night)"><img src="index_files/vlb_thumbnails0/street_view_night_2.jpg" alt="Street View (Night)"/><b>Street View (Night)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/street_view_night_3.jpg" title="Street View (Night)"><img src="index_files/vlb_thumbnails0/street_view_night_3.jpg" alt="Street View (Night)"/><b>Street View (Night)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/street_view_1.jpg" title="Street View (Day)"><img src="index_files/vlb_thumbnails0/street_view_1.jpg" alt="Street View (Day)"/><b>Street View (Day)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/street_view_2.jpg" title="Street View (Day)"><img src="index_files/vlb_thumbnails0/street_view_2.jpg" alt="Street View (Day)"/><b>Street View (Day)</a>
		<a class="vlightbox0" href="index_files/vlb_images0/the_bar_and_the_server.jpg" title="The Bar & The Server"><img src="index_files/vlb_thumbnails0/the_bar_and_the_server.jpg" alt="The Bar & The Server"/><b>The Bar & The Server</a>
		

	</div>

	<script src="index_files/vlb_engine/vlbdata0.js" type="text/javascript"></script>

	<!-- End VisualLightBox.com BODY section -->


  </div>
  <!-- row -->
</div>
<!-- container -->

<!-- ==== ABOUT ==== -->
<div id="about" name="about">
  <div class="container">
    <div class="row white">
      <h2 class="centered">Our Shop</h2>
      <hr>
      <div class="col-md-6"> <img class="img-responsive" src="assets/img/about/about1.jpg" align=""> </div>
      <div class="col-md-6">
        <h3>Maharaja - The Elegance of Indian Cuisine</h3>
        <p>At Maharaja Restaurant of Queensway, London – experience the elegance and royalty of authentic indian cuisine like a “Maharaja” in a more homely environment on a plebeian budget? Maharaja, an Authentic Indian Restaurant , where food is is prepared by professional chefs, who have been delivering the top quality food and serving food lovers with Passion, for years. Enjoy our sumptuous and exotic delicacies sure to please your appetite and cravings for authentic Indian Cuisine.</p>

      </div>
    </div>
    <!-- row -->
  </div>
</div>
<!-- container -->

<!-- ==== CONTACT ==== -->
<div id="contact" name="contact">
  <div class="container">
    <div class="row">
      <h2 class="centered">Get In Touch</h2>
      <hr>

    </div>
    <div class="row">
      <div class="col-md-7">
	  <strong>Please give us your feedback!</strong>
      
        <form id="contact" method="post" class="form" role="form">
          <div class="row">
            <div class="col-md-12 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required />
            </div>
            <div class="col-md-12 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
            </div>
			 <div class="col-md-12 form-group">
              <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
              <button class="btn btn-lg pull-left" type="submit">Send Message</button>
            </div>
          </div>

        </form>
        <!-- form -->
      </div>
	  <div class="col-md-5">


	  <i class="fa fa-map-marker fa-2x"></i><br>
        <strong>Maharaja</strong>
		<p>50 Queensway<br>
          London, W2 3RY</p>

      <br/>
	  <i class="fa fa-envelope-o fa-2x"></i>
        <p>info@maharaja50.co.uk</p>

       <br/>
	  <i class="fa fa-phone fa-2x"></i>
        <p> 02077271135</p>

	  </div>
    </div>
    <!-- row -->

  </div>
</div>
<!-- container -->

<div id="footerwrap">
  <div class="container">
    <div class="row">
      <div class="col-md-8"> <span class="copyright">Copyright &copy; 2015. Design by <a href="http://www.alphaitandtraders.com">AlphaIT</a></span> </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li><a href="#"><i class="fa fa-twitter"></i></a> </li>
          <li><a href="#"><i class="fa fa-facebook"></i></a> </li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a> </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/js/smoothscroll.js"></script>
<script type="text/javascript" src="assets/js/custom-scripts.js"></script>

 
</body>
</html>
