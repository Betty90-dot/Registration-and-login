<?php
class mainmodel extends CI_model
{
	

public function rgstr($reg,$log)
	{

		$this->db->insert("login",$log);
		$userid=$this->db->insert_id();
		$reg['userid']=$userid;
		$this->db->insert("registration",$reg);
	}
public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}

	public function registr_view()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=registration.userid','inner');
		$qry=$this->db->get("registration");
		return $qry;
	}

public function approvereg($id)
	{
		$this->db->set('status','1');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login");
		return $qry;
	
	}
	public function rejectreg($id)
	{
		$this->db->set('status','2');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("login");
		return $qry;
	
	}
	public function selepass($email,$pass)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function verifypass($pass,$qry)
	{
		return password_verify($pass,$qry);
	}
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}

 	public function getuser($id)
 	{
 		$this->db->select('*');
 		$this->db->from("login");
 		$this->db->where("id",$id);
 		return $this->db->get()->row();
 	}
}
?>