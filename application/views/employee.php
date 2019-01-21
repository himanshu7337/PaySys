<?php echo "Employee details"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
	<meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
</head>
<body>
	<?php
  if($this->uri->segment(2)=='inserted')
  {
    ?><script>confirm("Are you sure you want to inserted?");</script><?php
    echo '<p class="text-success">Data Inserted</p>';
    redirect("main/employee","refresh");

  }
  ?>
  <?php
  if($this->uri->segment(2)=='deleted')
  {
    ?><script>confirm("Are you sure you want to delete?");</script><?php
    echo '<p class="text-success">Data deleted</p>';
    redirect("main/employee","refresh");
  }
  ?>

<div class="container">
 <h3>Updating,Inserting and Displaying employee details :---></h3>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <form method="POST">

  <?php
if(isset($emp_data))
{
  foreach($emp_data as $row)
    {
      ?>
      <div class="container">
       <div class="form-group">
      <label>Enter the employee ID:</label>
      <input type="text" name="emp_id" class="form-control" 
      value="<?php echo $row->emp_id; ?>" placeholder="emp_id" />
    </div>
    <div class="form-group">
      <label>Enter the name of the Employee:</label>
      <input type="text" name="emp_name" class="form-control" 
      value="<?php echo $row->emp_name; ?>" placeholder="enter name..." />
    </div>
    <div class="form-group">
      <label>Enter the department name</label>
      <input type="text" name="dept_name" class="form-control" 
      value="<?php echo $row->dept_name; ?>" placeholder="dept_name" />
    </div>
    <div class="form-group">
      <label>Enter the Salary:</label>
      <input type="text" name="emp_sal" class="form-control"  
      value="<?php echo $row->emp_sal; ?>" placeholder="emp_sal" />
    </div>
    <div class="form-group">
      <input type="hidden" name="hidden_id" value="<?php echo $row->emp_id; ?>">
      <input type="submit" name="update" value="UPDATE" class="btn btn-info" />
    </div>
   </form>
      <?php
    }//foreach
}//if
?>





  
<!--for insertion -->
  <form method="POST" action="<?php echo base_url()?>index.php/main/employee">
    
		<div class="form-group">
			<label>Enter the employee ID:</label>
			<input type="text" name="emp_id" class="form-control" placeholder="emp_id" />
		</div>
		<div class="form-group">
			<label>Enter the name of the Employee:</label>
			<input type="text" name="emp_name" class="form-control" placeholder="enter name..." />
		</div>
		<div class="form-group">
			<label>Enter the department name</label>
			<input type="text" name="dept_name" class="form-control" placeholder="dept_name" />
		</div>
		<div class="form-group">
			<label>Enter the Salary:</label>
			<input type="text" name="emp_sal" class="form-control" placeholder="emp_sal" />
		</div>
		<div class="form-group">
			<input type="submit" name="insert" value="INSERT" class="btn btn-info" />
		</div>
	</form>
	</div>







<h3>Fetching data...!</h3><br> 
      <div class ="table-responsive">
         <table class="table table-bordered">
          <tr> 
            <th> Employee ID </th>
            <th> Employee name</th>
            <th> Department name</th>
            <th> Employee salary</th>
            <th> Delete</th>
            <th> Update</th>
          </tr>
          <?php 
          if($fetch_data->num_rows()>0)
          {
            foreach($fetch_data->result() as $row)
            {
              ?>
                <tr>
                  <td><?php echo $row->emp_id; ?></td>
                  <td><a href="<?php echo base_url(); ?>index.php/main/slip/<?php echo $row->emp_id; ?>/<?php echo $row->dept_name; ?>"><?php echo $row->emp_name; ?></a></td>
                  <td><?php echo $row->dept_name; ?></td>
                  <td><?php echo $row->emp_sal; ?></td>
                 
                  <td><a href="<?php echo base_url(); ?>index.php/main/delete_data/<?php echo $row->emp_id; ?>">DELETE</a></td>
                  <td><a href="<?php echo base_url(); ?>index.php/main/update_data/<?php echo $row->emp_id; ?>">EDIT</a></td>
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

<script>
  $(document).ready(function()
  {
    $('.delete_data').click(function()
    {
      var id=$(this).attr("emp_id");
      if(confirm("Are you sure you want to delete?"))
      {
        var url="<?php echo base_url(); ?>"+"index.php/main/delete_data/"+id;
        window.location="<?php echo base_url(); ?>index.php/main/delete_data/"+id;
      }
      else
      {
        return false;
      }
    });
  });
</script>


<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>

