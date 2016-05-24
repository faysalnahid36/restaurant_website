
<?php
require_once('dbconnect.php');


	$category = $_POST['item_name'];
	
		

				$query_upload="DELETE FROM manu_item WHERE item_name = '".$_POST['item_name']."'";

					$query_result= mysqli_query($con, $query_upload);
					
					function redirect_to( $location = NULL ) 
					{
						if ($location != NULL) 
						{
							header("Location: $location?message= Delete Sucessfully ".$_POST['item_name']." item!");
						exit;
						}
					}
			
					redirect_to('delete_item.php');


?>
