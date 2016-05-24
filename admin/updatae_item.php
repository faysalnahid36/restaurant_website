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
		
					   
					<h3 class="sidebox-title">Update Item</h3>
                   
				   <!--Start Contact form -->		                                                
		
				
					  
			
<div align="center" >
<?php
require_once('dbconnect.php');						  

$sql_category = "SELECT * FROM  category ORDER by id DESC";
$result_category = mysqli_query($con, $sql_category);
while ($row = $result_category ->fetch_assoc())
	
	{	
		$category = "#".$row['category_name'];
		$category = strtolower($category);
		echo"<div class='col-md-3 center_image'>";
		echo"<div class='grid overlay'>";
		echo"<span><a href='$category'></span>";
		echo"<img class='img-responsive' data-toggle='modal' data-target='$category' 
		src='images/".$row['category_name'].".jpg' alt='Alt Image Text'/>";
		
		echo"</div>";
	
		echo"<h3 data-toggle='modal' data-target='$category'> ".$row['category_name']."</h3>";
		echo"</div>";
		
		
		
		
					
	}


?>		
	
</div>	

		<div class="container">
		
		<?php
				require_once('dbconnect.php');						  
				
				
				$sql_category = "SELECT * FROM category";
				$result_category = mysqli_query($con, $sql_category);
				while ($row = $result_category ->fetch_assoc())
	
				{
				$category_name = $row['category_name'];
				$category_name = strtolower($category_name);
				
				echo"<div class='modal fade' id='$category_name' tabindex='-1' role='dialog'>";
					echo"<div class='modal-dialog'>";
						echo"<div class='modal-content'>";
							echo"<div class='modal-header'>";
									echo"<h3 align='center' class='modal-title'>";
										$category_name = $row['category_name'];
										$category_name = $category_name." Manu" ;
										echo $category_name;
									echo"</h3>";
							echo"</div>";
									$category_name = $row['category_name'];
							echo"<div class='modal-body'>";
								echo"<form action='action_update_item.php'  method='post'>";
									echo"<fieldset>";
											echo"<label>Select a Item: </label>";
												echo"<select name='item_name' class='input-block-level'>";
							
												$sql_category_detail = "SELECT * FROM  manu_item where category_name = '$category_name' ";
												$result_category_detail = mysqli_query($con, $sql_category_detail);
												while ($row = $result_category_detail ->fetch_assoc())
												{			
												echo"<option value ='".$row['item_name']."'>";
													echo $row['item_name'] ;
												echo"</option>";
												}
	
												echo"</select>";
												echo"<input type='text' name='new_item_name'  class='input-block-level' placeholder='New Item Name' required />";
												echo"<textarea rows='6' name='new_item_details' class='input-block-level' placeholder='New Item Details'  required >";
												echo"</textarea>";
												
	
	
												echo"<div class='action'>";
													echo"<input type='submit' value='Update' name='update'  class='btn btn-info pull-right' title='Click here to submit your message!' />";
												echo"</div>";
	
									echo"</fieldset>";
								echo"</form>";
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
		
			
					
					
				
					
	

				
			<!--End Contact form -->
										
						
					<!-- End Side Categories -->
                    					
                    </div>

                </div>
			<!--/End Sidebar Content-->
			
			
			
													 
               
				
			<!--Edit Sidebar Content here-->	
                <div class="span6 sidebar">
				
				

                    <div class="sidebox">
                        <h3 class="sidebox-title">Present item List</h3>
                   
										
						<table class="table">
								<thead>
									<tr>
										<th>Name</th>
										<th>Category</th>
										<th>Details</th>
		
       
									</tr>
								</thead>
								<?php 
											require_once('dbconnect.php');
											$sql_category = "SELECT * FROM manu_item ORDER BY category_name";
											$result_category = mysqli_query($con, $sql_category);
											while ($row = $result_category ->fetch_assoc())
												
												{
													
													echo"<tbody>";
														echo"<tr>";
														echo"<td>";
														echo $row['item_name'];
														echo"</td>";
														echo"<td>";
														echo $row['category_name'] ;
														echo"</td>";
														echo"<td>";
														echo $row['item_details'];
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


</body>
</html>