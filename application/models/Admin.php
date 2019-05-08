<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model{
    public $id;
    public $user;
    public $mpd;

    function __construct(){
        parent::__construct();
    }

    public function getAdmin($user,$password){
        $this->load->database();
		$query = $this->db->query("SELECT * FROM ADMIN where user=$user and password=$password ");
        return ($query->result_array());
    }

    public function insertPassword($pass)
    {
        $this->load->database();
		$data = array(
            'mdp' => $pass
         );
        $this->db->where('idA', 1);
        $this->db->update('Admin', $data);
    }

    public function getPassword()
    {
        $this->load->database();
		$query = $this->db->query("SELECT * FROM ADMIN ");
        return ($query->result_array());
    }
    public function insertAdmin($admin)
    {
        $this->load->database();
        $pass_hash = password_hash($admin->mdp, PASSWORD_DEFAULT);
        $query = $this->db->query("insert into ADMIN (idA,user,mdp) values (null,'$admin->user','$pass_hash')");
        
    }
    
}

?>