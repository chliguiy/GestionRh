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
use App\Category;
use View;
class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{
 $categorise = Category::all();
 return View::make('admin.index', compact('categorise'));
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newcat(){
				if (Auth::check())
{

		return view('admin.newcategory');
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
		$validation = Validator::make(Input::all(), Category::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			$category = new Category;
 			$category->name = Input::get('name');
 			$category->save();
 			return Redirect::route('AdminIndex');
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
if($category = Category::find($id))
 			{
 				return View::make('admin.edit', compact('category'));
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
	$validation = Validator::make(Input::all(), Category::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			$category = Category::find($id);
 			$category->name = Input::get('name');
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
