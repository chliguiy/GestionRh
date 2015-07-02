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
use App\absence;
use View;
class AbsenceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $absence = absence::all();
 return View::make('absence.index', compact('absence'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newabsence(){
				if (Auth::check())
{

		return view('absence.newabsence');
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
	
		$validation = Validator::make(Input::all(), absence::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			 else{

 			$absence= new absence;
 			 
 			$absence->id_emp = Input::get('id_emp');
 			$absence->type_absence=Input::get('type_absence');
 			$absence->date_absence=Input::get('date_absence');
 			$absence->nbr_heure_absence=Input::get('nbr_heure_absence');
 			$absence->justification=Input::get('justification');
 			$absence->save();
 			return Redirect::route('AbsenceIndex');
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
if($absence = absence::find($id))
 			{
 				return View::make('absence.edit', compact('absence'));
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
	$validation = Validator::make(Input::all(), absence::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}

 			$absence= absence::find($id);
 
 	$absence->id_emp = Input::get('id_emp');
 			$absence->type_absence=Input::get('type_absence');
 			$absence->date_absence=Input::get('date_absence');
 			$absence->nbr_heure_absence=Input::get('nbr_heure_absence');
 			$absence->justification=Input::get('justification');
 			$absence->update();
 			return Redirect::route('AbsenceIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$absence = absence::find($id);
		$absence->delete();
		return Redirect::route('AbsenceIndex');
	}

}
