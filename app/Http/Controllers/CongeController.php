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
use App\conge;
use View;
class CongeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $conge = conge::all();
 return View::make('conge.index', compact('conge'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newconge(){
				if (Auth::check())
{

		return view('conge.newconge');
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
	
		$validation = Validator::make(Input::all(), conge::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			 else{
 			$conge = new conge;
 			$conge->id_emp = Input::get('id_emp');
 			$conge->type_conge=Input::get('type_conge');
 			$conge->date_debut_conge=Input::get('date_debut_conge');
 			$conge->date_fin_conge=Input::get('date_fin_conge');
 			$conge->save();
 			return Redirect::route('CongeIndex');
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
if($conge = conge::find($id))
 			{
 				return View::make('conge.edit', compact('conge'));
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
	$validation = Validator::make(Input::all(), conge::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}

 			$conge= conge::find($id);
 		$conge->id_emp = Input::get('id_emp');
 			$conge->type_conge=Input::get('type_conge');
 			$conge->date_debut_conge=Input::get('date_debut_conge');
 			$conge->date_fin_conge=Input::get('date_fin_conge');
 			$conge->update();
 			return Redirect::route('CongeIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$conge = conge::find($id);
		$conge->delete();
		return Redirect::route('CongeIndex');
	}

}
