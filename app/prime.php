<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class prime extends Model {

	
protected $table = 'prime'; 

public static $rules = ['id_emp'=>'required','date_prime'=>'required','type_prime'=>'required','montant_prime'=>'required','libelle_prime'=>'required'];



}
