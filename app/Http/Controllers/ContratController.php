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
use App\contrat;
use View;
class ContratController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $contrat = contrat::all();
 return View::make('contrat.index', compact('contrat'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newcontrat(){
				if (Auth::check())
{

		return view('contrat.new');
}else {

	return Redirect::to('/home');
}
	
	}

	

	public function create()
	{


	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	
		$validation = Validator::make(Input::all(), contrat::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			 else{
 			$contrat = new contrat;
 			$contrat->id_emp = Input::get('id_emp');
 			$contrat->date_debut_travail=Input::get('date_debut_travail');
 			$contrat->date_fin_travail=Input::get('date_fin_travail');
 			$contrat->type_contrat=Input::get('type_contrat');
 			$contrat->salaire=Input::get('salaire');
 			$contrat->save();
 			return Redirect::route('ContratIndex');
	}
}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			if (Auth::check())
{
if($contrat = contrat::find($id))
 			{
 				return View::make('contrat.edit', compact('contrat'));
 			}
 			else {
 				return View::make('error.503');
 			}
		
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
	$validation = Validator::make(Input::all(), contrat::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}

 			$contrat= contrat::find($id);
 		$contrat->id_emp = Input::get('id_emp');
 			$contrat->date_debut_travail=Input::get('date_debut_travail');
 			$contrat->date_fin_travail=Input::get('date_fin_travail');
 			$contrat->type_contrat=Input::get('type_contrat');
 			$contrat->salaire=Input::get('salaire');
 			$contrat->update();
 			return Redirect::route('ContratIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$contrat = contrat::find($id);
		$contrat->delete();
		return Redirect::route('ContratIndex');
	}

}
