<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connect extends MY_Controller {

	public function index($num = null)
	{	
		$this->render('connect');
	}

	public function log() {

		if(empty($_POST['login']) || empty($_POST['password'])) {
			Msg::addMessage('erreur le formulaire est mal remplis');
			return $this->index();
		}

		$data['login'] 	  = $_POST['login'];
		$data['password'] = $_POST['password'];
		$utilisateur = $this->user->get(['login' => $data['login'], 'password' => $data['password']]);

		if(isset($utilisateur) && $utilisateur){
			Msg::addMessage('Bravo tu est maintenent connecter');
			return $this->index();
		}

					Msg::addMessage('Bravo tu est maintenent connecter');
			return $this->index();
	}


}
