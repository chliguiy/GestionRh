<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('welcome', 'WelcomeController@index');

Route::get('users', 'UsersController@index');

get('/pdf','PdfController@pdf');

Route::filter('home', function()
{
        if (Auth::guest())
                return Redirect::route('login')
                        ->with('flash_error', 'You must be logged in to view this page!');
});
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
Route::group(array('prefix'=>'admin'), function()
{
    Route::get('/'           , array('uses'=>'PdfController@index'   ,'as'=> 'Index'));
    Route::get('/pdf'  , array('uses'=>'PdfController@pdf'    ,'as'=> 'pdf'));
      
});
//Route::resource('users','UsersController',array('only'=>array('show','edit')));
Route::group(array('prefix'=>'employee'), function()
{
    
    Route::get('/', array('uses'=>'EmployeeController@index','as'=> 'EmpIndex'));

    Route::get('/newemp', array('uses'=>'EmployeeController@newemp','as'=> 'newemp'));
    Route::post('/storeemp', array('uses'=>'EmployeeController@store'));
Route::get('/photo', array('uses'=>'EmployeeController@photo','as'=>'photo'));

Route::get('/html', array('uses'=>'EmployeeController@create','as'=>'html'));
Route::get('/edit/{id}', array('uses' => 'EmployeeController@edit' , 'as' => 'editemp'));
 Route::get('/update/{id}', array('uses'=>'EmployeeController@update','as'=>'updateemp'));
 Route::get('/delete/{id}', array('uses' => 'EmployeeController@destroy' , 'as' => 'deleteemp'));
      
});
Route::group(array('prefix'=>'prime'), function()
{
    Route::get('/'           , array('uses'=>'PrimeController@index'   ,'as'=> 'PrimeIndex'));
    Route::get('/new'     , array('uses'=>'PrimeController@newprime'  ,'as'=> 'newprime'));
    Route::post('/store'      , array('uses'=>'PrimeController@store'   ,'as'=> 'storeprime'));
    Route::get('/edit/{id}'  , array('uses'=>'PrimeController@edit'    ,'as'=> 'edit'));
    Route::get('/update/{id}', array('uses'=>'PrimeController@update'  ,'as'=> 'updateprime'));
    Route::get('/delete/{id}', array('uses'=>'PrimeController@destroy' ,'as'=> 'deleteprime'));
      
});
Route::group(array('prefix'=>'employe_bureau'), function()
{
    Route::get('/'           , array('uses'=>'EmployebureauController@index'   ,'as'=> 'EmpbIndex'));
    Route::get('/new'     , array('uses'=>'EmployebureauController@newempbureau'  ,'as'=> 'newempb'));
    Route::post('/store'      , array('uses'=>'EmployebureauController@store'   ,'as'=> 'storebemp'));
    Route::get('/edit/{id}'  , array('uses'=>'EmployebureauController@edit'    ,'as'=> 'edit'));
    Route::get('/update/{id}', array('uses'=>'EmployebureauController@update'  ,'as'=> 'updatebureau'));
    Route::get('/delete/{id}', array('uses'=>'EmployebureauController@destroy' ,'as'=> 'deletebureau'));
      
});
Route::group(array('prefix'=>'conge'), function()
{
    Route::get('/'           , array('uses'=>'CongeController@index'   ,'as'=> 'CongeIndex'));
    Route::get('/new'     , array('uses'=>'CongeController@newconge'  ,'as'=> 'newconge'));
    Route::post('/store'      , array('uses'=>'CongeController@store'   ,'as'=> 'storeconge'));
    Route::get('/edit/{id}'  , array('uses'=>'CongeController@edit'    ,'as'=> 'edit'));
    Route::get('/update/{id}', array('uses'=>'CongeController@update'  ,'as'=> 'updateconge'));
    Route::get('/delete/{id}', array('uses'=>'CongeController@destroy' ,'as'=> 'deleteconge'));
      
});
Route::group(array('prefix'=>'absence'), function()
{
    Route::get('/'           , array('uses'=>'AbsenceController@index'   ,'as'=> 'AbsenceIndex'));
    Route::get('/new'     , array('uses'=>'AbsenceController@newabsence'  ,'as'=> 'newabsence'));
    Route::post('/store'      , array('uses'=>'AbsenceController@store'   ,'as'=> 'storeabsence'));
    Route::get('/edit/{id}'  , array('uses'=>'AbsenceController@edit'    ,'as'=> 'edit'));
    Route::get('/update/{id}', array('uses'=>'AbsenceController@update'  ,'as'=> 'updateabsence'));
    Route::get('/delete/{id}', array('uses'=>'AbsenceController@destroy' ,'as'=> 'deleteabsence'));
      
});
Route::group(array('prefix'=>'contrat'), function()
{
    Route::get('/'           , array('uses'=>'ContratController@index'   ,'as'=> 'ContratIndex'));
    Route::get('/new'     , array('uses'=>'ContratController@newcontrat'  ,'as'=> 'newcontrat'));
    Route::post('/store'      , array('uses'=>'ContratController@store'   ,'as'=> 'store'));
    Route::get('/edit/{id}'  , array('uses'=>'ContratController@edit'    ,'as'=> 'edit'));
    Route::get('/update/{id}', array('uses'=>'ContratController@update'  ,'as'=> 'update'));
    Route::get('/delete/{id}', array('uses'=>'ContratController@destroy' ,'as'=> 'delete'));
      
});
Route::group(array('prefix'=>'chef_agence'), function()
{
    Route::get('/'           , array('uses'=>'ChefagenceController@index'   ,'as'=> 'ChefIndex'));
    Route::get('/new'     , array('uses'=>'ChefagenceController@newchef'  ,'as'=> 'newchef'));
    Route::post('/store'      , array('uses'=>'ChefagenceController@store'   ,'as'=> 'storechef'));
    Route::get('/edit/{id}'  , array('uses'=>'ChefagenceController@edit'    ,'as'=> 'editchef'));
    Route::get('/update/{id}', array('uses'=>'ChefagenceController@update'  ,'as'=> 'updatechef'));
    Route::get('/delete/{id}', array('uses'=>'ChefagenceController@destroy' ,'as'=> 'deletechef'));
      
});