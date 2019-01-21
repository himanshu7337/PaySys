

<?php
if(isset($emp_data))
{
  foreach($emp_data as $row)
    {
      ?>

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
   
      <?php
    }
}
?>