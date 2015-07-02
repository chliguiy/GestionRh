<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class employeb extends Model {

	
protected $table = 'employe_bureau'; 

public static $rules = ['id_emp'=>'required', 'id_bureau'=>'required', 'fonctionalite'=>'required', 'echelle'=>'required'];


}
