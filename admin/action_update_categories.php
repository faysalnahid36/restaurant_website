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
		
			function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'image/bmp': return '.bmp';
				case 'image/gif': return '.gif';
				case 'image/jpeg': return '.jpg';
				case 'image/png': return '.png';
				default: return false;
				}
			}
	 
	 	
	 
			if (!empty($_FILES["uploadedimage"]["name"])) 
			{

			$file_name=$_FILES["uploadedimage"]["name"];
			$temp_name=$_FILES["uploadedimage"]["tmp_name"];
			$imgtype=$_FILES["uploadedimage"]["type"];
			$ext= GetImageExtension($imgtype);
			$Category = $_POST['category_name'];
			$new_category = $_POST['new_category_name'];
	
			$serial = $_POST['serial'];
			$imagename= $new_category.$ext;
			$target_path = "images/".$imagename;
	
				if ($ext=='.jpg')
					{
						if(move_uploaded_file($temp_name, $target_path)) 
							{
								$sql_status_check="SELECT id FROM category WHERE category_name = '$Category'";
								$result_status_check = mysqli_query($con, $sql_status_check);
								while ($row =$result_status_check ->fetch_assoc())
								if($result_status_check ->num_rows == 1)
			
								{
									$id = $row['id'];
			
									$query_upload="UPDATE  category SET category_name= '".$new_category."',images_path='".$target_path."',submission_date='".date("Y-m-d")."',serial='".$serial."' WHERE id = '$id'";
									$query_result= mysqli_query($con, $query_upload);
			
									function redirect_to( $location = NULL ) 
									{
										if ($location != NULL) 
										{
											header("Location: $location?message=  Upload Sucessfully ".$_POST['category_name']." Category! ");
											exit;
										}
									}
			
									redirect_to('update_categories.php');
			
								}
			
		
	
							}
							else
								{
									function redirect_to( $location = NULL ) 
									{
										if ($location != NULL) 
										{
											header("Location: $location?message=  Category Not Added Sucessfully! ");
											exit;
										}
									}
			
									redirect_to('update_categories.php');
				

		
								} 
		
		
					}
					
	
		
			}
		
		}
		else
		{		
			function GetImageExtension($imagetype)
			{
				if(empty($imagetype)) return false;
				switch($imagetype)
				{
				case 'image/bmp': return '.bmp';
				case 'image/gif': return '.gif';
				case 'image/jpeg': return '.jpg';
				case 'image/png': return '.png';
				default: return false;
				}
			}
	 
	 	
	 
			if (!empty($_FILES["uploadedimage"]["name"])) 
			{

			$file_name=$_FILES["uploadedimage"]["name"];
			$temp_name=$_FILES["uploadedimage"]["tmp_name"];
			$imgtype=$_FILES["uploadedimage"]["type"];
			$ext= GetImageExtension($imgtype);
			$Category = $_POST['category_name'];
			$new_category = $_POST['new_category_name'];
	
			$serial = $_POST['serial'];
			$imagename= $new_category.$ext;
			$target_path = "images/".$imagename;
	
				if ($ext=='.jpg')
					{
						if(move_uploaded_file($temp_name, $target_path)) 
							{
								$sql_status_check="SELECT id FROM category WHERE category_name = '$Category'";
								$result_status_check = mysqli_query($con, $sql_status_check);
								while ($row =$result_status_check ->fetch_assoc())
								if($result_status_check ->num_rows == 1)
			
								{
									$id = $row['id'];
			
									$query_upload="UPDATE  category SET category_name= '".$new_category."',images_path='".$target_path."',submission_date='".date("Y-m-d")."',serial='".$serial."' WHERE id = '$id'";
									$query_result= mysqli_query($con, $query_upload);
			
									function redirect_to( $location = NULL ) 
									{
										if ($location != NULL) 
										{
											header("Location: $location?message=  Upload Sucessfully ".$_POST['category_name']." Category! ");
											exit;
										}
									}
			
									redirect_to('update_categories.php');
			
								}
							}	
								
					}			
			}
		}

		
	}
}	
?>
