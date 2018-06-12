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


	public function add($id = null)
	{

		if($this->session->connected)
		{
			Msg::addMessage('bravo, votre produit a bien ete ajouter au panier');
			return $this->index($id);
		}
		Msg::addMessage('erreur vous devez vous authentifier avant de commander un produit');

		return $this->index($id);
	}
}
