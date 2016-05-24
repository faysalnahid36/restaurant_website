<?php
require_once('dbconnect.php');
	$item = $_POST['item_name'];
	
	
	$new_item = $_POST['new_item_name'];
	$new_item_details = $_POST['new_item_details'];
	
	
	
	
	 
			$sql_status_check="SELECT item_id FROM manu_item WHERE item_name = '$item'";
			$result_status_check = mysqli_query($con, $sql_status_check);
			while ($row =$result_status_check ->fetch_assoc())
			if($result_status_check ->num_rows == 1)
			
			{
			$id = $row['item_id'];
			
			$query_upload="UPDATE manu_item SET item_name= '".$new_item."',item_details = '".$new_item_details."' WHERE item_id = '$id'";
			$query_result= mysqli_query($con, $query_upload);
			
			function redirect_to( $location = NULL ) 
					{
						if ($location != NULL) 
						{
							header("Location: $location?message=  Upload Sucessfully ".$_POST['item_name']." Item! ");
						exit;
						}
					}
			
					redirect_to('updatae_item.php');
			
			}
			
		
	
		
		else
		{
			function redirect_to( $location = NULL ) 
					{
						if ($location != NULL) 
						{
							header("Location: $location?message=  Item Not Added Sucessfully! ");
						exit;
						}
					}
			
					redirect_to('updatae_item.php');
			

		
		} 
		
	 
?>
