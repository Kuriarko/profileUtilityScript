<?php
class Admincontroller extends CI_Controller
{
 function __construct()
 {
  parent::__construct();
  $this->load->database(); 
  $this->load->helper(array('form','url')); 
  $this->load->library('session');
 }
  function welcomeadmin()
 {
	 redirect("/Admincontroller/login");
 }


 function login()
 {
	
	$this->load->view('admin_login');  
 }
 function logindo()
 {	 
	  $data=array("username"=>$this->input->post('name'),"password"=>$this->input->post('password'));
      $query=$this->db->get_where("admin",$data);
	   $res=$query->result_array();
    if ($res)
	{
  	  //echo "Login Successful";
	  $this->session->set_userdata('uid',$this->input->post('name'));
      //$this->load->view('home');
	  redirect("/Admincontroller/home");
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
    $this->load->view('admin_login');
 }
 
 function fetch()
 { 
 if($this->session->userdata('uid'))
 {	 
 $query=$this->db->get("user");
 $data['records']=$query->result();
  $this->load->view('viewusers',$data);
 }
 else
 $this->load->view('admin_login');	 
 }	

function userguide()
{
	 $this->load->view('user_guide');
}
function formupload()
{
	 $this->load->view('formupload');
}
function upload()
{
	
 	
   $data=array("name"=>$this->input->post("name"),"phone"=>$this->input->post("phone"),"email"=>$this->input->post("email"));
    $this->load->model('Projmodel'); 
    if($this->Projmodel->add($data))
	{
		//echo "your data has been added successfully";
		$this->session->set_userdata('phone',$this->input->post("phone"));
	 redirect("/Admincontroller/form");
	}
	else
		echo "Data is not Added";	

}
function form()
{
	if($this->session->userdata('phone'))
	$this->load->view('pdfupload', array('error' => ' ' ));
    else
    $this->load->view('formupload');		
   
}
 function do_upload()
{
	
	if($this->session->userdata('phone'))
	{
	$phone=$this->session->userdata('phone');
	$new_name= $phone."agreement1.jpg";
	
	
	
	$config['upload_path']= './uploads/';
	   $config['allowed_types'] = 'jpg';
	   $config['max_size'] = 100;
       $config['max_width'] = 1024;
       $config['max_height']= 768;
     $config['file_name']= $new_name;	 
 
   
	  $this->load->library('upload', $config);
	  
	    if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('pdfupload', $error); 
         }
		 else
		 {
			 $data = array('upload_data' => $this->upload->data()); 
			 
		 }
		 
		
		  if ( ! $this->upload->do_upload('userfile1')) {
            $error = array('error' => $this->upload->display_errors()); 
          
         }
		 else
		 {
			  $phone=$this->session->userdata('phone');
	          $new_name= $phone."agreement2.jpg";
			    $config['file_name']= $new_name;
			 $data = array('upload_data' => $this->upload->data()); 
			 if($this->session->userdata('phone'))
			 $this->load->view('thankyou');
		      else
             $this->load->view('formupload');		
   
		      
		 }
     }
		 else
		 {
			$this->load->view('formupload'); 
		 }
		 
	
		 
}

function formdownload()
{
	$this->load->view('formdownload');
}
 function del()
 {
  $this->load->model('Projmodel');
  $uid=$this->uri->segment('3');
  $this->Projmodel->del($uid);
  $this->fetch();
 }
 function update() 
 {
	 $this->load->model('Projmodel');
	 $uid=$this->uri->segment('3');
	 $query=$this->db->get_where("user",array("uid"=>$uid));
	 $data['records']=$query->result();
	 $this->load->view('update',$data);
 }
 function updatedo()
 {
	 $data=array("name"=>$this->input->post("name"),"phone"=>$this->input->post("phone"),"email"=>$this->input->post("email"));
	 $uid=$this->input->post("uid");
	 $this->load->model('Projmodel');
	 $this->Projmodel->update($data,$uid);
	 $this->fetch();
	 //redirect("/Admincontroller/fetch");
 }
 function logout()
 {
	 $this->session->unset_userdata('uid');
	 $this->session->sess_destroy();
	 $this->load->view('admin_login');
 }

function agreement1()
 {
	 $uid=$this->uri->segment('3');
     $this->db->where('uid',$uid);	 
	 $query=$this->db->get('user');
	 $data['records']=$query->result();
	 $this->load->view('agreement1',$data); 
 
 }
  function agreement2()
 { 
     $uid=$this->uri->segment('3');
     $this->db->where('uid',$uid);	 
	 $query=$this->db->get('user');
	 $data['records']=$query->result();
	 $this->load->view('agreement2',$data); 
 }


}	
?>