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
use App\prime;
use View;
class PrimeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $prime = prime::all();
 return View::make('prime.index', compact('prime'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newprime(){
				if (Auth::check())
{

		return view('prime.newprime');
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
	
		$validation = Validator::make(Input::all(), prime::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			 else{

 			$prime = new prime;
 			$prime->id_emp = Input::get('id_emp');
 			$prime->date_prime=Input::get('date_prime');
 			$prime->type_prime=Input::get('type_prime');
 			$prime->montant_prime=Input::get('montant_prime');
 			$prime->libelle_prime=Input::get('libelle_prime');
 			$prime->save();
 			return Redirect::route('PrimeIndex');
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
if($prime = prime::find($id))
 			{
 				return View::make('prime.edit', compact('prime'));
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
	$validation = Validator::make(Input::all(), prime::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}

 			$prime= prime::find($id);
 
 		$prime->id_emp = Input::get('id_emp');
 			$prime->date_prime=Input::get('date_prime');
 			$prime->type_prime=Input::get('type_prime');
 			$prime->montant_prime=Input::get('montant_prime');
 			$prime->libelle_prime=Input::get('libelle_prime');
 			$prime->update();
 			return Redirect::route('PrimeIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$prime = prime::find($id);
		$prime->delete();
		return Redirect::route('PrimeIndex');
	}

}
