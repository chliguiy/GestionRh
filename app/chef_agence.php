<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class chef_agence extends Model {

	
protected $table = 'chef_agence'; 

public static $rules = ['id_emp'=>'required','id_bureau'=>'required'];



}
