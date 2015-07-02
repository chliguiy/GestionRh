<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model {

	
protected $table = 'commercial'; 

public static $rules = ['id_emp'=>'required','id_bureau'=>'required','libelle_bureau'=>'required'];



}
