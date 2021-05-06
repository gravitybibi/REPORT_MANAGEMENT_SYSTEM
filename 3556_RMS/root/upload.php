<?php

	session_start();
	if(!isset($_SESSION['u'])){
			header("location:index.php");
		}
?>

<?php

// Check if image file is a actual image or fake image

if(isset($_POST["btnupload"])) {
	
	$check = getimagesize($_FILES["txtimage1"]["tmp_name"]);
    if($check !== false) {

	$filetmp = $_FILES["txtimage1"]["tmp_name"];
	$filename = $_FILES["txtimage1"]["name"];
	$filetype = $_FILES["txtimage1"]["type"];
	$filepath = "picture_storage/".$filename;

	  move_uploaded_file($filetmp,$filepath);
	
	 $c = mysqli_connect("localhost","root","","report_management_system");
	 $s = "UPDATE pic_store_view SET picture_uploading = '$filename' where id_employee = '".$_SESSION['u']."'";
	 $result = mysqli_query($c,$s);
	 
	 echo "Upload Picture Succesfull";
	
	}
	else {
		
       echo "File is not an image.";
       $uploadOk = 0;
    }
	}
	
?>
<br/>
<br/>
<a href="report_page.php">Return to report page</a>