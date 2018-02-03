<?php
namespace App;

use Illuminate\Database\Eloquent\model;


class Login extends Model
{
	
	protected $table = "login";
	protected $filable = array('username','password','type');
	
	protected $primarykey = "username";
	public $incrementing = true;
	protected $keyType = "int";

	
	
}









?>
