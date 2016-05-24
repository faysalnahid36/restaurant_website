<?php
require_once('dbconnect.php');

	$item_name = $_POST['item_name'];
	$sql_status_check="SELECT item_name FROM manu_item WHERE item_name ='$item_name'";
	$result_status_check = mysqli_query($con, $sql_status_check);
	if($result_status_check ->num_rows == 0)
	{
	
	$Category = $_POST['category_name'];
	$item_name = $_POST['item_name'];
	$item_details = $_POST['item_details'];
	
	
			$query_upload="INSERT into manu_item (category_name,item_name,item_details) VALUES ('".$Category."','".$item_name."','".$item_details."')";
			$query_result= mysqli_query($con, $query_upload);
			
			 function redirect_to( $location = NULL ) 
			{
				if ($location != NULL) 
				{
				header("Location: $location?message=Upload Sucessfully $item_name item!");
				exit;
				}
			}
			
			redirect_to('add_item.php');
			
		
	}
	else
		{
			
			 function redirect_to( $location = NULL ) 
			{
				if ($location != NULL) 
				{
				header("Location: $location?message=Your Given $item_name Item has already exist!");
				exit;
				}
			}
			
			redirect_to('add_item.php');
		}

?>
