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
use App\photo;
use View;
use File;
use Session;
use Image;
class PhotoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		
		if (Auth::check())
{

 return View::make('admin.photo');
}else {

	return Redirect::to('/home');
}
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
public function show()
{

			if (Auth::check())
{
$photo = photo::all();
 return View::make('admin.photo',compact('photo'));
}else {

	return Redirect::to('/home');
}
		
}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{ 


		 $file = array('photo' => Input::file('photo'));
  // setting up rules
  $rules = array('photo' => 'required',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
  
  
    // send back to the page with the input data and errors
    	return Redirect::back()->withInput()->withErrors($validator->messages());
  }
  else {
    // checking file is valid.
    if (Input::file('photo')->isValid()) {
 $path ='public/photo';
      $extension = Input::file('photo')->getClientOriginalExtension(); // getting image extension
      $fileName = rand(11111,99999).'.'.$extension; // renameing image
      $image=Input::file('photo')->move($path, $fileName);// uploading file to given path
      // sending back with message
      $img=Image::make($image)->resize(20,11);
      Session::flash('success', 'Upload successfully'); 
   
      $photo = new photo;
      $photo->photo = $img;
      $photo->save();
      return Redirect::to('admin/photo');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('admin/photo');
    }
  }

	}

}
