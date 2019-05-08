<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
       
	public function index()
        {
                $this->load->helper('url');
                $this->load->model('Categorie');
                $utilisateur['nom'] = $this->Categorie->getById();
                $this->load->view('Pages/header',$utilisateur);
                $this->load->view('index');
                $this->load->view('Pages/footer');
	}
	
	public  function login()
        {
                       $this->load->library('session');
                       $data = array(
                                'user_name' => $this->input->post('username'),
                                'password' => $this->input->post('password')
                                );
                        $this->load->model('Admin');
                        $utilisateur = $this->Admin->getPassword();
                        $indice = 0;
                        for($i=0;$i<count($utilisateur);$i++){
                                if (password_verify($data['password'], $utilisateur[$i]['MDP']))
                                {
                                      $this->session->set_userdata('utilisateur',$utilisateur[$i]);
                                      $this->load->view('PageBack/Header');
                                      $this->load->view('PageBack/Contenu' );
                                      $this->load->view('PageBack/Menu');
                                      $this->load->view('PageBack/footer');
                                      $this->load->view('back'); 
                                      break;
                                }
                               
                        }
                       
        }
        public function listings()
        {
                $this->load->helper('url');
                $this->load->view('listings');  
        }
        
        public function blog($value,$wa)
        {
                $this->load->helper('url');
                $this->load->model('Produit');
                $this->load->model('Categorie');
                $utilisateur['nom'] = $this->Categorie->getById();
                $this->load->view('Pages/header',$utilisateur);
                $produit['nom'] = $this->Produit->getProduitCategorie($value,$wa);
                $produit['nb'] = ($this->Produit->getNBProduit($value));
                $produit['wawa'] = ((int)$produit['nb'][0]['nb']/2);
                $produit['categorie'] = $value;
                $this->load->view('blog');
                $this->load->view('Pages/Section',$produit);
                $this->load->view('Pages/footer');
        }
        public function formulaire()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('Form');
                }
                else
                {
                        $this->load->view('success');
                }
        }
       
       public function insertion()
       {
                $this->load->view('PageBack/Header');
                $this->load->view('insertion');               
                $this->load->view('PageBack/FormInsertion');
                $this->load->view('PageBack/Menu');
                $this->load->view('PageBack/footer');
       }
       public function exportPdf()
       {
                $this->load->view('PageBack/Header');
                $this->load->view('blank');
                $this->load->view('PageBack/Menu');
                $this->load->view('PageBack/footer');
       }
       public function liste()
       {
                $this->load->view('PageBack/Header');
                $this->load->view('PageBack/basic-table');
                $this->load->view('PageBack/Menu');
                $this->load->view('PageBack/footer');
       }
       public function insertObject()
       {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
                $data = array(
                'NomProduit'=>$this->input->post('ProduitName'),
                'CategorieSelect'=>$this->input->post('SelectName'),
                'Categorie' => $this->input->post('CategorieName')
                );
                print_r($data);
        $this->load->model('Categorie');
        if($data['NomProduit']!=null && $data['CategorieSelect']!=null){ 
                echo "ato";       
                $utilisateur = $this->Categorie->getById();
                echo (count($utilisateur));
                for($i=0;$i<count($utilisateur);$i++)
                {
                        if($utilisateur[$i]['NOM']==$data['CategorieSelect']){
                                $this->load->model('Produit');
                                $produit = new Produit();
                                $produit->idC = $utilisateur[$i]['IDC'];
                                $produit->nom = $data['CategorieSelect'];
                                
                                $this->Produit->insertProduit($produit);

                        }
                }
        }
        if($data['Categorie']!=null)
        {
                echo ("Wawa");
                $categorie = new Categorie();
                $categorie->nom = $data['Categorie'];
                $this->Categorie->insertCategorie($categorie);

        }
       }
     
       public function essai()
       {
        $this->load->library('pdf');
        //require('fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', '', 18);
        $pdf->Cell(0, 10, 'Mon Super Titre');
        $pdf->Output();
         

       }
   

}?>
