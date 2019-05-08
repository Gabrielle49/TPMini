<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorie extends CI_Model{
    public $id;
    public $nom;

    function __construct(){
        parent::__construct();
    }

    public function getById(){
        $this->load->database();
		$query = $this->db->get("CATEGORIE");
		return ($query->result_array());
    }

    public function insertCategorie($categorie)
    {
        $this->load->database();
        $query = $this->db->query("insert into CATEGORIE (idC,nom) values (null,'$categorie->nom')");
        
    }

    public function deleteCategorie($categorie)
    {
        $this->load->database();
        $query = $this->db->query("delete from CATEGORIE where idC=$categorie->id");
        
    }

    public function UpdateCategorie($categorie)
    {
        $this->load->database();
        $query = $this->db->query("update CATEGORIE set nom=$categorie->nom where idC=$categorie->id");
        
    }

    
}

?>