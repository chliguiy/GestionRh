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
use App\employeb;
use View;
class EmployebureauController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $employeb = employeb::all();
 return View::make('employeb.index', compact('employeb'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newempbureau(){
				if (Auth::check())
{

		return view('employeb.newempb');
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
	
		$validation = Validator::make(Input::all(), employeb::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			 else{

 			$employee_bureau= new employeb;
 			
 			$employee_bureau->id_emp = Input::get('id_emp');
 			$employee_bureau->id_bureau=Input::get('id_bureau');
 			$employee_bureau->fonctionalite=Input::get('fonctionalite');
 			$employee_bureau->echelle=Input::get('echelle');
 			$employee_bureau->save();
 			return Redirect::route('EmpbIndex');
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
if($employeb = employeb::find($id))
 			{
 				return View::make('employeb.edit', compact('employeb'));
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
	$validation = Validator::make(Input::all(), employeb::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}

 			$employee_bureau= employeb::find($id);
 
 		$employee_bureau->id_emp = Input::get('id_emp');
 			$employee_bureau->id_bureau=Input::get('id_bureau');
 			$employee_bureau->fonctionalite=Input::get('fonctionalite');
 			$employee_bureau->echelle=Input::get('echelle');
 			$employee_bureau->update();
 			return Redirect::route('EmpbIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$employee_bureau = employeb::find($id);
		$employee_bureau->delete();
		return Redirect::route('EmpbIndex');
	}

}
