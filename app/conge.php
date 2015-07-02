<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class conge extends Model {

	
protected $table = 'conge'; 

public static $rules = [
'id_emp'=>'required',
'type_conge'=>'required',
'date_debut_conge'=>'required',
'date_fin_conge'=>'required'];
}
