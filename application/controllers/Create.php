<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create extends MY_Controller {

	public function index($num = null)
	{	

		$this->render('create');
	}

	public function new()
	{
		if(empty($_POST['login']) || empty($_POST['password'])) {
			Msg::addMessage('erreur le formulaire est mal remplis');
			return $this->index();
		}


		if(strlen($_POST['login']) < 3  || strlen($_POST['password']) < 3) {
			Msg::addMessage('erreur 3 charractere minnimum');
			return $this->index();
		}
		exit();

		$data['login'] 	  = $_POST['login'];
		$data['password'] = $_POST['password'];

		$utilisateur = $this->user->get(['login' => $data['login']]);

		if(isset($utilisateur) && $utilisateur){
			Msg::addMessage('erreur le login est deja utilisé');
			return $this->index();
		}




		if($this->user->insert($data)){
			Msg::addMessage('Bravo vous avez créer un compte');
		}else {
			Msg::addMessage("une erreur c\'est produite lors de la creation de votre compte, veuillez reesayer");
		}

		$this->index();

	}

	public function delete()
	{
		$utilisateur = $this->user->delete(['login' => 'test']);
	}
}
