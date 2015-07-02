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
use View;
class EmployeeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		

 $employee = employee::all();
 return View::make('employee.index', compact('employee'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function newemp(){
				

		return view('employee.newemp');


	return Redirect::to('/home');


	}
		public function photo(){


		return view('employee.photo');


	
	}
	public function create()
	{

 $employee = employee::all();
 return View::make('employee.html', compact('employee'));


	

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	 $file = array('photo' => Input::file('photo_emp'));
		$validation = Validator::make(Input::all(), employee::$rules);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			 else{
 			 	$image=Input::file('photo_emp');
      $path ='photo';
      $extension = $image->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $image=$image->move($path, $fileName);// uploading file to given path
      var_dump($image);
 			$employee = new employee;
 			$employee->nom_emp = Input::get('nom_emp');
 			$employee->prenom_emp=Input::get('prenom_emp');
 			$employee->sexe_emp=Input::get('sexe_emp');
 			$employee->date_naiss_emp=Input::get('date_naiss_emp');
 			$employee->adresse_emp=Input::get('adresse_emp');
 			$employee->tel_emp=Input::get('tel_emp');
 			$employee->photo_emp=$image;
 			
 			$employee->save();
 			return Redirect::route('EmpIndex');
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
if($employee = employee::find($id))
 			{
 				return View::make('employee.edit', compact('employee'));
 			}
 			else {
 				return View::make('error.503');
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
	$validation = Validator::make(Input::all(), employee::$rules1);
 			if($validation->fails())
 			{
				return Redirect::back()->withInput()->withErrors($validation->messages());
 			}
 			$employee= employee::find($id);
 			$employee->nom_emp = Input::get('nom_emp');
 			$employee->prenom_emp=Input::get('prenom_emp');
 			$employee->sexe_emp=Input::get('sexe_emp');
 			$employee->adresse_emp=Input::get('adresse_emp');
 			$employee->tel_emp=Input::get('tel_emp');
 			$employee->update();
 			return Redirect::route('EmpIndex');

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{$employee = employee::find($id);
		$employee->delete();
		return Redirect::route('EmpIndex');
	}

}
