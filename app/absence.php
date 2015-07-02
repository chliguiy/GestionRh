<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class absence extends Model {

	
protected $table = 'absence'; 

public static $rules = ['id_emp'=>'required','type_absence'=>'required','date_absence'=>'required','nbr_heure_absence'=>'required','justification'];

public static $rules1 = ['id_emp'=>'required','type_absence'=>'required','date_absence'=>'required','nbr_heure_absence'=>'required'];


}
