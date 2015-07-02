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
use App\chef_agence;
use View;
class ChefagenceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $chef_agence = chef_agence::all();
 return View::make('chef_agence.index', compact('chef_agence'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newchef(){
				if (Auth::check())
{

		return view('chef_agence.new');
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
		$validation = Validator::make(Input::all(), chef_agence::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			$category = new chef_agence;
 			$category->id_emp=Input::get('id_emp');
 			$category->id_bureau=Input::get('id_bureau');
 			$category->save();
 			return Redirect::route('ChefIndex');
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
if($chef = chef_agence::find($id))
 			{
 				return View::make('admin.edit', compact('chef'));
 			}
 			else {
 				# 404 error page 
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
	$validation = Validator::make(Input::all(), chef_agence::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			$category = chef_agence::find($id);
 			$category->id_emp=Input::get('id_emp');
 			$category->id_bureau=Input::get('id_bureau');
 			$category->update();
 			return Redirect::route('AdminIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$category = Category::find($id);
		$category->delete();
		return Redirect::route('AdminIndex');
	}

}
