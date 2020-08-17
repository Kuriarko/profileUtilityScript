<?php
class Mymodel extends CI_Model
{
 function __construct()
 {
  parent::__construct();
 } 
 function add($data)
 {
	if($this->db->insert("userinfo",$data))
      return true;		
 }
 function update($data,$id)
 {
  $this->db->set($data);
  $this->db->where("id",$id);
  $this->db->update("userinfo",$data);
 }	 
 function del($id) 
 {
	 $this->db->delete("userinfo","id=".$id);
	 
 }
}

?>	
	