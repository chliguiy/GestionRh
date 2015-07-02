<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use BaseController;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use Validator;
use Input;
use App\employee;
use App\User;
use View;
use File;
use Session;
use Image;
use PDF;
class PdfController extends Controller {



		public function index()
	{
		
	
		if (Auth::check())
{

 
 return View::make('admin.pdf');

		}else {

	return Redirect::to('/home');
}
	
	}
public function pdf(){

		if (Auth::check())
{


$id=Input::get('id_emp');
if($employee = employee::find($id))
  

{
$prenom=$employee->prenom_emp;
$nom=$employee->nom_emp;
$date=$employee->date_naiss_emp;
$tel=$employee->tel_emp;
$email=$employee->email_emp;
$sexe=$employee->sexe_emp;
$adresse=$employee->adresse_emp;
  $pdf = PDF::loadHTML('<html>
<body>
	<h1>Fiche personnel</h1>
	<h5>votre matricule est </h5><h4>'.$id.'</h4>
<centre>


<table>
<tr><td>NOm</td><td>'.$prenom.'</td></tr>
<tr><td>Prenom</td><td>'.$nom.'</td></tr>
<tr><td>date Naissance</td><td>'.$date.'</td></tr>
<tr><td>sexe</td><td>'.$sexe.'</td></tr>
<tr><td>adresse</td><td>'.$adresse.'</td></tr>
<tr><td>tel</td><td>'.$tel.'</td></tr>

</table>
</centre>

</body>
</html>


');
    return $pdf->stream();



}
	}else {

	return Redirect::to('/home');
}

}


  
 	
 
}
