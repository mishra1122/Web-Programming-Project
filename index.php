
<!DOCTYPE html>
<html age="en">
<head>
  <title>Healthcare</title>
 	<?php include 'links/links.php'  ?>
 	<?php  include 'css/style.php' ?>
</head>

<body>
<div class="container register">
<div class="row">


<div class="col-md-3 register-left">
	<img src="../crudprac/images/crud.svg" alt=""/>
	<h3>Welcome</h3>
	<p>Please fill all the details carefully. This form can cure your life.</p>
	<a href="display.php">Check Form</a>  <br/>
</div>



<div class="col-md-9 register-right">
	
<div class="tab-content" id="myTabContent">

	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	<h3 class="register-heading">Welcome to AArogyam!!</h3>
		
	<form  action="upload.php" method="POST" enctype="multipart/form-data">
	    
	    <div class="row register-form">
					
			<div class="col-md-6">

			<div class="form-group">
			<input type="text" class="form-control" placeholder="enter your name *" name="username" value="" required  autocomplete = "off" />
			</div>
						
			<div class="form-group">
			<input type="email" class="form-control" placeholder="enter your email *" name="email" value="" required  autocomplete = "off" />
			</div>

			<div class="form-group">
			<input type="file" name="photo" class="form-control" value="">
			</div>

			
			</div>


			<div class="col-md-6">
				
			<div class="form-group">
			<input type="text" class="form-control" placeholder="enter your problem*" name="prescription" value="" required  autocomplete = "off" />
			</div>
							
			<div class="form-group">
			<input type="text" class="form-control"  placeholder="enter your age *" name="age" value="" required  autocomplete = "off"  />
			</div>

			<div class="form-group">
			<input type="submit" class="btnRegister"  name="submit" value="Register"/>
			</div>

			</div>
			
			</div>
			
		</form>
	</div>
</div>
</div>
</div>
</div>
</body>
</html>