<?php namespace App;


use Illuminate\Database\Eloquent\Model as Eloquent;

class bureau extends Eloquent {

protected $table = 'bureau';
public static $rules = ['id_emp'=>'required','libelle_bureau'=>'required'];
}
