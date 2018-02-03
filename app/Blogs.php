<?php
namespace App;

use Illuminate\Database\Eloquent\model;


class Blogs extends Model
{
	protected $table = "blogs";
	protected $filable = array('blogid','createdby','blog_header','blog_content','updated_date','cur_date');
	
	protected $primarykey = "blogid";
	public $incrementing = false;
	protected $keyType = "int";
	public $timestamps = false;
	
}









?>
