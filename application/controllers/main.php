<?php
class main extends CI_Controller
{
	public function index()
	{
		$this->load->view('employee');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function pdflang()
	{
		$this->load->view('pdflang');
	}
	public function login()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|min_length[5]');
		if($this->form_validation->run()==TRUE){
			//check the user in the db
			$username=$_POST['username'];
			$password=$_POST['password'];

			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where(array('username'=>$username,'password'=>$password));
			$query=$this->db->get();
			$user=$query->row();
			//if user exists
			if($user->email){
				$this->session->set_flashdata("success","Successfully logged in!!!");
				//set session variable
				$_SESSION['user_logged']=TRUE;
				$_SESSION['username']=$user->username;
				//redirect to profile page
				redirect("main/home","refresh");
			}else{
				$this->session->set_flashdata("error","No such account exists!!!");
				//redirect("main/login","refresh");
			}
		}
		$this->load->view('login');		//load view
	}//login
	
	public function employee()
	{
		$this->load->model("main_model");
		$this->form_validation->set_rules("emp_id","Employee ID",'required');
		if($this->form_validation->run()==TRUE)
		{
			$data=array(
				"emp_id"=>$this->input->post("emp_id"),
				"emp_name"=>$this->input->post("emp_name"),
				"dept_name"=>$this->input->post("dept_name"),
				"emp_sal"=>$this->input->post("emp_sal")
			);
			if($this->input->post("update"))
			{
				$this->main_model->update_data($data,$this->input->post("hidden_id"));
				//redirect(base_url()."main/updated");
				redirect("main/employee","refresh");
			}//update
			if($this->input->post("insert"))
			{
				$this->main_model->insert_employee($data);
				redirect(base_url()."index.php/main/inserted");
				redirect("main/employee","refresh");
			}//insert
			
		}//if
		else
		{
			$this->load->model("main_model");
			$data["fetch_data"]=$this->main_model->fetch_data();
			$this->load->view("employee",$data);
		}//else
	}//employee
	public function department()
	{
		$this->load->model("main_model");
		$this->form_validation->set_rules("dept_id","Department ID",'required');
		if($this->form_validation->run()==TRUE)
		{
			$data=array(
				"dept_id"=>$this->input->post("dept_id"),
				"dept_name"=>$this->input->post("dept_name"),
				"noofemp"=>$this->input->post("noofemp")
			);
			$this->main_model->insert_department($data);
			redirect("main/department","refresh");
		}//if
		else
		{
		$this->load->model("main_model");
		$data["fetch_dept"]=$this->main_model->fetch_dept();
		$this->load->view("department",$data);
		}//else
	}
	public function salary()
	{
		$this->load->model("main_model");
		$this->form_validation->set_rules("sal_basic","Basic Salary",'required');
		if($this->form_validation->run()==TRUE)
		{
			$data=array(
				"sal_basic"=>$this->input->post("sal_basic")
			);
			$this->main_model->insert_salary($data);
			redirect("main/salary","refresh");
		}//if
		else
		{
		$this->load->model("main_model");
		$data["fetch_salary"]=$this->main_model->fetch_salary();
		$this->load->view("salary",$data);
		}//else
	}//salary
	public function admin()
	{
			$this->load->model("main_model");
			$user_id=$this->input->post("user_id");
			$pwd=$this->input->post("pwd");
			if($user_id!='' && $pwd!='')
			{
			$data=array(
				"user_id"=>$this->input->post("user_id"),
				"pwd"=>$this->input->post("pwd")
			);
			$this->main_model->insert_admin($data);
			}//if
			//$this->session->set_flashdata("success","Successfully inserted..!");
			//echo "Successfully inserted..!" 
			$this->load->view('admin');
	}
	public function update_data($emp_id)
	{
		//print_r($_POST);exit;
		$this->load->model("main_model");
		$emp_id=$this->input->post('emp_id');
		$emp_name=$this->input->post('emp_name');
		$dept_name=$this->input->post('dept_name');
		$emp_sal=$this->input->post('emp_sal');
		if($emp_id!='' && $emp_name!='' && $dept_name!=''&& $emp_sal!=''){
			$data=array();
			$data['emp_id']=$emp_id;
			$data['emp_name']=$emp_name;
			$data['dept_name']=$dept_name;
			$data['emp_sal']=$emp_sal;
			$this->main_model->update_data($data,$emp_id);
			redirect(base_url().'index.php/main/employee');
		}
		$id=$this->uri->segment(3);
		$data["emp_data"]=$this->main_model->fetch_single_data($id);
		$data["fetch_data"]=$this->main_model->fetch_data();
		$this->load->view("employee",$data);
	}
	public function delete_data()
	{
		$id=$this->uri->segment(3);
		$this->load->model("main_model");
		$this->main_model->delete_data($id);
		redirect(base_url()."index.php/main/deleted");
		redirect("index.php/main/employee","refresh");
	}
	public function deleted()
	{
		$this->index();
	}
	public function delete_dept()
	{
		$id=$this->uri->segment(3);
		$this->load->model("main_model");
		$this->main_model->delete_dept($id);
		redirect(base_url()."index.php/main/deldept");
		redirect("index.php/main/department","refresh");
	}
	public function deldept()
	{
		$this->load->view("Department");
	}
	public function inserted()
	{
		$this->index();
	}
	public function slip()
	{
		$this->load->model("main_model");
		$id=$this->uri->segment(3);
		$x=$this->uri->segment(4);
		$data["fetch_noofdays"]=$this->main_model->fetch_noofdays($id);
		$data["fetch_salperday"]=$this->main_model->fetch_salperday($x);
		$this->load->view("slip",$data);
	}
}//main