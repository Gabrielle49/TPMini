<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Produit extends CI_Model{
    public $id;
    public $idC;
    public $nom;

    function __construct(){
        parent::__construct();
    }

    public function getProduitCategorie($cat,$page){
        $this->load->database();
        
            echo "Aty";
            $fin = (int)$page * 2;
            $debut = (int)$page;
            $query = $this->db->query("SELECT * FROM PRODUIT where idC=$cat LIMIT $fin OFFSET $debut");
           // echo ("SELECT * FROM Produit where idC=$cat LIMIT $fin OFFSET $debut");
            return ($query->result_array());
    }
    public function getNBProduit($cat){
        $this->load->database();
		$query = $this->db->query("SELECT count(*) as nb FROM PRODUIT where idC=$cat");
        return ($query->result_array());
    }

    public function insertProduit($produit)
    {
        $this->load->database();
        $query = $this->db->query("insert into PRODUIT (id,idC,nom) values (null,$produit->idC,'$produit->nom')");
        
    }

    public function deleteProduit($produit)
    {
        $this->load->database();
        $query = $this->db->query("delete from PRODUIT where id=$produit->id");
        
    }

    public function UpdateProduit($produit)
    {
        $this->load->database();
        $query = $this->db->query("update PRODUIT set nom=$produit->nom,idC=$produit->idC where id=$produit->id");
        
    }

}

?>