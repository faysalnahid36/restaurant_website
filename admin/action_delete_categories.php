
<?php
require_once('dbconnect.php');

if (array_key_exists('category_name', $_POST)) 
{
$category = $_POST['category_name'];
$sql_status_check="SELECT images_path FROM category WHERE category_name = '$category'";
$result_status_check = mysqli_query($con, $sql_status_check);
while ($row =$result_status_check ->fetch_assoc())
if($result_status_check ->num_rows == 1)
			
	{
			$filename = $row['images_path'];
			
		if (file_exists($filename)) 
		{
			unlink($filename);
			$category = $_POST['category_name'];
	
		

				$query_delete="DELETE FROM category WHERE category_name = '".$_POST['category_name']."'";

					$query_result= mysqli_query($con, $query_delete);
					
					function redirect_to( $location = NULL ) 
					{
						if ($location != NULL) 
						{
							header("Location: $location?message= Delete Sucessfully ".$_POST['category_name']." category!");
						exit;
						}
					}
			
					redirect_to('delete_category.php');

		}	
	}				

}
  else 
	{
		
				$query_delete="DELETE FROM category WHERE category_name = '".$_POST['category_name']."'";

					$query_result= mysqli_query($con, $query_delete);
					
					function redirect_to( $location = NULL ) 
					{
						if ($location != NULL) 
						{
							header("Location: $location?message= Delete Sucessfully ".$_POST['category_name']." category!");
						exit;
						}
					}
			
					redirect_to('delete_category.php');
    
	}

		
			
		

 


 

?>
