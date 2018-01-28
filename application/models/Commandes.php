<?php

class Commandes extends MY_Model {

	public $table = 'commandes';
	public $primary_key = 'commande_id';
	public $timestamps = false;

	public $protected_attributes = array('commande_id');


}