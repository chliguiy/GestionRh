<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class atelier extends Model {

	
protected $table = 'atelier'; 

public static $rules = ['id_agence'=>'required','libelle_atelier'=>'required'];



}
