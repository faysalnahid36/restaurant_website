<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Maharaja admin</title>
	
	
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">

    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="scripts/wookmark/css/style.css" rel="stylesheet" type="text/css" />	<link href="scripts/yoxview/yoxview.css" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="styles/custom.css" rel="stylesheet" type="text/css" />
    
</head>
<body id="pageBody">

<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.php" id="divSiteTitle">Maharaja Admin</a><br />
                        <a href="index.php" id="divTagLine">Admin Section of Maharaja</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
						<div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                        MANU <span class="icon-chevron-down icon-white"></span>
                        </button>
                            <div class="nav-collapse collapse">
								<ul class="nav nav-pills ddmenu">
									<li><a href="index.php">Home</a></li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle">Manage Categories <b class="caret"></b></a>
											<ul class="dropdown-menu">                            
											<li><a href="add_categories.php">Add Categories </a></li>
											<li><a href="update_categories.php">Update Categories </a></li>
											<li><a href="delete_category.php">Delate Categories </a></li>
											</ul>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle">Manage Items <b class="caret"></b></a>
											<ul class="dropdown-menu">                            
											<li><a href="add_item.php">Add Items </a></li>
											<li><a href="updatae_item.php">Update Items </a></li>
											<li><a href="delete_item.php">Delete Items</a></li>
											</ul>
										</li>	
								</ul>
                            </div>
						</div>
                    </div>

                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>

    <div class="contentArea">

        <div class="divPanel notop page-content">

            
            	
            <div class="row-fluid" >
			
			
			<div class="span6 sidebar">
				
				

                    <div class="sidebox">
                <?php
				
				if(!empty($_GET['message'])) 
				{
				$message = $_GET['message'];
				echo $message;
				}
				?>
					   
					<h3 class="sidebox-title">Update Here</h3>
                   
				   <!--Start Contact form -->		                                                
<form action="action_update_categories.php" enctype="multipart/form-data" method="post">
  <fieldset>
    <label>Select a Category: </label>
	<select id="sc" name="category_name" class="input-block-level">
	<?php 
		require_once('dbconnect.php');
		$sql_category = "SELECT * FROM category ORDER BY serial";
		$result_category = mysqli_query($con, $sql_category);
		while ($row = $result_category ->fetch_assoc())
												
		{
													
		echo"<option value = '".$row['category_name']."'>";
		echo $row['category_name'];
		echo"</option>";
		}									
	?>
	</select></br>
	
	
	
	
	<input type="text" name="new_category_name"  value=""  class="input-block-level" placeholder="Give New Category Name" required /></br></br>
    <input type="text" name="serial"  value="" class="input-block-level" placeholder="Give New Serial Id" required/></br></br>
	<input name="uploadedimage" type="file" value="" class="input-block-level" placeholder="Upload a Image" required></br>
    <div class="actions">
	<input type="submit" value="Update" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>  	

				

			<!--End Contact form -->
										
						
					<!-- End Side Categories -->
                    					
                    </div>

                </div>
			<!--/End Sidebar Content-->
			
			
			
													 
               
				
			<!--Edit Sidebar Content here-->	
                <div class="span6 sidebar">
				
				

                    <div class="sidebox">
                        <h3 class="sidebox-title">Present Category List</h3>
                   
										
						<table class="table">
								<thead>
									<tr>
										<th>Serial</th>
										<th>Category</th>
									</tr>
								</thead>
										
										<?php 
											require_once('dbconnect.php');
											$sql_category = "SELECT * FROM category ORDER BY serial";
											$result_category = mysqli_query($con, $sql_category);
											while ($row = $result_category ->fetch_assoc())
												
												{
													
													echo"<tbody>";
														echo"<tr>";
														echo"<td>";
														echo $row['serial'];
														echo"</td>";
														echo"<td>";
														echo $row['category_name'] ;
														echo"</td>";
														echo"</tr>";
													echo"</tbody>";
													
												}									
										?>
								
						</table>
                    
          
 
 
					 
					<!-- End Side Categories -->
                    					
                    </div>

                </div>
			<!--/End Sidebar Content-->
				
				
            </div>			

            <div id="footerInnerSeparator"></div>
        </div>
    </div>

    <div id="footerOuterSeparator"></div>

    <div id="divFooter" class="footerArea">

        <div class="divPanel">

            <div class="row-fluid">
                <div class="span12">
                    <p class="copyright">
                        Copyright © 2015 Maharaja. All Rights Reserved.
                    </p>

                   
                </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />

<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

<script src="scripts/wookmark/js/jquery.wookmark.js" type="text/javascript"></script>
<script type="text/javascript">$(window).load(function () {var options = {autoResize: true,container: $('#gridArea'),offset: 10};var handler = $('#tiles li');handler.wookmark(options);$('#tiles li').each(function () { var imgm = 0; if($(this).find('img').length>0)imgm=parseInt($(this).find('img').not('p img').css('margin-bottom')); var newHeight = $(this).find('img').height() + imgm + $(this).find('div').height() + $(this).find('h4').height() + $(this).find('p').not('blockquote p').height() + $(this).find('iframe').height() + $(this).find('blockquote').height() + 5;if($(this).find('iframe').height()) newHeight = newHeight+15;$(this).css('height', newHeight + 'px');});handler.wookmark(options);handler.wookmark(options);});</script>
<script src="scripts/yoxview/yox.js" type="text/javascript"></script>
<script src="scripts/yoxview/jquery.yoxview-2.21.js" type="text/javascript"></script>
<script type="text/javascript">$(document).ready(function () {$('.yoxview').yoxview({autoHideInfo:false,renderInfoPin:false,backgroundColor:'#ffffff',backgroundOpacity:0.8,infoBackColor:'#000000',infoBackOpacity:1});$('.yoxview a img').hover(function(){$(this).animate({opacity:0.7},300)},function(){$(this).animate({opacity:1},300)});});</script>


</body>
</html>