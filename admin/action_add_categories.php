<?php
require_once('dbconnect.php');


	$sql_status_check="SELECT category_name FROM category WHERE category_name = '".$_POST['category_name']."'";
	$result_status_check = mysqli_query($con, $sql_status_check);
	if($result_status_check ->num_rows == 0)
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
	$serial = $_POST['serial'];
	$imagename= $Category.$ext;
	$target_path = "images/".$imagename;
	
	if ($ext=='.jpg')
		{
		
		if(move_uploaded_file($temp_name, $target_path)) 
		{
			
	
			$query_upload="INSERT into category (category_name,images_path,submission_date,serial) VALUES ('".$Category."','".$target_path."','".date("Y-m-d")."','".$serial."')";
			$query_result= mysqli_query($con, $query_upload);
			
			 function redirect_to( $location = NULL ) 
			{
				if ($location != NULL) 
				{
				header("Location: $location?message=Upload Sucessfully $Category Category!");
				exit;
				}
			}
			
			redirect_to('add_categories.php');
			
		
	
		}
		else
		{
			
			 function redirect_to( $location = NULL ) 
			{
				if ($location != NULL) 
				{
				header("Location: $location?message=Category Not Added Sucessfully!");
				exit;
				}
			}
			
			redirect_to('add_categories.php');
			

		
		} 
		
		}
		else
			{
			
			 function redirect_to( $location = NULL ) 
			{
				if ($location != NULL) 
				{
				header("Location: $location?message=Image file type not supported! Plz upload .jpg type Image");
				exit;
				}
			}
			
			redirect_to('add_categories.php');
			}
	
		
	}
		
	}
	else
		{
			
			 function redirect_to( $location = NULL ) 
			{
				if ($location != NULL) 
				{
				header("Location: $location?message=Your Given Category has already exist!");
				exit;
				}
			}
			
			redirect_to('add_categories.php');
		}

?>
