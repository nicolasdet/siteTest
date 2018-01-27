<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index($num = null)
	{

		$user['name'] = 'nicolas';
		$user['lastname'] = 'de tiesenhausen';

		$jsonUser = json_encode($user);


		echo $jsonUser;
		
		$data = array(
        'user' => $jsonUser,
		);

		// user file
		// simulation = fichier de config des endroits ou on veut taper
		

		//$this->load->view('users', $data);
	}
}
