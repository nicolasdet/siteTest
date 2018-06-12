<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {


	

	public function index($id = null)
	{
		$this->load->model('produit');




		$produits = $this->produit->get_all();

		$this->theme->data('produits', $produits);
		$this->render('welcome_message');
	}
}
