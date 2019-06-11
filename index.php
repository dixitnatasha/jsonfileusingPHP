<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	table{
  		border: 1px solid grey;
	}
</style>
<body>
	<div class="row">
		<div class="col-lg-3">
			
		</div>
		<div class="col-lg-6">
			<h3 class="text-center">Data Form</h3>

			<form method="post" action="filldata.php" id="json_data_form">
				<div class="form-group">
					<label>Name :</label>
					<input class="form-control" type="text" name="name" id="name" placeholder="Name">
				</div>
				<div class="form-group">
					<label>City :</label>
					<input class="form-control" type="text" name="city" id="city" placeholder="City">
				</div>
				<div class="form-group">
					<label>Occupation :</label>
					<input class="form-control" type="text" name="occupation" id="occupation" placeholder="Occupation">
				</div>
				<button class="btn btn-success" id="submit" type="submit"> Submit</button>
			</form>
		</div>
		<div class="col-lg-3">
			
		</div>
	</div>
		<div class="container">
		<h3 class="bg-primary text-center">Result Data</h3>
		<?php
		$str = file_get_contents('results.json');
		$data_array = json_decode($str, true);
		?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Name</th>
					<th>City</th>
					<th>Occupation</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($data_array as $key => $value) { ?>
					<tr>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['city']; ?></td>
						<td><?php echo $value['occupation']; ?></td>
					</tr>
				<?php }
				?>
			</tbody>
		</table>
	</div>
</body>
<script type="text/javascript">

</script>
</html>