<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class employee extends Model {

	
protected $table = 'employe'; 

public static $rules = ['nom_emp'=>'required','prenom_emp'=>'required','sexe_emp'=>'required','date_naiss_emp'=>'required','adresse_emp'=>'required','tel_emp'=>'required','photo_emp'];

public static $rules1 = ['nom_emp'=>'required','prenom_emp'=>'required','sexe_emp'=>'required','adresse_emp'=>'required','tel_emp'=>'required'];


}
