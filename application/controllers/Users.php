<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		/*
			
			pour lancer gatling on va sur D:\montercharge\gatling-charts-highcharts-bundle-2.3.0\bin>
			gatling.bat

		*/

		$user[0] = 'nicolas';
		$user[1] = 'kevin';

		$arry = [];

		for($i = 0 ; $i < 100; $i++) {
			array_push($arry, 'jzdqhdq'+$i);
		}

		$jsonUser = json_encode($user);


		echo $jsonUser;

		$data = array(
        'user' => $jsonUser,
		);


		//$this->load->view('users', $data);
	}
}
