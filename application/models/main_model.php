<?php
class main_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
	}
	public function fetch_data()
	{
		$query=$this->db->get("employee");			//select * from employee
		return $query;
	}
	public function fetch_dept()
	{
		$query=$this->db->get("department");			//select * from employee
		return $query;
	}
	public function fetch_salary()
	{
		$query=$this->db->get("salary");			//select * from employee
		return $query;
	}
	public function insert_admin($data)
	{
		$this->db->insert("admin",$data);
	}
	public function insert_employee($data)
	{
		$this->db->insert("employee",$data);
	}
	public function insert_department($data)
	{
		$this->db->insert("department",$data);
	}
	public function insert_salary($data)
	{
		$this->db->insert("salary",$data);
	}
	public function fetch_single_data($emp_id)
	{
		$this->db->where("emp_id",$emp_id);
		$query=$this->db->get("employee");
		return $query->result();
		//select * from employee where emp_id=$emp_id;
	}
	public function update_data($data,$emp_id)
	{
		$this->db->where("emp_id",$emp_id);
		$this->db->update("employee",$data);
		//Update employee set emp_name="$emp_name",dept_name="$dept_name" and emp_sal="$emp_sal" where  emp_id="$emp_id";
	}
	public function delete_data($id)
	{	
		$this->db->where("emp_id",$id);
		$this->db->delete("employee");
		//delete from employee where id=#id
	}
	public function delete_dept($id)
	{	
		$this->db->where("dept_id",$id);
		$this->db->delete("department");
		//delete from employee where id=#id
	}
	public function fetch_noofdays($emp_id)
	{
		$this->db->where("emp_id",$emp_id);
		$query=$this->db->get("db");
		return $query;
	}
	public function fetch_salperday($dept_name)
	{
		$this->db->where("dept_name",$dept_name);
		$query=$this->db->get("department");
		return $query;
	}
}//main