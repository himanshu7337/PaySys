<?php echo "Department details"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
	


<div class="container">
		<h3>Inserting and Displaying Department details :---></h3>
	<form method="POST" action="<?php echo base_url()?>index.php/main/department">
		
		<div class="form-group">
			<label>Enter the department ID:</label>
			<input type="text" name="dept_id" class="form-control" placeholder="dept_id" />
		</div>
		<div class="form-group">
			<label>Enter the name of the department:</label>
			<input type="text" name="dept_name" class="form-control" placeholder="enter dept name..." />
		</div>
		<div class="form-group">
			<label>Enter the no of employees</label>
			<input type="text" name="noofemp" class="form-control" placeholder="no. of emp" />
		</div>
		<div class="form-group">
			<input type="submit" name="insert" value="INSERT" class="btn btn-info" />
		</div>
	</form>
	</div>
<?php
echo "Keep ur friends close and ur enemies closer!!!";
?>






<h3>Fetching data...!</h3><br> 
      <div class ="table-responsive">
         <table class="table table-bordered">
          <tr> 
            <th> Department ID</th>
            <th> Department name</th>
            <th> No. of employee </th>
            <th> Delete </th>
            <th> Edit </th>
          </tr>
          <?php 
          if($fetch_dept->num_rows()>0)
          {
            foreach($fetch_dept->result() as $row)
            {
              ?>
                <tr>
                  <td><?php echo $row->dept_id; ?></td>
                  <td><?php echo $row->dept_name; ?></td>
                  <td><?php echo $row->noofemp; ?></td>
                  <td><a href="<?php echo base_url(); ?>index.php/main/delete_dept/<?php echo $row->dept_id; ?>">DELETE</a></td>
                  <td><a href="<?php echo base_url(); ?>index.php/main/update_dept/<?php echo $row->dept_id; ?>">EDIT</a></td>
                </tr>
              <?php
            }
          }
          else
          {
            ?>
              <tr>
                <td>No data found...!</td>
              </tr>
            <?php
          }
          ?>
        </table>
      </div>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>

