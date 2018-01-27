<?php

class Produit extends MY_Model {

	public $table = 'Produit';
	public $primary_key = 'produit_id';
	public $timestamps = false;

	public $protected_attributes = array('produit_id');


}