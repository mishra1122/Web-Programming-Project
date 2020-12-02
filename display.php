
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php  include 'links/links.php'  ?>
 	<?php  include 'css/style.php' ?>
</head>
<body>

<div class="container">
	<div class="row d-flex justify-content-center">
		<div class="col-lg-11 col-12">
			<div class="table-responsive">
			<table class="table-striped text-center table-bordered text-white">
				<thead class="bg-dark text-white">
					<tr >
						<th class="py-3 text-white " >id</th>
						<th class="py-3 text-white " >Name</th>
						<th class="py-3 text-white " >Email</th>
						<th class="py-3 text-white " >Prescription</th>
						<th class="py-3 text-white " >Age</th>
						<th class="py-3 text-white " >Pic</th>
					</tr>
				</thead>
				<tbody>
				<?php

				include 'dbcon.php';

				$selectquery = "select * from registeration";

				$query = mysqli_query($con,$selectquery);

				while($result = mysqli_fetch_array($query,1)){
				?>

				<tr>
					<td> <?php echo $result['id']; ?> </td>
					<td> <?php echo $result['username']; ?> </td>
					<td> <?php echo $result['email']; ?> </td>
					<td> <?php echo $result['prescription']; ?> </td>
					<td> <?php echo $result['age']; ?> </td>
					<td> <img src="<?php echo $result['photo']; ?>" width="100" height="50">  </td>
				</tr>

				<?php
				}

				?>

				</tbody>
			</table>
		</div>	
		</div>
	</div>
</div>


</body>
</html>