<?php

include 'dbcon.php';

if(isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$degree = $_POST['prescription'];
$age = $_POST['age'];
$file = $_FILES['photo'];
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

$file_ext = explode('.', $filename);

$file_ext_check = strtolower(end($file_ext));
echo $file_ext_check;

$valid_file_ext = array('png','jpg','jpeg');

if($fileerror == 0){

if(in_array($file_ext_check, $valid_file_ext)){
	
	$destfile = 'upload/'.$filename;
	move_uploaded_file($filepath, $destfile);

	$insertquery = "INSERT INTO registeration(username,email,prescription,age,pic) VALUES('$username', '$email', '$prescription','$age','$destfile.png')";

	$query = mysqli_query($con,$insertquery);

	if($query){
		echo "Inserted";
	}else{
		echo "Not Inserted";
	}

	header('location:index.php');
	}else{
		?>
		<script type="text/javascript"> 
		alert("Not valid Ext") ;
		window.location = "index.php"; </script>
		<?php
	}

}

}else{
	echo "No buttn has been clicked";
}



?>




