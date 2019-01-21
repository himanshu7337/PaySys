<?php echo "Admin registration"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
	


<div class="container">
		<h3>Inserting Admin details for registration:---></h3>
	<form method="POST" action="<?php echo base_url()?>index.php/main/admin">
		
		<div class="form-group">
			<label>Enter the user ID:</label>
			<input type="text" name="user_id" class="form-control" placeholder="enter user_ID" />
		</div>
		<div class="form-group">
			<label>Enter the password:</label>
			<input type="text" name="pwd" class="form-control" placeholder="enter password..." />
		</div>
		<div class="form-group">
			<input type="submit" name="insert" value="INSERT" class="btn btn-info" />
		</div>
	</form>
	</div>
<?php
echo "Keep ur friends close and ur enemies closer!!!";
?>
