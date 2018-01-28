<?php

class User extends MY_Model {

	public $table = 'user';
	public $primary_key = 'user_id';
	public $timestamps = false;

	public $protected_attributes = array('user_id');


}