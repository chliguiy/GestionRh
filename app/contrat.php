<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class contrat extends Model {

	
protected $table = 'contrat'; 

public static $rules = ['id_emp'=>'required','date_debut','date_fin','type_contrat'=>'required','salaire'=>'required'];




}
