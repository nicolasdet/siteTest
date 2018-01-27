<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function index($id = null)
	{

			$produits = $this->produit->get($id);

			$this->theme->data('produit' , $produits);
			$this->render('product');

			
		// user file
		// simulation = fichier de config des endroits ou on veut taper
		

		//$this->load->view('users', $data);
	}
}
