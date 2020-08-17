<?php
class Mycontroller extends CI_Controller
{
 function __construct()
 {
  parent::__construct();
  $this->load->database(); //connect database
  $this->load->helper('url'); 
  $this->load->library('session');
 }
 function index()
 {
	$this->load->view('signup');  
 }	 
 function signupdo() //add signup form data to database
 {
	$data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password")); 
    $this->load->model('Mymodel');
	if($this->Mymodel->add($data))
		//echo "Data Added Successfully";
	  redirect("/mycontroller/fetch");
	else
		echo "Data is not Added";
 }	
 function fetch()  //get all records from database
 {
  $query=$this->db->get("userinfo");
  $data['records']=$query->result();
  //print_r($data);
  $this->load->view('viewusers',$data); 
 }
 function update() //load a form with data to be updated
 {
	 $this->load->model('Mymodel');
	 $id=$this->uri->segment(3);
	 $query=$this->db->get_where("userinfo",array("id"=>$id));
	 $data['records']=$query->result();
	 $this->load->view('update',$data);
 }
 function updatedo() //update the content
 {
	 $data=array("name"=>$this->input->post("name"),"email"=>$this->input->post("email"),"phone"=>$this->input->post("phone"),"password"=>$this->input->post("password"));
	 $id=$this->input->post('id');
	 $this->load->model('Mymodel');
	 $this->Mymodel->update($data,$id);
	 redirect("/mycontroller/fetch");
 }
 function del()
 {
  $this->load->model('Mymodel');
  $id=$this->uri->segment('3');
  $this->Mymodel->del($id);
  $this->fetch();
 }	
 function login()
 {
  $this->load->view('login');
 }	
 function logindo()
 {
  $data=array("email"=>$this->input->post('email'),"password"=>$this->input->post('password'));
  $query=$this->db->get_where("userinfo",$data);
  $res=$query->result_array();
    if ($res)
	{
  	  //echo "Login Successful";
	  $this->session->set_userdata('uid',$this->input->post('email'));
      //$this->load->view('home');
	  redirect("/mycontroller/home");
	}
    else
	  //echo "Wrong userid or password";  
     $this->load->view('elogin');
 }
 function home()
 {
  if($this->session->userdata('uid'))
    $this->load->view('home');
  else
    $this->load->view('login');
 }	 
	
}	
?>